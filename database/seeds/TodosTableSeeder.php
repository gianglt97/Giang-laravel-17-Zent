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
                'user_id'=>$faker->numberBetween(1, 201),
                'title'  => $faker->text(20),
                'content' => $faker->text(200),
                'status'=>1,
                'created_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s'),
                'updated_at' => \Carbon\Carbon::now()->format('Y-m-d H:i:s')
            ]);
        }
    }
}
