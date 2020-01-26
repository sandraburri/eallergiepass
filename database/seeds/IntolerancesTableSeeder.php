<?php

use Illuminate\Database\Seeder;
use App\Intolerance;
use Carbon\Carbon;

class IntolerancesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('intolerances')->insert([
            'affected_id' => 1,
            'intolerance_substances_id' => '54235008',
            'symptoms_id' => '68235000',
            'initialreaction' => Carbon::parse('22.06.2018'),
            'verification' => Carbon::parse('22.06.2018'),
            'verified_by' => 'Klinik',
            'suspicion' => false,
            'emergency_medication' => 'Kortison'
        ]);

        DB::table('intolerances')->insert([
            'affected_id' => 1,
            'intolerance_substances_id' => '89811004',
            'symptoms_id' => '422400008',
            'initialreaction' => Carbon::parse('22.06.2018'),
            'verification' => Carbon::parse('22.06.2018'),
            'verified_by' => 'Klinik',
            'suspicion' => false,
            'emergency_medication' => 'Kortison'
        ]);
    }
}