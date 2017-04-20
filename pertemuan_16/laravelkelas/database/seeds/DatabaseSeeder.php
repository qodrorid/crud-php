<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    protected $tables = [
        "teachers",
        "classrooms",
        "students"
    ];

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        $this->cleanDatabase();

        $this->call(TeacherTableSeeder::class);
        $this->call(ClassroomTableSeeder::class);
        $this->call(StudentsTableSeeder::class);

        Model::reguard();
    }

    public function cleanDatabase()
    {
        DB::statement("SET FOREIGN_KEY_CHECKS=0");

        foreach ($this->tables as $table) {
            DB::table($table)->truncate();
        }

        DB::statement("SET FOREIGN_KEY_CHECKS=1");
    }

}
