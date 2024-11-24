<?php

namespace App\Http\Controllers;

use App\Models\Pacote;
use App\Models\Destino;
use Illuminate\Http\Request;

class PacoteController extends Controller
{
    public function index()
    {
        $pacotes = Pacote::with('destino')->get();
        return view('pacotes.index', compact('pacotes'));
    }

    public function create()
    {
        $destinos = Destino::all();
        return view('pacotes.create', compact('destinos'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'destino_id' => 'required|exists:destinos,id',
            'data_inicio' => 'required|date',
            'data_fim' => 'required|date|after_or_equal:data_inicio',
            'valor' => 'required|numeric',
        ]);

        Pacote::create($request->all());
        return redirect()->route('pacotes.index')->with('success', 'Pacote cadastrado com sucesso!');
    }

    public function show($id)
    {
        $pacote = Pacote::with('destino')->findOrFail($id);
        return view('pacotes.show', compact('pacote'));
    }

    public function edit($id)
    {
        $pacote = Pacote::findOrFail($id);
        $destinos = Destino::all();
        return view('pacotes.edit', compact('pacote', 'destinos'));
    }

    public function update(Request $request, $id)
    {
        $pacote = Pacote::findOrFail($id);

        $request->validate([
            'destino_id' => 'required|exists:destinos,id',
            'data_inicio' => 'required|date',
            'data_fim' => 'required|date|after_or_equal:data_inicio',
            'valor' => 'required|numeric',
        ]);

        $pacote->update($request->all());
        return redirect()->route('pacotes.index')->with('success', 'Pacote atualizado com sucesso!');
    }

    public function destroy($id)
    {
        Pacote::destroy($id);
        return redirect()->route('pacotes.index')->with('success', 'Pacote removido com sucesso!');
    }
}
