<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        \DB::table('users')->insert ([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('123456'),
            'created_at' => \Carbon\Carbon::now(),
            'updated_at' => \Carbon\Carbon::now()
        ]);

        $faker = \Faker\Factory::create();
        for ($i = 0 ; $i <= 100; $i++){
            \DB::table('users')->insert([
                // 'id'  => $faker->numberBetween(1,101),
                'name' => $faker->name,
                'email' => $faker->email,
                'password' => bcrypt('123456'),
                'created_at'=> \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]);
        }
    }
}
