<?php

namespace App\Http\Controllers;

use App\Models\projeto;
use Illuminate\Http\Request;

class ProjetoController extends Controller
{
    public function index()
    {
        $destinos = projeto::all();
        return view('projeto.index', compact('projeto'));
    }

    public function create()
    {
        return view('projeto.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nome' => 'required|string|max:255',
            'descricao' => 'nullable|string',
        ]);

        projeto::create($request->all());

        return redirect()->route('projeto.index')->with('success', 'Projeto criado com sucesso.');
    }
}

