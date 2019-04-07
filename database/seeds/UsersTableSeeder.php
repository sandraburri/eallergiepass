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
            'name' => 'Max Rüdisüli',
            'email' => 'max.ruedisueli@hin.test',
            'password' => bcrypt('test1234'),
        ]);

        DB::table('users')->insert([
            'name' => 'Sabrina Müller',
            'email' => 'sabrina.mueller@hin.test',
            'password' => bcrypt('test4321'),
        ]);

        DB::table('users')->insert([
            'name' => 'Sandra Burri',
            'email' => 'hh.nn@bla.test',
            'password' => bcrypt('test6666'),
        ]);

        DB::table('users')->insert([
            'name' => 'Rebecca Scheidegger',
            'email' => 'll.uu@bla.test',
            'password' => bcrypt('test7777'),
        ]);
    }
}
