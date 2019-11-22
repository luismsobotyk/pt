<?php

use Illuminate\Database\Seeder;
use App\Models\User;

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
            'id' => '1',
            'name' => 'Dr. Fulano',
            'email' => 'fulano.cilano@rolante.ifrs.edu.br',
            'profile_photo' => '',
            'provider' => '',
            'provider_id' => '',
            'remember_token' => '',
            'knowledge_area' => 'Administração',
            'teaching' => '',
            'regime' => 'BTT',
            'registerPlan' => '1',
            'seePlans' => '1',
            'seeUsersList' => '1',
            'setPermissions' => '1',
            'setSubmissionPeriod' => '1',
            'reopenPlans' => '1',
            'approveDocuments' => '1',
            'active' => '1'
        ]);
    }
}
