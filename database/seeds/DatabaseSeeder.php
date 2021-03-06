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
        $this->call(SchoolsTableSeeder::class);
        $this->call(StudentsTableSeeder::class);
        $this->call(SectionsTableSeeder::class);
        $this->call(SectionStudentSeeder::class);
    }
}
