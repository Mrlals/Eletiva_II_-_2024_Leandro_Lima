<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Venda;
use App\Models\Pacote;

class DashboardController extends Controller
{
    public function gerarGrafico()
    {
        $graficoDados = Pacote::withCount('vendas')
            ->get()
            ->map(function ($pacote) {
                return [
                    'nome' => $pacote->destino->nome ?? 'Sem destino',
                    'quantidade' => $pacote->vendas_count,
                ];
            })
            ->toArray();

        return view('dashboard', compact('graficoDados'));
    }
}