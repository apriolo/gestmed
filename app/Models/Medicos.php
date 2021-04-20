<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicos extends Model
{
    use HasFactory;

    protected $fillable = [
        'nome',
        'crm',
        'email',
        'endereco',
        'telefone',
        'estado',
        'cep',
        'cidade'
    ];
}
