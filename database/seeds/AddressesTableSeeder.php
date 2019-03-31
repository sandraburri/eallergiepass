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
            'last_name' => 'Hugentobler',
            'first_name' => 'Bernhard'
        ]);

        DB::table('addresses')->insert([
            'user_id' => 4,
            'last_name' => 'Tahery',
            'first_name' => 'Sabrina'
        ]);
    }
}
