<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContatoController extends Controller
{
    
    public function contato(Request $request){

        echo '<pre>';
            print_r($request->all());
        echo '</pre>';
        return view('site.contato');

    }

}
