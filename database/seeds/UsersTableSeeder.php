<?php

use Illuminate\Database\Seeder;

date_default_timezone_set("Asia/Bangkok");
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // \DB::table('users')->insert([
        //     'name'  => 'admin',
        //     'email' => 'admin@gmail.com',
        //     'password' => bcrypt('123456'),
        //     'created_at' => date('Y-m-d H:i:s', time()),
        //     'updated_at' => date('Y-m-d H:i:s', time())
        // ]);
         $faker = \Faker\Factory::create();
        for ($i = 0; $i < 200; $i++) {
            DB::table('users')->insert([
                'id' => $faker->numberBetween(1, 201),
                'name'  => $faker->name,
                'email' => $faker->email,
                'password' => bcrypt($faker->password(6)),
                'status' => 0,
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
    }
}
