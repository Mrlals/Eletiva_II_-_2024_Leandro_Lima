<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Venda extends Model
{
    use HasFactory;

    protected $fillable = ['cliente_id', 'pacote_id', 'data_contratacao'];

    // Relacionamento: Uma Venda pertence a um Cliente
    public function cliente()
    {
        return $this->belongsTo(Cliente::class);
    }

    // Relacionamento: Uma Venda pertence a um Pacote
    public function pacote()
    {
        return $this->belongsTo(Pacote::class);
    }
}
