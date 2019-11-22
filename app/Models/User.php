<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'profile_photo',
        'provider',
        'provider_id',
        'knowledge_area',
        'teaching',
        'regime',
        'registerPlan',
        'seePlans',
        'seeUsersList',
        'setPermissions',
        'setSubmissionPeriod',
        'reopenPlans',
        'approveDocuments',
        'director',
        'active'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'remember_token',
    ];


    public function isRoot(){
        return $this->email == env('USER_ROOT_MAIL');
    }

}
