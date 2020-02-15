<?php

use Illuminate\Database\Seeder;
use Demo\Infrastructure\Eloquent\ArticleEloquent;

/**
 * Class ArticlesTableSeeder
 *
 * php artisan db:seed --class=ArticlesTableSeeder
 */
class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ArticleEloquent::truncate();
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 100; $i++) {
            ArticleEloquent::create([
                'title' => $faker->sentence,
                'description' => $faker->paragraph,
                'author' => 1,
            ]);
        }
    }
}
