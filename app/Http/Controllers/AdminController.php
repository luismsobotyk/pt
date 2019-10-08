<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function listarUsuarios()
    {
        return view('admin.listarUsuarios');
    }

    public function verUsuario()
    {
        return view('admin.verUsuario');
    }

    public function viewPermissoes()
    {
        return view('admin.editarPermissoes');
    }

    public function salvarPermissoes()
    {
        //return redirect()->route('verUsuario', 1)->with('error', 'Houve um erro ao tentar atualizar as permissões.');
        return redirect()->route('verUsuario', 1)->with('success', 'As permissões foram atualizadas.');
    }

    public function novoPeriodo()
    {
        return view('admin.novoPeriodo');
    }

    public function salvarNovoPeriodo(){
        return redirect()->route('listarPeriodos')->with('success', 'O período foi cadastrado');
    }

    public function listarPeriodos()
    {
        return view('admin.listarPeriodos');
    }

    public function editarPeriodo()
    {
        return view('admin.editarPeriodo');
    }


    public function salvarPeriodo()
    {
        return redirect()->route('listarPeriodos', 1)->with('success', 'O período 2019/1 foi atualizado');
    }

    public function listarPlanos()
    {
        // Esse método recebe a variavel period via url e mostra os planos referentes ao periodo informado.
        return view('admin.listarPlanos');
    }

    public function listarRelatorios(){
        // Esse método recebe a variavel period via url e mostra os relatorios referentes ao periodo informado.
        return view('admin.listarRelatorios');
    }

}
