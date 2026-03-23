<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PacienteController extends Controller
{
    public function index() { return view('pacientes.index'); }
    public function create() { return view('pacientes.create'); }
    public function store(Request $request) { /* ... */ }
    public function show($id) { return view('pacientes.show', compact('id')); }
    public function edit($id) { return view('pacientes.edit', compact('id')); }
    public function update(Request $request, $id) { /* ... */ }
    public function destroy($id) { /* ... */ }
}
