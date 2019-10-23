<?php

use App\Models\TeachingActivity;
use Illuminate\Database\Seeder;

class TeachingActivitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        TeachingActivity::create([
            'id' => '1',
            'plan_id' => '1',
            'activity' => 'Atendimento ao aluno',             
            'workload' => '4'
        ]);
        TeachingActivity::create([
            'id' => '2',
            'plan_id' => '1',
            'activity' => 'Orientação TCC1',
            'workload' => '4'
        ]);
        TeachingActivity::create([
            'id' => '3',
            'plan_id' => '1',
            'activity' => 'Orientação TTC2',
            'workload' => '4'
        ]);
        TeachingActivity::create([
            'id' => '4',
            'plan_id' => '1',
            'activity' => 'Acompanhamento Estágio Obrigatório',
            'workload' => '4'
        ]);
        TeachingActivity::create([
            'id' => '5',
            'plan_id' => '1',
            'activity' => 'Correção de Provas',
            'workload' => '4'
        ]);
    }
}
