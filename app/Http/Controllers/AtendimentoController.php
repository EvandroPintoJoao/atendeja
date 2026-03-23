<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AtendimentoController extends Controller
{
    public function index() { return view('atendimentos.index'); }
    public function iniciar($id) { /* ... */ }
    public function finalizar($id) { /* ... */ }
    public function chamarProximo() { /* ... */ }
}
