<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function listarPlanos(){
        return view('meusPlanos');
    }

    public function preencherPlano($numAba = null){
        if($numAba == 1){
            return view('abasPreenchimentoPlano.identificacao');
        }else if($numAba == 2){
            return view('abasPreenchimentoPlano.aulas');
        }else if($numAba == 3){
            return view('abasPreenchimentoPlano.ensino');
        }else if($numAba == 4){
            return view('abasPreenchimentoPlano.pesquisa');
        }else if($numAba == 5){
            return view('abasPreenchimentoPlano.extensao');
        }else if($numAba == 6){
            return view('abasPreenchimentoPlano.administrativas');
        }else{
            return 'it works';
        }
    }

    public function salvarPlano(){
        return "ta salvo";
    }
}
