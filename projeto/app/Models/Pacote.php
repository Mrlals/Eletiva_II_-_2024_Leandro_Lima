<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pacote extends Model
{
    use HasFactory;

    protected $fillable = ['destino_id', 'data_inicio', 'data_fim', 'valor'];

    // Relacionamento: Um Pacote pertence a um Destino
    public function destino()
    {
        return $this->belongsTo(Destino::class);
    }

    // Relacionamento: Um Pacote pode ter várias Vendas
    public function vendas()
    {
        return $this->hasMany(Venda::class);
    }
}
