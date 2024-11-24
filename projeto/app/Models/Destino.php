<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destino extends Model
{
    use HasFactory;

    // Permitir preenchimento em massa dos atributos
    protected $fillable = ['nome', 'descricao'];

    // Relacionamento: Um Destino pode ter vários Pacotes
    public function pacotes()
    {
        return $this->hasMany(Pacote::class);
    }
}
