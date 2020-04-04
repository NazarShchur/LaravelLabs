<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $students = [];

        for($i = 1; $i <= 10; $i++){
            $students[] = [
                'first_name' => "ivan",
                'second_name' => "ivanov",
                'school_id' => $i
            ];
            $students[] = [
                'first_name' => "vasya",
                'second_name' => "pupkin",
                'school_id' => $i
            ];
            $students[] = [
                'first_name' => "anton",
                'second_name' => "antonov",
                'school_id' => $i
            ];
        }
        DB::table('students')->insert($students);
    }
}
