<?php

use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['title' => 'Fundamental React & Redux'],
            ['title' => 'Intro to Angular & Angular Material'],
            ['title' => 'VueJs the complete guide'],
            ['title' => 'Greenrobot EventBus for the good programmer']
        ];

        DB::table('courses')->insert($data);
    }
}
