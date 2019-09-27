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
            'name'      => ' Luis Sobotyk',
            'email'     => 'luis.sobotyk@rolante.ifrs.edu.br',
            'profile_photo' => 'https://lh3.googleusercontent.com/a-/AAuE7mAbbkxBHK8B12KcP1PEKctfgRVg3fm6_Bsj9o7Pkg',
            'provider'  => 'GOOGLE',
            'provider_id'  => '106439176729153065067',
            'remember_token' => 'QzIe7vvlnOwsMHvu3RJW4pCKMpzYg2BtfqBmc7KCZLd3k0VLeUVv1IxU2bI5',
            'registerPlan'  => '1',
            'seePlans'  => '1',
            'seeUsersList'  => '1',
            'setPermissions'  => '1',
            'setSubmissionPeriod'  => '1',
            'reopenPlans'  => '1',
            'approveDocuments'  => '1',
        ]);
        User::create([
            'name'      => ' Rolante IFRS',
            'email'     => 'email@rolante.ifrs.edu.br',
            'profile_photo' => 'e-mail',
            'provider'  => 'GOOGLE',
            'provider_id'  => '112425402964340575344',
            'registerPlan'  => '1',
            'seePlans'  => '1',
            'seeUsersList'  => '1',
            'setPermissions'  => '1',
            'setSubmissionPeriod'  => '1',
            'reopenPlans'  => '1',
            'approveDocuments'  => '1',           
        ]);    
        User::create([
            'name'      => 'email',
            'email'     => 'email2@rolante.ifrs.edu.br',
            'profile_photo' => 'https://lh3.googleusercontent.com/a-/AAuE7mDVcJb2L0dwrC8NQzNSmeteHq8so0JLgVyzQzXb',
            'provider'  => 'GOOGLE',
            'provider_id'  => '104455691834058581916',
            'remember_token'  => 'xx',  
            'registerPlan'  => '1',          
        ]);     
    }
}
