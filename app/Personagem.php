<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Personagem extends Model
{
    protected $fillable = [
        'nome', 'genero', 'origem', 'idade', 'data_nascimento', 'nen',
    ];
}
