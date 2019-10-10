<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $faker = \Faker\Factory::create();
        // for ($i = 0 ; $i <= 200; $i++){

        //     $name = $faker->name(50);

        //     \DB::table('categories')->insert([
        //         'name' => $name,
        //         'slug' => \illuminate\Support\Str::slug($name),
        //         'parent_id' => 1,
        //         'depth' => 1,
        //         'created_at' => \Carbon\Carbon::now(),
        //         'updated_at' => \Carbon\Carbon::now()
        //     ]);
        // }

        $categories = [
            'Máy tính',
            'Điện thoại',
            'Máy ảnh',
            'Phụ kiện'

        ];

        foreach ($categories as $category) {
            \DB::table('categories')->insert([
                'name' => $category,
                'slug' => \illuminate\Support\Str::slug($category),
                'parent_id' => 1,
                'depth' => 1,
                'created_at' => \Carbon\Carbon::now(),
                'updated_at' => \Carbon\Carbon::now()
            ]);
        }
    }
}
