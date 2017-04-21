<?php

use Illuminate\Database\Seeder;

class CoursesStudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['course_id' => '1', 'student_id' => '1'],
            ['course_id' => '2', 'student_id' => '4'],
            ['course_id' => '3', 'student_id' => '2'],
            ['course_id' => '4', 'student_id' => '3']
        ];

        DB::table('course_student')->insert($data);
    }
}
