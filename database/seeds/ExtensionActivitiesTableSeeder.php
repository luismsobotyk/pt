<?php

use App\Models\ExtensionActivity;
use Illuminate\Database\Seeder;

class ExtensionActivitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ExtensionActivity::create([
            'plan_id' => '1',
            'activity' => 'Atividades de Extensão I',             
            'workload' => '2',           
        ]);   

        ExtensionActivity::create([
            'plan_id' => '1',
            'activity' => 'Atividades de Extensão II',             
            'workload' => '1',           
        ]);   

        ExtensionActivity::create([
            'plan_id' => '1',
            'activity' => 'Atividades de Extensão III',             
            'workload' => '3',           
        ]);   
    }
}
