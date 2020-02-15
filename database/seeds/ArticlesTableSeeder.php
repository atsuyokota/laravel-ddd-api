<?php

use Illuminate\Database\Seeder;

class ArticlesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->truncate();
        $faker = Faker\Factory::create();
        for ($i=0; $i<10; $i++) {
            \Demo\Infrastructure\Eloquent\ArticleEloquent::create([
                'title'=>$faker->text(20),
                'description'=>$faker->text(200),
                'author' => 1,
            ]);
        }
    }
}
