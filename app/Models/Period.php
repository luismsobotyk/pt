<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Period extends Model
{
    protected $fillable = [
        'id', 'period', 'work_plan_opening_date', 'work_plan_closing_date', 'report_opening_date', 'report_closing_date'
    ];
}
