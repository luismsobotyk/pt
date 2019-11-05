<?php


namespace App\Http\Controllers;


use App\Models\AdministrativeActivity;
use App\Models\ExtensionActivity;
use App\Models\Identification;
use App\Models\Justification;
use App\Models\Period;
use App\Models\Report;
use App\Models\ResearchActivity;
use App\Models\TeachingActivity;
use App\Models\WorkPlan;
use Illuminate\Http\Request;
use App\Models\Classe;
use PhpParser\Node\Expr\Cast\Object_;

class ReportFillController extends BaseController
{

    public function preencherRelatorio($numAba = null)
    {
        /**
         * Variáveis atribuídas para fins de teste, deverão ser substituidas futuramente
         */
        $workPlan = WorkPlan::find('1');
        /**
         * FIM
         */


        if ($numAba == 2) {
            $teaching_activities = TeachingActivity::where('plan_id', '=', $workPlan->id)
                ->leftjoin('justifications', 'teaching_activities.justifications_id', '=', 'justifications.id')
                ->orderBy('activity', 'ASC')
                ->get(['justifications.justification AS justification', 'teaching_activities.*']);
            return view('abasPreenchimentoRelatorio.ensino')->with('teaching_activities', $teaching_activities);
        } else if ($numAba == 3) {
            $research_activities = ResearchActivity::where('plan_id', '=', $workPlan->id)
                ->leftjoin('justifications', 'research_activities.justifications_id', '=', 'justifications.id')
                ->orderBy('activity', 'ASC')
                ->get(['justifications.justification AS justification', 'research_activities.*']);
            return view('abasPreenchimentoRelatorio.pesquisa')->with('research_activities', $research_activities);
        } else if ($numAba == 4) {
            $extension_activities = ExtensionActivity::where('plan_id', '=', $workPlan->id)
                ->leftjoin('justifications', 'extension_activities.justifications_id', '=', 'justifications.id')
                ->orderBy('activity', 'ASC')
                ->get(['justifications.justification AS justification', 'extension_activities.*']);
            return view('abasPreenchimentoRelatorio.extensao')->with('extension_activities', $extension_activities);
        } else if ($numAba == 5) {
            $administrative_activities = AdministrativeActivity::where('plan_id', '=', $workPlan->id)
                ->leftjoin('justifications', 'administrative_activities.justifications_id', '=', 'justifications.id')
                ->orderBy('activity', 'ASC')
                ->get(['justifications.justification AS justification', 'administrative_activities.*']);
            return view('abasPreenchimentoRelatorio.administrativas')->with('administrative_activities', $administrative_activities);
        } else if ($numAba == 6) {
            $period = Period::find($workPlan->period_id);
            $identification = Identification::where('plan_id', $workPlan->id)->get()->first();
            $report = Report::where('plan_id', '=', $workPlan->id)
                ->leftjoin('justifications', 'reports.justifications_id', '=', 'justifications.id')
                ->get(['justifications.justification AS justification', 'reports.*']);
            return view('abasPreenchimentoRelatorio.geral')->with('report', $report)->with('identification', $identification)->with('period', $period);
        } else {
            $classes = Classe::where('plan_id', '=', $workPlan->id)
                ->leftjoin('justifications', 'classes.justifications_id', '=', 'justifications.id')
                ->orderBy('discipline', 'ASC')
                ->get(['justifications.justification AS justification', 'classes.*']);
//            dd($classes);
            return view('abasPreenchimentoRelatorio.aulas')->with('classes', $classes);
        }
    }

    public function salvarRelatorio(Request $request)
    {
        $proximaAba = isset($request->proximaAba) && $request->proximaAba > 0 ? $request->proximaAba : 1;
        if (isset($request->classe_justification)) {
            $classes = Classe::all();
            $justificacoes = $request->classe_justification;
            $this->insertOrUpdateActivity($request, $classes, $justificacoes);
        } else if (isset($request->teaching_activity_justification)) {
            $teaching_activities = TeachingActivity::all();
            $justificacoes = $request->teaching_activity_justification;
            $this->insertOrUpdateActivity($request, $teaching_activities, $justificacoes);
        } else if (isset($request->research_activity_justification)) {
            $research_activities = ResearchActivity::all();
            $justificacoes = $request->research_activity_justification;
            $this->insertOrUpdateActivity($request, $research_activities, $justificacoes);
        } else if (isset($request->extension_activity_justification)) {
            $extension_activities = ExtensionActivity::all();
            $justificacoes = $request->extension_activity_justification;
            $this->insertOrUpdateActivity($request, $extension_activities, $justificacoes);
        } else if (isset($request->administrative_activity_justification)) {
            $extension_activities = AdministrativeActivity::all();
            $justificacoes = $request->administrative_activity_justification;
            $this->insertOrUpdateActivity($request, $extension_activities, $justificacoes);
        } else if(isset($request->report_justification)){
//            $report = Report::
        }
        return redirect()->route('preencherRelatorio', $proximaAba);
    }

    private function insertOrUpdateActivity(Request $request, $CollectionObjects, $ArrayJustificativas)
    {
        foreach ($CollectionObjects as $Object) {
            if ($Object->justifications_id > 0 && !is_null($ArrayJustificativas) && key_exists($Object->id, $ArrayJustificativas) && !empty($ArrayJustificativas[$Object->id])) {
                //atualiza a justificativa
                $justificativa = Justification::find($Object->justifications_id);
                $justificativa->justification = $ArrayJustificativas[$Object->id];
                $justificativa->save();
            } else if ($Object->justifications_id > 0 && (is_null($ArrayJustificativas) || key_exists($Object->id, $ArrayJustificativas) == false)) {
                //remove a justificativa
                $justificativa_id = $Object->justifications_id;
                $Object->justifications_id = null;
                $Object->save();
                Justification::find($justificativa_id)->delete();
            } else if (is_null($Object->justifications_id) && !is_null($ArrayJustificativas) && key_exists($Object->id, $ArrayJustificativas) && !empty($ArrayJustificativas[$Object->id])) {
                //insere nova justificativa
                $justificativa = Justification::create([
                    'justification' => $ArrayJustificativas[$Object->id]
                ]);
                $Object->justifications_id = $justificativa->id;
                $Object->save();
            }
        }
    }

}