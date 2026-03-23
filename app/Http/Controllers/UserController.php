<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserRequest;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index(){
        $usuarios = User::orderBy("name","ASC")->get();

        return view("users.listar",compact("usuarios"));
    }
    public function create(){
        return view("users.cadastrar");
    }
    public function store(UserRequest $request){
      
        // validar o formulário
        $request->validated();
      
        // Marca o ponto incial da transação
        DB::beginTransaction();

        try {
            //cadastrar no banco de dados na tabela usuários 

            User::create([
                "name" => $request->nome_completo,
                "email" => $request->email,
                "password" => $request->password
            ]);
            
            // operação concluida com sucesso
            DB::commit();

            return redirect()->route("users.listar")->with("success","Usuário cadastrado com sucesso");
        } catch (Exception $ex) {
            DB::rollBack();
            return back()->withInput()->with("error","usuário não cadastrado com sucesso");
            //throw $th;
        }
        
    }

    public function show(Request $request){
        
        $user = User::where("id",$request->id)->first();
       
        if ($user->exists()) {
            return view("users.show")->with([
                "user" => $user
            ]);
        }

        return back()->with("error","usuário não encontrado");
    }
    
    public function edit(Request $request){
       
        $user = User::where("id",$request->id);
       
        if ($user->exists()) {
            $user = $user->get();

            return view("users.edit")->with("user",$user);
        }

      
        return back()->with("error","usuário não encontrado");

    }
}
