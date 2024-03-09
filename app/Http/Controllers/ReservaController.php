<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Reserva;

class ReservaController extends Controller
{
    public function showFormularioCadastro(Request $request){

        return view("formularioCadastroReserva");
    }

    public function cadReserva(Request $request){
        
        $dadosValidos = $request->validate([
            'idcliente' => 'integer|required',
            'idfuncionario' => 'integer|required',
            'numeroquarto' => 'integer|required',
            'situacao' => 'string|required',
            'valortotal' => 'numeric|required',
            'dataentrada' => 'date|required',
            'datasaida' => 'date|required'
        ]);

    
        Reserva::create($dadosValidos);
        return Redirect::route('home');
    }

    public function gerenciarReserva(){
        return view('gerenciarReserva');
    }
}
