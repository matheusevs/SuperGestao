<?php

namespace App\Http\Controllers;

use App\MotivoContato;
use App\SiteContato;
use Illuminate\Http\Request;

class ContatoController extends Controller
{
    
    public function contato(){

        $motivos_contato = MotivoContato::all();

        return view('site.contato', ['motivos_contato' => $motivos_contato]);

    }

    public function salvar(Request $request){

        $request->validate(
            [
                'nome' => 'required|min:3|max:50|unique:site_contatos',
                'telefone' => 'required',
                'email' => 'email',
                'motivo_contatos_id' => 'required',
                'mensagem' => 'required|max:2000'
            ],
            [
                'nome.min'          => 'O campo nome precisa ter no mínimo 3 caracteres',
                'nome.max'          => 'O campo nome deve ter no máximo 50 caracteres',
                'mensagem.max'      => 'O campo de mensagens deve ter no máximo 2000 caracteres',
                'unique'            => 'O :attribute informado já está incluso',
                'required'          => 'O campo :attribute precisa ser preenchido',
                'email'             => 'O e-mail informado precisa ser um e-mail válido'
            ]
        );

        SiteContato::create($request->all());
        return redirect()->route('site.index');

    }

}
