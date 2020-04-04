<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SectionStudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $inserts = [];
        for($i = 1; $i <= 30; $i+=3){
            $inserts[] = [
                'student_id' => $i,
                'section_id' => $i,
            ];
            $inserts[] = [
                'student_id' => $i + 1,
                'section_id' => $i + 1,
            ];
            $inserts[] = [
                'student_id' => $i + 2,
                'section_id' => $i + 2,
            ];
        }
        DB::table('section_student')->insert($inserts);
    }
}
