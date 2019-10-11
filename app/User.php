<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
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
        'name', 'email', 'profile_photo', 'provider', 'provider_id', 'knowledge_area', 'teaching', 'regime', 'registerPlan', 'seePlans', 'seeUserList', 'setPermissions', 'setSubmissionPeriod', 'reopenPlans', 'approveDocuments'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'remember_token',
    ];
}
