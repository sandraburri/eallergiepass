<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(UsersTableSeeder::class);
        $this->call(CareProvidersTableSeeder::class);
        $this->call(AddressesTableSeeder::class);
        $this->call(AffectedTableSeeder::class);
        $this->call(AffectedItemsTableSeeder::class);
        $this->call(AllergySubstancesTableSeeder::class);
        $this->call(AllergiesTableSeeder::class);
        $this->call(IntolerancesTableSeeder::class);

        // when adding a new class here, execute
        // composer dump-autoload
    }
}