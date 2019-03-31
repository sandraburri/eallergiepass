<?php

use Illuminate\Database\Seeder;

class AllergensTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('allergens')->insert(
            [
                'type' => 'Haselnuss'
            ],
            [
                'type' => 'Penicillin'
            ]
        );
    }
}
