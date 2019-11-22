<?php

use App\Models\Period;
use Illuminate\Database\Seeder;

class PeriodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Period::create([
            'id' => '1',
            'period' => '2019/2',
            'work_plan_opening_date' => '2019-10-01',
            'work_plan_closing_date' => '2019-10-20',
            'report_opening_date' => '2019-12-20',
            'report_closing_date' => '2019-12-31'
        ]);

        Period::create([
            'id' => '2',
            'period' => '2020/1',
            'work_plan_opening_date' => '2020-02-01',
            'work_plan_closing_date' => '2020-02-10',
            'report_opening_date' => '2020-06-20',
            'report_closing_date' => '2020-06-30'
        ]);
    }
}
