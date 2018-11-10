<?php

use Illuminate\Database\Seeder;
use App\Model\Card;
use App\Model\User;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'vlada',
            'email' => 'vlada@gmail.com',
            'password' => bcrypt('123456'),
        ]);
        User::create([
            'name' => 'elena',
            'email' => 'elena@gmail.com',
            'password' => bcrypt('123455'),
        ]);

        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 10; $i++) {
            Card::create([
                'title' => $faker->sentence,
                'content' => $faker->sentence,
                'priority' => $faker->randomElement([true, false]),
                'done' => $faker->randomElement([true, false]),
                'user_id' => $faker->randomElement([1, 2]),
            ]);
        }




    }
}
