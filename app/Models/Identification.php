<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\WorkPlan;

class Identification extends Model
{
    public function workplan(){
        return $this->belongsTo(WorkPlan::class, 'plan_id', 'id');  
    }
    
}
