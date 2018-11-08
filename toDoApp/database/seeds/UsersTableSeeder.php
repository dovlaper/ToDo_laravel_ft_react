<?php

use Illuminate\Database\Seeder;

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
        DB::table('cards')->insert([
            'title' => 'Task1',
            'content' => 'vladin prvi task',
            'user_id' => 1,
            'priority' => false,
            'done' =>false
        ]);
        DB::table('cards')->insert([
            'title' => 'Task2',
            'content' => 'elenin prvi task',
            'user_id' => 2,
            'priority' => false,
            'done' =>false
        ]);
        DB::table('cards')->insert([
            'title' => 'Task3',
            'content' => 'vladin drugi task',
            'user_id' => 1,
            'priority' => true,
            'done' =>false
        ]);
        DB::table('cards')->insert([
            'title' => 'Task4',
            'content' => 'neki random content',
            'user_id' => 2,
            'priority' => false,
            'done' =>true
        ]);
        DB::table('cards')->insert([
            'title' => 'Task5',
            'content' => 'neki random content',
            'user_id' => 1,
            'priority' => false,
            'done' =>false
        ]);
        DB::table('cards')->insert([
            'title' => 'Task6',
            'content' => 'neki random content',
            'user_id' => 2,
            'priority' => false,
            'done' =>true
        ]);
        DB::table('cards')->insert([
            'title' => 'Task7',
            'content' => 'neki random content',
            'user_id' => 1,
            'priority' => false,
            'done' =>true
        ]);
        DB::table('cards')->insert([
            'title' => 'Task8',
            'content' => 'neki random content',
            'user_id' => 2,
            'priority' => false,
            'done' =>true
        ]);
        DB::table('cards')->insert([
            'title' => 'Task9',
            'content' => 'neki random content',
            'user_id' => 1,
            'priority' => false,
            'done' =>true
        ]);
        DB::table('cards')->insert([
            'title' => 'Task10',
            'content' => 'neki random content',
            'user_id' => 2,
            'priority' => false,
            'done' =>true
        ]);
        DB::table('cards')->insert([
            'title' => 'Task11',
            'content' => 'neki random content',
            'user_id' => 1,
            'priority' => true,
            'done' =>true
        ]);
        DB::table('cards')->insert([
            'title' => 'Task12',
            'content' => 'neki random content',
            'user_id' => 2,
            'priority' => false,
            'done' =>false
        ]);
        DB::table('cards')->insert([
            'title' => 'Task13',
            'content' => 'neki random content',
            'user_id' => 1,
            'priority' => true,
            'done' =>true
        ]);
        DB::table('cards')->insert([
            'title' => 'Task14',
            'content' => 'neki random content',
            'user_id' => 2,
            'priority' => false,
            'done' =>true
        ]);
        DB::table('cards')->insert([
            'title' => 'Task15',
            'content' => 'neki random content',
            'user_id' => 1,
            'priority' => false,
            'done' =>false
        ]);
        DB::table('cards')->insert([
            'title' => 'Task16',
            'content' => 'neki random content',
            'user_id' => 2,
            'priority' => true,
            'done' =>true
        ]);
    }
}
