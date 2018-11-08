<?php

use Illuminate\Database\Seeder;
use App\Model\Card;


class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'vlada',
            'email' => 'vlada@gmail.com',
            'password' => bcrypt('123456'),
        ]);
        DB::table('users')->insert([
            'name' => 'elena',
            'email' => 'elena@gmail.com',
            'password' => bcrypt('123455'),
        ]);

        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 10; $i++) {
            Card::create([
                'title' =>$faker->sentence,
                'content' => $faker->sentence,
                'priority' => $faker->randomElement($array = array (true, false)),
                'done' => $faker->randomElement($array = array (true, false)),
                'user_id' => $faker->randomElement($array = array(1, 2)),
            ]);
        }




    }
}
