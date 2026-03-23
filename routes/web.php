<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/',function (){
    return view("index");
});

Route::prefix("users")->group(function (){

    Route::get('/',[UserController::class,"index"])->name("users.listar");
    Route::get('/cadastrar',[UserController::class,"create"])->name("users.cadastrar");
    Route::post('/cadastrar',[UserController::class,"store"])->name("users.store");
    Route::get('/ver/{id}',[UserController::class,"show"])->name("user.view");
    Route::get('/editar/{id}',[UserController::class,"edit"])->name("user.edit");

});
