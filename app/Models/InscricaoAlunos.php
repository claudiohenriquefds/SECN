<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InscricaoAlunos extends Model
{
    protected $fillable = ['nome','email','matricula','modalidade'];
}
