<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
class DepartmentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // List of department names
        $departments = [
            ['title' => 'სამონტაჟო სამსახური'],
            ['title' => 'პროექტების მართვა'],
            ['title' => 'დაგეგ. აღრ. და ანგ. განყ.'],
            ['title' => 'დირექცია'],
            ['title' => '"Exact"-ის ჯგუფი'],
            // Add more as required
        ];

        // Insert the departments into the database
        DB::table('departments')->insert($departments);
    }
}
