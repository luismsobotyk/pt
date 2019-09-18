<?php

use Illuminate\Database\Seeder;

use App\Models\Identification;


class IdentificationsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Identification::create([
            'plan_id' => '1',
            'knowledge_area' => 'Informática Básica', 
            'teaching' => 'ES',
            'regime' => '40',           
        ]);
    }
}
