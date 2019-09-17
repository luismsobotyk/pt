<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name'      => '',
            'email'     => '',
            'profile_photo' => '',
            'provider'  => 'GOOGLE',
            'provider_id'  => '',
            'registerPlan'  => '1',
            'seePlans'  => '1',
            'seeUsersList'  => '1',
            'setPermissions'  => '1',
            'setSubmissionPeriod'  => '1',
            'reopenPlans'  => '1',
            'approveDocuments'  => '1',           
        ]);    
        User::create([
            'name'      => '',
            'email'     => '',
            'profile_photo' => '',
            'provider'  => 'GOOGLE',
            'provider_id'  => '',
            'remember_token'  => '',  
            'registerPlan'  => '1',          
        ]);     
    }
}
