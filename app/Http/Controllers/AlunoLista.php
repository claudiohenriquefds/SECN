<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InscricaoAlunos;

class AlunoLista extends Controller
{
	public function __construct()
    {
        $this->middleware('auth');
    }
    public function show(InscricaoAlunos $aluno){
    	$alunos = $aluno::all();
    	return view('Secn.listaalunos',compact('alunos'));
    }
}
