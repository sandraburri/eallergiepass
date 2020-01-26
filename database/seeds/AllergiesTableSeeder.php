<?php

use Illuminate\Database\Seeder;
use App\Allergy;
use Carbon\Carbon;

class AllergiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('allergies')->insert([
            'affected_id' => 1,
            'allergy_substances_id' => '288328004',
            'symptoms_id' => 'Atemnot',
            'initialreaction' => Carbon::parse('22.06.2018'),
            'verification' => Carbon::parse('22.06.2018'),
            'verified_by' => 'Klinik',
            'suspicion' => false,
            'emergency_medication' => 'Kortison'
        ]);

        DB::table('allergies')->insert([
            'affected_id' => 1,
            'allergy_substances_id' => '256440004',
            'symptoms_id' => 'Atemnot',
            'initialreaction' => Carbon::parse('22.06.2018'),
            'verification' => Carbon::parse('22.06.2018'),
            'verified_by' => 'Klinik',
            'suspicion' => false,
            'emergency_medication' => 'Kortison'
        ]);
    }
}