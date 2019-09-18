<?php

use App\Models\Classes;
use Illuminate\Database\Seeder;

class ClassesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Classes::create([
            'plan_id' => '1',
            'discipline' => 'Informática Básica I', 
            'course' => 'Técnico em informática',
            'workload' => '2',           
        ]);
        Classes::create([
            'plan_id' => '1',
            'discipline' => 'Programação I', 
            'course' => 'Técnico em informática',
            'workload' => '1',           
        ]);

        Classes::create([
            'plan_id' => '1',
            'discipline' => 'Bovinicultura', 
            'course' => 'Tecnico em Agropecuária',
            'workload' => '3',           
        ]);
    }
}
