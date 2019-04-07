<?php

use Illuminate\Database\Seeder;
use Carbon\Carbon;

class AffectedItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('affected_items')->insert([
            'affected_id' => 1,
            'type' => 'allergy',
            'name' => 'Bienengift',
            'symptoms' => 'Atemnot',
            'verification' => Carbon::parse('22.06.2018'),
            'verified_by' => 'Klinik',
            'suspicion' => false,
            'medication' => '',
            'emergency_medication' => 'Kortison'
        ]);

        DB::table('affected_items')->insert([
            'affected_id' => 1,
            'type' => 'intolerance',
            'name' => 'Augmentin',
            'symptoms' => 'Hautrötungen',
            'verification' => null,
            'verified_by' => '',
            'suspicion' => true,
            'medication' => '',
            'emergency_medication' => ''
        ]);

        DB::table('affected_items')->insert([
            'affected_id' => 2,
            'type' => 'incompatibility',
            'name' => 'Milch',
            'symptoms' => 'Übelkeit',
            'verification' => null,
            'verified_by' => '',
            'suspicion' => true,
            'medication' => '3x täglich Antihistaminikum',
            'emergency_medication' => ''
        ]);
    }
}