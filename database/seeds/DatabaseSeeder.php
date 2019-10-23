<?php

use Illuminate\Database\Seeder;

use App\Models\Identification;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(SituationsTableSeeder::class);
        $this->call(PeriodsTableSeeder::class);
        $this->call(WorkPlansTableSeeder::class);

        $this->call(IdentificationsTableSeeder::class);
        $this->call(ClassesTableSeeder::class);
        $this->call(TeachingActivitiesTableSeeder::class);
        $this->call(ResearchActivitiesTableSeeder::class);
        $this->call(ExtensionActivitiesTableSeeder::class);
        $this->call(AdministrativeActivitiesTableSeeder::class);
        
    }
}

