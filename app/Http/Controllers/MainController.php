<?php

namespace App\Http\Controllers;

use App\Models\User;
use Request;

use App\Models\WorkPlan;
use Illuminate\Support\Facades\DB;
use Nexmo\Message\Shortcode\Alert;

class MainController extends Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function verNotificacoes(){
        return view('notificacoes');
    }

    public function listarPlanos(){
        return view('meusPlanos');
    }

    public function verPlano(){
        return view('verPlano');
    }

    public function verRelatorio(){
        return view ('verRelatorio');
    }

    public function listarRelatorios(){
        return view('meusRelatorios');
    }

    public function preencherPlano($numAba = null)
    {

        if ($numAba == 1) {
            return view('abasPreenchimentoPlano.identificacao');
        } else if ($numAba == 2) {
            return view('abasPreenchimentoPlano.aulas');
        } else if ($numAba == 3) {
            return view('abasPreenchimentoPlano.ensino');
        } else if ($numAba == 4) {
            return view('abasPreenchimentoPlano.pesquisa');
        } else if ($numAba == 5) {
            return view('abasPreenchimentoPlano.extensao');
        } else if ($numAba == 6) {
            return view('abasPreenchimentoPlano.administrativas');
        } else {
            return view('abasPreenchimentoPlano.identificacao');
        }
    }

    public function salvarPlano()
    {
        return "ta salvo";
    }

    public function WorkPlanIsActiveUser()
    { }

}
