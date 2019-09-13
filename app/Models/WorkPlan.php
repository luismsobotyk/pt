<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Identification;

class WorkPlan extends Model
{
    public function Identification(){
        return $this-> hasOne(Identification::class, 'plan_id');
    }
}