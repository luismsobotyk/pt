<?php

namespace App\Http\Controllers;

use App\Http\Requests\AdministrativeActivityRequest;
use App\Http\Requests\ClassRequest;
use App\Http\Requests\ExtensionActivityRequest;
use App\Http\Requests\IdentificationRequest;
use App\Http\Requests\ResearchActivityRequest;
use App\Http\Requests\TeachingActivityRequest;
use App\Models\Identification;
use App\Models\WorkPlan;
use Illuminate\Support\Facades\Auth;
use App\Models\Period;

class WorkPlanFillController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function preencherPlano($numAba = null){
        $wp= WorkPlan::where('user_id', '=', Auth::user()->id)->where('situation_id', '!=', '3')->where('situation_id', '!=', '4')->orderBy('period_id')->first();

        if(!isset($wp)){
            return back()->with('error', 'Você não tem planos para preencher');
        } // Se não encontrar nenhum plano para preenchimento retorna para a home com uma mensagem de erro

        /*DB::table('users')
                ->join('contacts', 'users.id', '=', 'contacts.user_id')
                ->join('orders', 'users.id', '=', 'orders.user_id')
                ->select('users.*', 'contacts.phone', 'orders.price')
                ->get();*/ // fazer função para calcular carga horaria

        $period= Period::find($wp->period_id);


        if ($numAba == 1) {
            $identificacao= Identification::where('plan_id', '=', $wp->id)->first();
            return view('abasPreenchimentoPlano.identificacao')->with('work_plan', $wp)->with('periodo', $period)->with('identificacao', $identificacao);
        }
        else if ($numAba == 2) {
            return view('abasPreenchimentoPlano.aulas')->with('work_plan', $wp)->with('periodo', $period);
        }
        else if ($numAba == 3) {
            return view('abasPreenchimentoPlano.ensino')->with('work_plan', $wp)->with('periodo', $period);
        }
        else if ($numAba == 4) {
            return view('abasPreenchimentoPlano.pesquisa')->with('work_plan', $wp)->with('periodo', $period);
        }
        else if ($numAba == 5) {
            return view('abasPreenchimentoPlano.extensao')->with('work_plan', $wp)->with('periodo', $period);
        }
        else if ($numAba == 6) {
            return view('abasPreenchimentoPlano.administrativas')->with('work_plan', $wp)->with('periodo', $period);
        }
        else {
            return view('abasPreenchimentoPlano.identificacao')->with('work_plan', $wp)->with('periodo', $period);
        }
    }

    public function salvarIdentificacao($numAba, IdentificationRequest $request){
        return redirect()->route('preencherPlano', $numAba)->with('success', 'OK');
    }

    public function salvarAulas($numAba, ClassRequest $request){
        return redirect()->route('preencherPlano', $numAba)->with('success', 'OK');
    }

    public function salvarEnsino($numAba, TeachingActivityRequest $request){
        return redirect()->route('preencherPlano', $numAba)->with('success', 'OK');
    }

    public function salvarPesquisa($numAba, ResearchActivityRequest $request){
        return redirect()->route('preencherPlano', $numAba)->with('success', 'OK');
    }

    public function salvarExtensao($numAba, ExtensionActivityRequest $request){
        return redirect()->route('preencherPlano', $numAba)->with('success', 'OK');
    }

    public function salvarAdministrativas($numAba, AdministrativeActivityRequest $request){
        return redirect()->route('preencherPlano', $numAba)->with('success', 'OK');
    }



    public function salvarPlano($numAba){
        return back()->with('success', 'Método salvarPlano() funcionando');
    }

}
