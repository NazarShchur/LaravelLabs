<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sections = [];

        for($i = 1; $i <= 10; $i++){
            $sections[] = [
                'name' => "football",
                'school_id' => $i
            ];
            $sections[] = [
                'name' => "basketball",
                'school_id' => $i
            ];
            $sections[] = [
                'name' => "voleyball",
                'school_id' => $i
            ];
        }
        DB::table('sections')->insert($sections);
    }
}
