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
            'initialreaction' => Carbon::parse('22.06.2018'),
            'verification' => Carbon::parse('22.06.2018'),
            'verified_by' => 'Klinik',
            'suspicion' => false,
            'emergency_medication' => 'Kortison'
        ]);

        DB::table('affected_items')->insert([
            'affected_id' => 1,
            'type' => 'allergy',
            'name' => 'Wespengift',
            'symptoms' => 'Atemnot',
            'initialreaction' => Carbon::parse('22.06.2018'),
            'verification' => Carbon::parse('22.06.2018'),
            'verified_by' => 'Klinik',
            'suspicion' => false,
            'emergency_medication' => 'Kortison'
        ]);

        DB::table('affected_items')->insert([
            'affected_id' => 1,
            'type' => 'intolerance',
            'name' => 'Augmentin',
            'symptoms' => 'Hautrötungen',
            'initialreaction' => Carbon::parse('22.06.2018'),
            'verification' => null,
            'verified_by' => '',
            'suspicion' => true,
            'emergency_medication' => ''
        ]);

        DB::table('affected_items')->insert([
            'affected_id' => 2,
            'type' => 'intolerance',
            'name' => 'Milch',
            'symptoms' => 'Übelkeit',
            'initialreaction' => Carbon::parse('22.06.2018'),
            'verification' => null,
            'verified_by' => '',
            'suspicion' => true,
            'emergency_medication' => ''
        ]);
    }
}