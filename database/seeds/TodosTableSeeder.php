<?php
date_default_timezone_set("Asia/Bangkok");
use Illuminate\Database\Seeder;

class TodosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // \DB::table('todos')->insert([
        //     'title'  => 'Học CSS',
        //     'content' => 'Nội dung học bài todo',
        //     'created_at' => date('Y-m-d H:i:s', time()),
        //     'updated_at' => date('Y-m-d H:i:s', time())
        // ]);

        $faker = \Faker\Factory::create();
        for ($i = 0; $i < 200; $i++) {
            \DB::table('todos')->insert([
                'user_id'=>$faker->numberBetween($min = 1000, $max = 900000000),  //tạo số bất kì từ 1000 đến 9000000000
                'title'  => $faker->text(20),
                'content' => $faker->text(200),
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time())
            ]);
        }
    }
}
