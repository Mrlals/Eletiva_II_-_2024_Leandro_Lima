<?php

namespace App\Http\Controllers;

use App\Models\Venda;
use App\Models\Cliente;
use App\Models\Pacote;
use Illuminate\Http\Request;

class VendaController extends Controller
{
    public function index()
    {
        $vendas = Venda::with(['cliente', 'pacote'])->get();
        return view('vendas.index', compact('vendas'));
    }

    public function create()
    {
        $clientes = Cliente::all();
        $pacotes = Pacote::all();
        return view('vendas.create', compact('clientes', 'pacotes'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'cliente_id' => 'required|exists:clientes,id',
            'pacote_id' => 'required|exists:pacotes,id',
            'data_contratacao' => 'required|date',
        ]);

        Venda::create($request->all());
        return redirect()->route('vendas.index')->with('success', 'Venda registrada com sucesso!');
    }

    public function show($id)
    {
        $venda = Venda::with(['cliente', 'pacote'])->findOrFail($id);
        return view('vendas.show', compact('venda'));
    }

    public function edit($id)
    {
        $venda = Venda::findOrFail($id);
        $clientes = Cliente::all();
        $pacotes = Pacote::all();
        return view('vendas.edit', compact('venda', 'clientes', 'pacotes'));
    }

    public function update(Request $request, $id)
    {
        $venda = Venda::findOrFail($id);

        $request->validate([
            'cliente_id' => 'required|exists:clientes,id',
            'pacote_id' => 'required|exists:pacotes,id',
            'data_contratacao' => 'required|date',
        ]);

        $venda->update($request->all());
        return redirect()->route('vendas.index')->with('success', 'Venda atualizada com sucesso!');
    }

    public function destroy($id)
    {
        Venda::destroy($id);
        return redirect()->route('vendas.index')->with('success', 'Venda removida com sucesso!');
    }
}
