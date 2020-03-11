<?php

namespace App\Http\Controllers;

use App\Models\Period;
use App\Models\Report;
use App\Models\WorkPlan;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hoje = Carbon::now();

        $PeriodoAtual = Period::where([
            ['work_plan_opening_date', '<=', $hoje->format('Y-m-d')],
            ['work_plan_closing_date', '>=', $hoje->format('Y-m-d')]
        ])
            ->orWhere([
                ['report_opening_date', '<=', $hoje->format('Y-m-d')],
                ['report_closing_date', '>=', $hoje->format('Y-m-d')]
            ])
            ->first();
        $WorkPlanAtual = WorkPlan::where([['period_id', $PeriodoAtual->id], ['user_id', Auth::user()->id]])->first();
        $ReportAtual = !$WorkPlanAtual ? null : Report::where([['period_id', $PeriodoAtual->id], ['plan_id', $WorkPlanAtual->id]])->first();
        return view('home')->with([
            'hoje' => $hoje,
            'PeriodoAtual' => $PeriodoAtual,
            'WorkPlanAtual' => $WorkPlanAtual,
            'ReportAtual' => $ReportAtual
        ]);
    }

}
