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
            'ahv_number' => '123.456.789',
            'birth_date' => Carbon::parse('28.09.1974')
        ]);

        DB::table('affected')->insert([
            'user_id' => 2,
            'ahv_number' => '987.654.321',
            'birth_date' => Carbon::parse('31.03.1996')
        ]);
    }
}
