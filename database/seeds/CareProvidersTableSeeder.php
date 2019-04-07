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
            'user_id' => 1,
            'name' => 'Klinik Sonnenschein',
            'title' => 'Dr. Med.',
            'discipline' => 'Allgemeine Innere Medizin'
        ]);

        DB::table('care_providers')->insert([
            'user_id' => 2,
            'name' => 'Klinik Seeblick',
            'title' => '',
            'discipline' => 'Praktische Ärztin'
        ]);
    }
}
