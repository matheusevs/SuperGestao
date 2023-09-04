<?php

namespace App\Http\Controllers;

use App\SiteContato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    
    public function contato(){

        $motivos_contato = [
            '1' => 'Dúvida',
            '2' => 'Elogio',
            '3' => 'Reclamação'
        ];

        return view('site.contato', ['motivos_contato' => $motivos_contato]);

    }

    public function salvar(Request $request){

        $request->validate([
            'nome' => 'required|min:3|max:50',
            'telefone' => 'required',
            'email' => 'required',
            'motivo_contato' => 'required',
            'mensagem' => 'required|max:2000'
        ]);

        SiteContato::create($request->all());

    }

}
