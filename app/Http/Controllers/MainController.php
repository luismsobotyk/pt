<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\WorkPlan;
use Nexmo\Message\Shortcode\Alert;

class MainController extends Controller
{

    public function __construct(){
        $this->middleware('auth');
    }

    public function myProfile(){
        return view('meuPerfil');
    }
    public function editMyProfile(){
        return view('editarMeuPerfil');
    }
    public function saveEditedProfileInfos(){
        //return redirect()->route('editarMinhasInfos')->with('error', 'Houve um problema ao atualizar seus dados.'); // se der erro
        return redirect()->route('editarMinhasInfos')->with('success', 'Seus dados foram atualizados.'); // se der certo
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
            $id = auth()->user()->id;
            $registros = WorkPlan::where('user_id', $id)
                ->where('situation_id', '1')
                ->with('Identification')
                ->get();

            if (!empty($registros)) {

                return view('abasPreenchimentoPlano.identificacao', compact('registros'));
                //return view('abasPreenchimentoPlano.identificacao')->with(['registros' => $registros]);
            } else {
                return redirect()
                    ->route('home')
                    ->with('error', 'Você não tem planos para preencher!');
            }
        } else if ($numAba == 2) {

            $id = auth()->user()->id;
            $registros = WorkPlan::where('user_id', $id)
                ->where('situation_id', '1')
                ->with('Classes')
                ->get();

            if (!empty($registros)) {

                return view('abasPreenchimentoPlano.aulas', compact('registros'));
            } else {
                return redirect()
                    ->route('home')
                    ->with('error', 'Você não tem planos para preencher!');
            }
        } else if ($numAba == 3) {
            return view('abasPreenchimentoPlano.ensino');
        } else if ($numAba == 4) {
            return view('abasPreenchimentoPlano.pesquisa');
        } else if ($numAba == 5) {
            return view('abasPreenchimentoPlano.extensao');
        } else if ($numAba == 6) {
            return view('abasPreenchimentoPlano.administrativas');
        } else {

            $id = auth()->user()->id;
            $registros = WorkPlan::where('user_id', $id)
                ->where('situation_id', '1' or '3')
                ->with('Identification')
                ->with('Classes')
                ->with('TeachingActivities')
                ->with('ResearchActivities')
                ->with('ExtensionActivities')
                ->with('AdministrativeActivities')
                ->get();
            //dd($registros);
            if (!empty($registros)) {
                return view('abasPreenchimentoPlano.identificacao', compact('registros'));
            } else {
                return redirect()
                    ->route('home')
                    ->with('error', 'Você não tem planos para preencher!');
            }
        }
    }

    public function salvarPlano()
    {
        return "ta salvo";
    }

    public function preencherRelatorio($numAba = null)
    {
        if ($numAba == 1) {
            return view('abasPreenchimentoRelatorio.aulas');
        } else if ($numAba == 2) {
            return view('abasPreenchimentoRelatorio.ensino');
        } else if ($numAba == 3) {
            return view('abasPreenchimentoRelatorio.pesquisa');
        } else if ($numAba == 4) {
            return view('abasPreenchimentoRelatorio.extensao');
        } else if ($numAba == 5) {
            return view('abasPreenchimentoRelatorio.administrativas');
        } else if ($numAba == 6) {
            return view('abasPreenchimentoRelatorio.geral');
        } else {
            return view('abasPreenchimentoRelatorio.aulas');
        }
    }

    public function WorkPlanIsActiveUser()
    { }

    public function salvarRelatorio()
    {
        return "ta salvo";
    }
}
