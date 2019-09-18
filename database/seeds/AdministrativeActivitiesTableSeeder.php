<?php

use App\Models\AdministrativeActivity;
use Illuminate\Database\Seeder;

class AdministrativeActivitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AdministrativeActivity::create([
            'plan_id' => '1',
            'activity' => 'Coordenação de Curso',             
            'workload' => '6',  
            'ordinance' => '01/2019',         
        ]);   

        AdministrativeActivity::create([
            'plan_id' => '1',
            'activity' => 'Comissão Permanente de Formatura do Campus Rolante',             
            'workload' => '0.5',
            'ordinance' => '02/2019',             
        ]);   

        AdministrativeActivity::create([
            'plan_id' => '1',
            'activity' => 'NEAD',             
            'workload' => '9',
            'ordinance' => '03/2019',             
        ]); 
    }
}
