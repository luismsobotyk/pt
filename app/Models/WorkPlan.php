<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorkPlan extends Model
{
    protected $fillable = [
        'id', 'user_id', 'situation_id', 'period_id', 'send_date', 'approval_date'
    ];

    public function identification()
    {
        return $this->hasOne('App\Models\Identification', 'plan_id');
    }

    public function classes()
    {
        return $this->hasMany('App\Models\Classe','plan_id');
    }

    public function teaching_activities()
    {
        return $this->hasMany('App\Models\TeachingActivity','plan_id');
    }

    public function research_activities()
    {
        return $this->hasMany('App\Models\ResearchActivity','plan_id');
    }

    public function extension_activities()
    {
        return $this->hasMany('App\Models\ExtensionActivity','plan_id');
    }

    public function administrative_activities()
    {
        return $this->hasMany('App\Models\AdministrativeActivity','plan_id');
    }
}
