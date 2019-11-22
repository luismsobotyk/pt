<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    //
    public function myProfile(){
        return view('profile.meuPerfil');
    }

    public function editMyProfile(){
        return view('profile.editarMeuPerfil');
    }

    public function saveEditedProfileInfos(){
        $params= \Request::all();

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

            return redirect()->route('myProfile')->with('success', 'Seus dados foram atualizados.');
        }catch(Exception $e){
            return redirect()->route('editarMinhasInfos')->with('error', 'Houve um problema ao salvar atualizar seus dados, contate o administrador.');
        }
    }
}
