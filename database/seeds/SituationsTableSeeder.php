<?php

use Illuminate\Database\Seeder;
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
        Situation::create(['id' => '1', 'type' => 'Pendente']);
        Situation::create(['id' => '2', 'type' => 'Aguardando Alteração']);
        Situation::create(['id' => '3', 'type' => 'Aguardando Aprovação']);
        Situation::create(['id' => '4', 'type' => 'Aprovado']);
    }
}
