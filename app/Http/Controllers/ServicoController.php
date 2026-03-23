<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicoController extends Controller
{
    public function index() { return view('servicos.index'); }
    public function create() { return view('servicos.create'); }
    public function store(Request $request) { /* ... */ }
    public function edit($id) { return view('servicos.edit', compact('id')); }
    public function update(Request $request, $id) { /* ... */ }
    public function destroy($id) { /* ... */ }
}
