<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function listarPlanos(){
        return view('meusPlanos');
    }

    public function preencherPlano(){
        return view('layouts.preenchimentoPlano');
    }
}
