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
            'id' => '1',
            'plan_id' => '1',
            'activity' => 'Coordenação de Curso',             
            'workload' => '6',  
            'ordinance' => '02/2019'
        ]);
        AdministrativeActivity::create([
            'id' => '2',
            'plan_id' => '1',
            'activity' => 'asdf 2',
            'workload' => '6',
            'ordinance' => '02/2019'
        ]);
        AdministrativeActivity::create([
            'id' => '3',
            'plan_id' => '1',
            'activity' => 'qwerty 3',
            'workload' => '6',
            'ordinance' => '02/2019'
        ]);
        AdministrativeActivity::create([
            'id' => '4',
            'plan_id' => '1',
            'activity' => 'poiuyt 4',
            'workload' => '6',
            'ordinance' => '02/2019'
        ]);
    }
}
