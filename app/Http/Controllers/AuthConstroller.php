<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\RegisterRequest;

class AuthConstroller extends Controller
{

    public function index(): View
    {
        return view('auth.login');
    }
    /**
     * @param Request $request
     */
    public function login(LoginRequest $request)
    {
        $credentials = $request->validated();


        if ($credentials) {
            $user = User::where('email', $credentials['email'])->first();
            if (!$user) {
                return back()->withErrors(['email' => 'Usuário não encontrado.']);
            }
            if (Hash::check($credentials['password'], $user->password)) {

                $request->session()->regenerate();
                Auth::login($user, $credentials['remember'] ?? false);

                match ($user->role) {
                    'admin' => $redirectTo = '/dashboard/admin',
                    'funcionario' => $redirectTo = '/dashboard',
                    default => $redirectTo = '/fila', //ainda por analisar
                };

                return redirect()->intended($redirectTo);
            } else {
                return back()->withErrors(['email' => 'Credenciais inválidas.']);
            }
        }
    }

    public function create()
    {
        return view('auth.register');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RegisterRequest $request)
    {
        $data = $request->validated();
        $user = User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);

        if ($user) {
            $request->session()->regenerate();
            Auth::login($user);
        }

        return redirect()->route('login')->with('success', 'Usuário registrado com sucesso!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect()->route('login');
    }
}
