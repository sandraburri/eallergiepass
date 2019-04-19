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
            'unique_id' => 'f02255d0-5e91-11e9-8650-c5d045daf6c0',
            'ahv_number' => '756.1234.1234.12',
            'birth_date' => Carbon::parse('28.09.1974')
        ]);

        DB::table('affected')->insert([
            'user_id' => 4,
            'unique_id' => 'f0227150-5e91-11e9-b48a-fb57e2e4ed32',
            'ahv_number' => '756.4321.4321.43',
            'birth_date' => Carbon::parse('24.08.1996')
        ]);
    }
}
