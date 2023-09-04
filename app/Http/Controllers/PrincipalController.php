<?php

namespace App\Http\Controllers;

use App\MotivoContato;
use Illuminate\Http\Request;

class PrincipalController extends Controller
{
    
    public function principal(){

        $motivos_contato = MotivoContato::all();

        return view('site.principal', ['motivos_contato' => $motivos_contato]);

    }

}
