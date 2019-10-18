<?php

namespace App\Http\Controllers;



use App\User;
use Request;


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
        $params= Request::all();

        try{
            $user= User::find(auth()->user()->id);
            $user->name = $params['name'];

            $user->knowledge_area = $params['knowledge_area'];

            if($params['teaching']=='EBTT'){
                $user->teaching = 'EBTT';
            }else{
                $user->teaching = 'ES';
            }

            if($params['regime']=='20'){
                $user->regime = '20';
            }else if($params['regime']=='40') {
                $user->regime = '40';
            }else if($params['regime']=='DE') {
                $user->regime = 'DE';
            }else{
                $user->regime = 'Visitante';
            }

            $user->save();

            return redirect()->route('editarMinhasInfos')->with('success', 'Seus dados foram atualizados.');
        }catch(Exception $e){
            return redirect()->route('editarMinhasInfos')->with('error', 'Houve um problema ao salvar atualizar seus dados, contate o administrador.');
        }
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

    public function salvarRelatorio(){
        return back()->with('success', 'método salvarRelatorio() funcionando.');
    }
}
