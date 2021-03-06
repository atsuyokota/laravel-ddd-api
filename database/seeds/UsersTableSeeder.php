<?php

use Illuminate\Database\Seeder;
use Demo\Infrastructure\Eloquent\UserEloquent;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserEloquent::truncate();
        $faker = Faker\Factory::create();
        for ($i = 0; $i < 100; $i++) {
            $gender = $faker->randomElement(['male', 'female']);
            UserEloquent::create([
                'name' => $faker->name($gender),
                'email' => $faker->unique()->safeEmail,
                'gender' => $gender === 'male' ? 'M': 'F',
                'date_of_birth' => $faker->dateTimeBetween('-80 years', '-20years')->format('Y-m-d')
            ]);
        }
    }
}
