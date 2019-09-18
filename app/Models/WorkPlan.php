<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class WorkPlan extends Model
{
    // IDENTICAÇÃO 
    public function identification()
    {
        return $this->hasOne(Identification::class, 'plan_id');
    }

    // AULAS
    public function classes()
    {
        return $this->hasMany(Classes::class, 'plan_id');
    }

    // ATIV. ENSINO
    public function TeachingActivities()
    {
        return $this->hasMany(TeachingActivity::class, 'plan_id');
    }

    // ATIV. PESQUISA
    public function ResearchActivities()
    {
        return $this->hasMany(ResearchActivity::class, 'plan_id');
    }

    // ATIV. EXTENSAO
    public function ExtensionActivities()
    {
        return $this->hasMany(ExtensionActivity::class, 'plan_id');
    }

    //ATIV. ADMINISTRATIVAS 
    public function AdministrativeActivities()
    {
        return $this->hasMany(AdministrativeActivity::class, 'plan_id');
    }
}
