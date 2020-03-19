<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\WorkPlan;

class Identification extends Model
{
    protected $fillable = [
        'id', 'plan_id', 'knowledge_area', 'teaching', 'regime', 'created_at', 'updated_at'
    ];
    public function workplan(){
        return $this->belongsTo(WorkPlan::class, 'plan_id', 'id');  
    }
    
}
