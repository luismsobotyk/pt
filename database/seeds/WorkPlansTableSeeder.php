<?php

use Illuminate\Database\Seeder;
use App\Models\WorkPlan;

class WorkPlansTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()

    {
        WorkPlan::create([
            'id' => '1',
            'user_id' => '1',
            'situation_id' => '1',
            'period_id' => '1',
            'send_date' => '2019-10-15',
            'approval_date' => '2019-10-20'
        ]);
    }
    //select em user insert to id (and resgister_plans)WorkPlan
}
