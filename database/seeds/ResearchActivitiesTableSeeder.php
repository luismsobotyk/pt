<?php

use App\Models\ResearchActivity;
use Illuminate\Database\Seeder;

class ResearchActivitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ResearchActivity::create([
            'plan_id' => '1',
            'activity' => 'Análise e aprimoramento de um algoritmo de trade-off criptoanalítico',             
            'workload' => '3',           
        ]);   

        ResearchActivity::create([
            'plan_id' => '1',
            'activity' => 'Atividades de Pesquisa II',             
            'workload' => '2',           
        ]);   

        ResearchActivity::create([
            'plan_id' => '1',
            'activity' => 'Atividades de Pesquisa III',             
            'workload' => '1',           
        ]);   
    }
}
