<?php

use Illuminate\Database\Seeder;

class CareProvidersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('care_providers')->insert([
            'user_id' => 3,
            'title' => 'Dr. Med.',
            'discipline' => 'Allgemeine Innere Medizin'
        ]);

        DB::table('care_providers')->insert([
            'user_id' => 4,
            'title' => '',
            'discipline' => 'Praktische Ärztin / General Practice'
        ]);
    }
}
