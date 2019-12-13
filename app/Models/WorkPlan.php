<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorkPlan extends Model
{
    protected $fillable = [
        'id', 'user_id', 'situation_id', 'period_id', 'send_date', 'approval_date'
    ];
}
