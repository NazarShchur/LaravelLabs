<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SchoolsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $schools = [];

        $name = '';

        for($i = 1; $i <= 10; $i++) {
            $name = 'Kyiv school №' . $i;
            $schools[] = [
                'name' => $name
            ];
        }
        DB::table('schools')->insert($schools);
    }
}
