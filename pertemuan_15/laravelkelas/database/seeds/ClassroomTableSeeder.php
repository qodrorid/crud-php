<?php

use Illuminate\Database\Seeder;

class ClassroomTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['teacher_id' => 1, 'grade' => 'A'],
            ['teacher_id' => 2, 'grade' => 'B']
        ];

        DB::table('classrooms')->insert($data);
    }
}
