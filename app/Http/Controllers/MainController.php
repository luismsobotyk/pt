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
       //
    }



    public function verRelatorio(){
        return view ('verRelatorio');
    }

    public function listarRelatorios(){
        return view('meusRelatorios');
    }



    public function WorkPlanIsActiveUser()
    { }

}
