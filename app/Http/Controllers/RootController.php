<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RootController extends Controller
{
    public function index()
    {
        $users = User::where('email', '!=', env('USER_ROOT_MAIL'))->get();
        return view('root')->with('users', $users);
    }

    public function setDirector(Request $request)
    {
        if(!$request->user_id){
            return redirect()->route('root')->withErrors('Selecione ao menos um usuário para atribuir como diretor!');
        }
        DB::beginTransaction();

        try {
            $OldDirector = User::where('director', true)->first();
            if($OldDirector){
                $OldDirector->director = null;
                $OldDirector->save();
            }

            $NewDirector = User::find($request->user_id);
            $NewDirector->director = true;
            $NewDirector->active = true;
            $NewDirector->save();

        }catch (\Exception $e){
            DB::rollBack();
            return redirect()->route('root')->withErrors($e->getMessage());
        }

        DB::commit();
        return redirect()->route('root')->with('success', "{$NewDirector->name} é o novo diretor!");
    }
}
