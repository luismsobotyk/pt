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
            'plan_id' => '1',
            'activity' => 'Atendimento ao aluno',             
            'workload' => '4',           
        ]);   

        TeachingActivity::create([
            'plan_id' => '1',
            'activity' => 'Implementação de uma máquina Enigma virtual',             
            'workload' => '8',           
        ]);   

        TeachingActivity::create([
            'plan_id' => '1',
            'activity' => 'Preparação de aulas',             
            'workload' => '4',           
        ]);   
    }
}
