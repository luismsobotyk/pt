<?php

use App\Models\Report;
use Illuminate\Database\Seeder;

class ReportsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Report::create([
            'id' => 1,
            'plan_id' => 1,
            'situation_id' => 3,
            'period_id' => 1,
            'send_date' => '2019-10-24'
        ]);

    }
}