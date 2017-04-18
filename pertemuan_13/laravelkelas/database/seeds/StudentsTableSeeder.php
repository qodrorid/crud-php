<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create('id_ID');
        $gender = ['Male', 'Female'];

        foreach (range(1, 28) as $index) {
            DB::table('students')->insert([
                'name' => $faker->name,
                'email' => $faker->email,
                'gender' => $faker->randomElement($gender),
                'address' => $faker->address
            ]);
        }
    }
}
