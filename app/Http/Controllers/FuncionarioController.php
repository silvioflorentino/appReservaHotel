<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Funcionario;

class FuncionarioController extends Controller
{
    public function showFormularioCadastro(Request $request){

        return view("formularioCadastroFuncionario");
    }

    public function cadFuncionario(Request $request){
        $dadosValidos = $request->validate([
            'nome' => 'string|required',
            'funcao' => 'string|required'
        ]);

        Funcionario::create($dadosValidos);
        return Redirect::route('home');
    }

    public function gerenciarFuncionario(){
        return view('gerenciarFuncionario');
    }
}
