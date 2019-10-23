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
            'id' => '1',
            'plan_id' => '1',
            'activity' => 'Atividades de Extensão 1',
            'workload' => '2'
        ]);
        ExtensionActivity::create([
            'id' => '2',
            'plan_id' => '1',
            'activity' => 'Atividades de Extensão 2',
            'workload' => '2'
        ]);
        ExtensionActivity::create([
            'id' => '3',
            'plan_id' => '1',
            'activity' => 'Atividades de Extensão 3',
            'workload' => '2'
        ]);
        ExtensionActivity::create([
            'id' => '4',
            'plan_id' => '1',
            'activity' => 'Atividades de Extensão 4',
            'workload' => '2'
        ]);
        ExtensionActivity::create([
            'id' => '5',
            'plan_id' => '1',
            'activity' => 'Atividades de Extensão 5',
            'workload' => '2'
        ]);
    }
}
