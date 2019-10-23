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
            'id' => '1',
            'plan_id' => '1',
            'activity' => 'Análise e aprimoramento de um algoritmo de trade-off criptoanalítico',             
            'workload' => '3',           
        ]);
        ResearchActivity::create([
            'id' => '2',
            'plan_id' => '1',
            'activity' => 'asdfgh 1',
            'workload' => '3',
        ]);
        ResearchActivity::create([
            'id' => '3',
            'plan_id' => '1',
            'activity' => 'qwerty 2',
            'workload' => '3',
        ]);
        ResearchActivity::create([
            'id' => '4',
            'plan_id' => '1',
            'activity' => 'zxcvbn 3',
            'workload' => '3',
        ]);
        ResearchActivity::create([
            'id' => '5',
            'plan_id' => '1',
            'activity' => 'poiuyt 4',
            'workload' => '3',
        ]);
    }
}
