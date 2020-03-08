<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\InscricaoAlunos;
use RealRashid\SweetAlert\Facades\Alert;

class Aluno extends Controller
{
    public function index(Alert $alert){
        $alert::info('Infomação', 'As incrições foram encerradas');
    	return redirect()->route('inicio');
    }
    public function store(InscricaoAlunos $aluno, Request $request, Alert $alert){
    	// $nome = $request->input('nomealuno');
    	// $email = $request->input('emailaluno');
    	// $matricula = $request->input('matriculaaluno');
     //    $modalidade = $request->input('modalidade');

    	// $dados = array('nome' => $nome, 'email' => $email, 'matricula' => $matricula, 'modalidade' => $modalidade);
     //    if($modalidade != null){
     //        if($aluno::where('email',$email)->exists()){
     //            $alert::info('Infomação', 'Email já cadastrado');
     //            return redirect()->route('inscricaoevento');
     //        }else if($aluno::where('nome',$nome)->exists()){
     //            $alert::info('Infomação', 'Nome já cadastrado');
     //            return redirect()->route('inscricaoevento');
     //        }else if($aluno::where('matricula',$matricula)->exists()){
     //            $alert::info('Infomação', 'Matricula já cadastrada');
     //            return redirect()->route('inscricaoevento');
     //        }else{
     //            if($aluno->insert($dados)){
     //            $alert::success('Sucesso', 'Inscrição realizada com sucesso');
     //            return redirect()->route('inicio');
     //            }else{
     //                $alert::error('Erro', 'Sua inscrição não foi realizada');
     //                return redirect()->route('inscricaoevento');
     //            }
     //        }
     //    }else{
     //        $alert::info('Infomação', 'O campo da modalidade esta vazio');
     //            return redirect()->route('inscricaoevento');
     //    }

        $alert::info('Infomação', 'As incrições foram encerradas');
        return redirect()->route('inscricaoevento');
    }
}
