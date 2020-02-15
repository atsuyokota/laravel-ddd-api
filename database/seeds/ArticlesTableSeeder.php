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
        DB::table('articles')->insert([
            [
                'title' => 'Laravel Blog Title1',
                'description' => 'Hello, this is description',
                'author' => 1,
            ],
            [
                'title' => 'Laravel Blog Title2',
                'description' => 'Hello, this is description2',
                'author' => 1,
            ],
            [
                'title' => 'Laravel Blog Title3',
                'description' => 'Hello, this is description3',
                'author' => 1,
            ],
        ]);
    }
}
