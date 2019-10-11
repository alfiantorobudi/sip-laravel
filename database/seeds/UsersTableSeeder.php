<?php

use Illuminate\Database\Seeder;

use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        $faker = Faker::create('id_ID');

        for ($i = 1; $i <= 10; $i++) {

            // insert data ke table pegawai menggunakan Faker
            \App\User::create([
                'name' => $faker->name,
                'email' => $faker->email,
                'email_verified_at' => $faker->dateTime('2014-02-25 08:37:17'),
                'password' => $faker->password
            ]);
        }
    }
}
