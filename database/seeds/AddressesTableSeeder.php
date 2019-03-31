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
            'user_id' => 3,
            'lastName' => 'Hugentobler',
            'firstName' => 'Bernhard'
        ]);

        DB::table('addresses')->insert([
            'user_id' => 4,
            'lastName' => 'Tahery',
            'firstName' => 'Sabrina'
        ]);
    }
}
