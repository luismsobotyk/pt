<?php

use App\Models\Classe;
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
        Classe::create([
            'id' => '1',
            'plan_id' => '1',
            'discipline' => 'Informática Básica I',
            'course' => 'Técnico em informática',
            'workload' => '2'
        ]);
        Classe::create([
            'id' => '2',
            'plan_id' => '1',
            'discipline' => 'Redes I',
            'course' => 'Técnico em informática',
            'workload' => '2'
        ]);
        Classe::create([
            'id' => '3',
            'plan_id' => '1',
            'discipline' => 'Algoritmos',
            'course' => 'Técnico em informática',
            'workload' => '2'
        ]);
        Classe::create([
            'id' => '4',
            'plan_id' => '1',
            'discipline' => 'Banco de Dados',
            'course' => 'Técnico em informática',
            'workload' => '2'
        ]);
        Classe::create([
            'id' => '5',
            'plan_id' => '1',
            'discipline' => 'Aplicativos Móveis',
            'course' => 'Técnico em informática',
            'workload' => '2'
        ]);
        Classe::create([
            'id' => '6',
            'plan_id' => '1',
            'discipline' => 'Português',
            'course' => 'Técnico em informática',
            'workload' => '2'
        ]);
    }
}
