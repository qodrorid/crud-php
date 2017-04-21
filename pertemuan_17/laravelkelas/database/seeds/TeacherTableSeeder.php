<?php

use Illuminate\Database\Seeder;

class TeacherTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            ['name' => 'Taufan Ajah', 'nip' => '1111'],
            ['name' => 'Aria Ajah', 'nip' => '2222']
        ];

        DB::table('teachers')->insert($data);
    }
}
