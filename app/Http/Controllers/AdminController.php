<?php

namespace App\Http\Controllers;

use App\Http\Requests\PeriodRequest;
use App\Http\Requests\UpdatePeriodRequest;
use App\Models\Period;
use App\Models\WorkPlan;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{

    public function listarUsuarios(){
        return view('admin.listarUsuarios');
    }

    public function verUsuario(){
        return view('admin.verUsuario');
    }

    public function viewPermissoes(){
        return view('admin.editarPermissoes');
    }

    public function salvarPermissoes(){
        //return redirect()->route('verUsuario', 1)->with('error', 'Houve um erro ao tentar atualizar as permissões.');
        return redirect()->route('verUsuario', 1)->with('success', 'As permissões foram atualizadas.');
    }

    public function novoPeriodo(){
        return view('admin.novoPeriodo');
    }

    public function salvarNovoPeriodo(PeriodRequest $request){
        $periodo= Period::create($request->all());
        $usersList= User::select(['id', 'name'])->where('registerPlan', '=', 1)->get();
        foreach($usersList as $u){
            $wp= new WorkPlan;
            $wp->user_id= $u->id;
            $wp->situation_id= 1;
            $wp->period_id= $periodo->id;
            $wp->save();
        }
        //return dd($usersList);
        return redirect()->route('listarPeriodos')->with('success', 'O período '.$request->period.' foi cadastrado');
    }

    public function listarPeriodos(){
        $periodos = Period::orderBy('period', 'desc')->get();
        return view('admin.listarPeriodos')->with('periodos', $periodos);
    }

    public function editarPeriodo($id){
        $period= Period::find($id);
        return view('admin.editarPeriodo')->with('periodo', $period);
    }

    public function salvarPeriodo($id, UpdatePeriodRequest $request){
        $periodo= Period::find($id);
        $periodo->work_plan_opening_date= $request->work_plan_opening_date;
        $periodo->work_plan_closing_date= $request->work_plan_closing_date;
        $periodo->report_opening_date= $request->report_opening_date;
        $periodo->report_closing_date= $request->report_closing_date;
        $periodo->save();
        return dd($periodo->period);
        //return redirect()->route('listarPeriodos', 1)->with('success', 'O período '.$periodo->period.' foi atualizado');
    }

    public function listarPlanos($period= 0){
        $periodos= Period::select('id', 'period')->orderBy('period', 'desc')->get();
        /*$planosAprovados= WorkPlan::where('situation_id', '=', 4);
        return dd($planosAprovados->count());
        */
        if(Period::where('id', '=', $period)->count() > 0){
            return view('admin.listarPlanos')->with('periodos', $periodos)->with('periodoSelecionado', $period);
        }else{
            $period= $periodos[0]->id;
            return view('admin.listarPlanos')->with('periodos', $periodos)->with('periodoSelecionado', $period);
        }

    }

    public function listarRelatorios(){
        // Esse método recebe a variavel period via url e mostra os relatorios referentes ao periodo informado.
        return view('admin.listarRelatorios');
    }

}
