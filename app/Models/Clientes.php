<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;


class Clientes extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'dataNascimento',
        'cpf',
        'profissao',
        'telefone',
        'cidade',
        'endereco',
        'dataCadastro',
        'dataCompra'
    ];


}
