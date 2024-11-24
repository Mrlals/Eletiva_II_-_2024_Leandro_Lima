<?php

namespace App\Http\Controllers;

use App\Models\Destino;
use Illuminate\Http\Request;

class DestinoController extends Controller
{
    public function index()
    {
        $destinos = Destino::all();
        return view('destinos.index', compact('destinos'));
    }

    public function create()
    {
        $destinos = Destino::all(); // Pegando todos os destinos
        return view('pacotes.create', compact('destinos'));

    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'nullable|string',
        ]);

        Destino::create($request->all());
        return redirect()->route('destinos.index')->with('success', 'Destino cadastrado com sucesso!');
    }

    public function show($id)
    {
        $destino = Destino::findOrFail($id);
        return view('destinos.show', compact('destino'));
    }

    public function edit($id)
    {
        $destino = Destino::findOrFail($id);
        return view('destinos.edit', compact('destino'));
    }

    public function update(Request $request, $id)
    {
        $destino = Destino::findOrFail($id);

        $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'nullable|string',
        ]);

        $destino->update($request->all());
        return redirect()->route('destinos.index')->with('success', 'Destino atualizado com sucesso!');
    }

    public function destroy($id)
    {
        Destino::destroy($id);
        return redirect()->route('destinos.index')->with('success', 'Destino removido com sucesso!');
    }
}
