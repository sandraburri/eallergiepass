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
            'user_id' => 3,
            'ahv_number' => '756.1234.1234.12',
            'birth_date' => Carbon::parse('28.09.1974')
        ]);

        DB::table('affected')->insert([
            'user_id' => 4,
            'ahv_number' => '756.4321.4321.43',
            'birth_date' => Carbon::parse('24.08.1996')
        ]);
    }
}
