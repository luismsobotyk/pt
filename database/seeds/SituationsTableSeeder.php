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
        Situation::create(['type' => 'Pendente']);
        Situation::create(['type' => 'Aguardando Alteração']);
        Situation::create(['type' => 'Aguardando Aprovação']);
        Situation::create(['type' => 'Aprovado']);
    }
}
