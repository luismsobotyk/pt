<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function listarPlanos(){
        return view('meusPlanos');
    }

    public function preencherPlano($numAba = null){
        if($numAba == null){
            return view('abasPreenchimentoPlano.identificacao');
        }else if($numAba == 1){
            return view('abasPreenchimentoPlano.identificacao');
        }else if($numAba == 2){
            return "oi";
        }else{
            return 'it works';
        }
    }
}
