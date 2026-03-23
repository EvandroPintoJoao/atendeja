<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FilaController extends Controller
{
    public function index() { return view('fila.index'); }
    public function chamarProximo() { /* ... */ }
    public function marcarAtendido($id) { /* ... */ }
    public function priorizar($id) { /* ... */ }
}
