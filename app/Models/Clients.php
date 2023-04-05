<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Clients extends Model
{
    use HasFactory;

    protected $fillable = ['nome', 'email', 'telefone', 'data_nascimento', 'sexo', 'cep', 'rua', 'numero', 'bairro', 'cidade', 'estado', 'pais'];
}
