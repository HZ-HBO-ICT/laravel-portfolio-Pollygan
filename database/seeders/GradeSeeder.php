<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GradeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('grades')->insert([
            'course_name'=>'Program and Career Orientation',
            'test_name'=>'Assessment',
            'EC'=>'2.5',
            'lowest_passing_grade'=>'5.5',
            'best_grade'=>'7.0'
        ]);

        DB::table('grades')->insert([
            'course_name'=>'Computer Science Basics',
            'test_name'=>'Written exam',
            'EC'=>'5',
            'lowest_passing_grade'=>'5.5',
            'best_grade'=>'6.0'
        ]);

        DB::table('grades')->insert([
            'course_name'=>'Programing Basics',
            'test_name'=>'Case study',
            'EC'=>'5',
            'lowest_passing_grade'=>'5.5',
            'best_grade'=>'8.0'
        ]);

        DB::table('grades')->insert([
            'course_name'=>'Object Oriented Programming',
            'test_name'=>'Case study',
            'EC'=>'5',
            'lowest_passing_grade'=>'5.5',
            'best_grade'=>'6.0'
        ]);

        DB::table('grades')->insert([
            'course_name'=>'Object Oriented Programming',
            'test_name'=>'Project',
            'EC'=>'5',
            'lowest_passing_grade'=>'5.5',
            'best_grade'=>'7.5'
        ]);
    }
}
