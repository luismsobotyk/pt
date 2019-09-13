<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Models\Situations;

class  SituationsTableSeeder  extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Situations::create(['type' => 'aberto']);
        Situations::create(['type' => 'fechado']);
        Situations::create(['type' => 'reaberto']);       
    }
}
