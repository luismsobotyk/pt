<?php

namespace App\Http\Controllers;

use App\Http\Requests\PeriodRequest;
use App\Http\Requests\UpdatePeriodRequest;
use App\Models\Period;
use Illuminate\Http\Request;

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
        Period::create($request->all());
        return redirect()->route('listarPeriodos')->with('success', 'O período foi cadastrado');
    }

    public function listarPeriodos(){
        $periodos = Period::all();
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
        return redirect()->route('listarPeriodos', 1)->with('success', 'O período 2019/1 foi atualizado');
    }

    public function listarPlanos(){
        // Esse método recebe a variavel period via url e mostra os planos referentes ao periodo informado.
        return view('admin.listarPlanos');
    }

    public function listarRelatorios(){
        // Esse método recebe a variavel period via url e mostra os relatorios referentes ao periodo informado.
        return view('admin.listarRelatorios');
    }

}
