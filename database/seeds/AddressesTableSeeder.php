<?php

use Illuminate\Database\Seeder;

class AddressesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('addresses')->insert([
            'user_id' => 1,
            'last_name' => 'Rüdisüli',
            'first_name' => 'Max',
            'street' => 'Meikirchstrasse',
            'street_number' => '66',
            'zip' => '3042',
            'city' => 'Ortschwaben',
            'phone_number' => '0311111111'
        ]);

        DB::table('addresses')->insert([
            'user_id' => 2,
            'last_name' => 'Müller',
            'first_name' => 'Sabrina',
            'street' => 'Bernstrasse',
            'street_number' => '66',
            'zip' => '3302',
            'city' => 'Moosseedorf',
            'phone_number' => '0312222222'
        ]);

        DB::table('addresses')->insert([
            'user_id' => 3,
            'last_name' => 'Burri',
            'first_name' => 'Sandra',
            'street' => 'Wabersackerstrasse',
            'street_number' => '107',
            'zip' => '3098',
            'city' => 'Köniz',
            'phone_number' => '0313333333'
        ]);

        DB::table('addresses')->insert([
            'user_id' => 4,
            'last_name' => 'Scheidegger',
            'first_name' => 'Rebecca',
            'street' => 'Bernstrasse',
            'street_number' => '66',
            'zip' => '3045',
            'city' => 'Meikirch',
            'phone_number' => '0314444444'
        ]);


    }
}
