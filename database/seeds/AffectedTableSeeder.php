<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AffectedTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('affected')->insert([
            'user_id' => 1,
            'AHVNumber' => '123.456.789',
            'birthdate' => Carbon::parse('28.09.1974')
        ]);

        DB::table('affected')->insert([
            'user_id' => 2,
            'AHVNumber' => '987.654.321',
            'birthdate' => Carbon::parse('31.03.1996')
        ]);
    }
}
