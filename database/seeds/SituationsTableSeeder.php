<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Models\Situation;

class  SituationsTableSeeder  extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Situation::create(['type' => 'aberto']);
        Situation::create(['type' => 'fechado']);
        Situation::create(['type' => 'reaberto']);       
    }
}
