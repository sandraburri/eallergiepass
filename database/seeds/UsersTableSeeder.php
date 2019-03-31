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
            'name' => 'Sandra Burri',
            'email' => 'burrs3@students.bfh.ch',
            'password' => bcrypt('test1234'),
        ]);

        DB::table('users')->insert([
            'name' => 'Rebecca Scheidegger',
            'email' => 'scher4@students.bfh.ch',
            'password' => bcrypt('test1234'),
        ]);

        DB::table('users')->insert([
            'name' => 'Bernhard Hugentobler',
            'email' => 'bernhard.hugentobler@hin.test',
            'password' => bcrypt('test1234'),
        ]);

        DB::table('users')->insert([
            'name' => 'Sabrina Tahery',
            'email' => 'sabrina.tahery@hin.test',
            'password' => bcrypt('test1234'),
        ]);

        

    }
}
