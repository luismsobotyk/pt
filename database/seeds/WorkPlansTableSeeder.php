<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Models\WorkPlan;

class WorkPlanTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    
    {
        WorkPlan::create([
            'user_id' => '2',
            'situation_id' => '1', 
            'opening_date' => '2019-08-21',
            'closing_date' => '2019-12-12',
            'send_date' => '2019-08-21',
            'approval_date' => '2019-08-21',
        ]);
    }

    //select em user insert to id (and resgister_plans)WorkPlan
}
