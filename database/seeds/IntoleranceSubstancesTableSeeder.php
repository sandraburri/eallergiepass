<?php

use Illuminate\Database\Seeder;
use App\IntoleranceSubstance;

class IntoleranceSubstancesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        IntoleranceSubstance::unguard();

        $this->insert(54235008,	'Histamine', 'Histamin');
        $this->insert(47703008,	'Lactose', 'Laktose');
        $this->insert(11320009,	'Sucrose', 'Saccharose');
        $this->insert(89811004,	'Gluten', 'Gluten');
        $this->insert(58202007,	'Fructose', 'Fruktose');
        $this->insert(19839007,	'Sorbitol', 'Sorbitol');
        $this->insert(412071004,'Wheat', 'Weizen');
        $this->insert(38182007,	'Galactose', 'Galaktose');
        $this->insert(117179005,'Phenethylamine', 'Phenylethylamin');
        $this->insert(14092002,	'Tyramine', 'Tyramin');
        $this->insert(33635003,	'Serotonin', 'Serotonin');
        $this->insert(430503006,'Glutamate', 'Glutamat');
        $this->insert(255637000,'Salicylate', 'Salicylate');
        $this->insert(387350000,'Benzoic acid', 'Benzoesäure');
        $this->insert(26312007,	'Lecithin', 'Lecithin');
        $this->insert(11526002,	'Aspartame', 'Aspartam');
        $this->insert(60376006,	'Succinic acid', 'Bernsteinsäure');
        $this->insert(80582002,	'Glycerol',	'Glycerin');
        $this->insert(55946005,	'Pectin', 'Pektin');
    }

    private function insert($id, $name_en, $name_de) {
        DB::table('intolerance_substances')->insert([
            'id' => $id,
            'name_en' => $name_en,
            'name_de' => $name_de
        ]);
}
}
