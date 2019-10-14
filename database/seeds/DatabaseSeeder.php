<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {

        $this->call(SituationsTableSeeder::class); 
        /*$this->call(WorkPlanTableSeeder::class);
        $this->call(IdentificationsTableSeeder::class);
        $this->call(ClassesTableSeeder::class);
        $this->call(TeachingActivitiesTableSeeder::class);
        $this->call(ResearchActivitiesTableSeeder::class);
        $this->call(ExtensionActivitiesTableSeeder::class);
        $this->call(AdministrativeActivitiesTableSeeder::class);*/
        
    }
}

