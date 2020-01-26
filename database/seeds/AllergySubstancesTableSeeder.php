<?php

use Illuminate\Database\Seeder;
use App\AllergySubstance;

class AllergySubstancesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AllergySubstance::unguard();

        $this->insert(288328004, 'Bee venom', 'Bienengift');
        $this->insert(256440004, 'Wasp venom', 'Wespengift');
        $this->insert(13577000, 'Nut', 'Nuss');
        $this->insert(256353000, 'Hazelnut', 'Haselnuss');
        $this->insert(256277009, 'Grass pollen', 'Graspollen');
        $this->insert(782576004, 'Tree pollen', 'Baumpollen');
        $this->insert(276310004, 'Animal hair', 'Tierhaar');
        $this->insert(735215001, 'Apple', 'Apfel');
        $this->insert(102261002, 'Strawberry', 'Erdbeer');
        $this->insert(412068007, 'Rye', 'Roggen');
        $this->insert(735977009, 'Marine crustacean', 'Marine Krustentiere');
        $this->insert(764146007, 'Penicillin', 'Penizillin');
        $this->insert(387458008, 'Acetylsalicylic acid', 'Acetylsalicylsäure');
        $this->insert(7034005, 'Diclofenac', 'Diclofenac');
        $this->insert(387207008, 'Ibuprofen', 'Ibuprofen');
        $this->insert(395978007, 'Clomethiazole', 'Clomethiazole');
        $this->insert(385420005, 'Contrast Media', 'Kontrastmittel');
        $this->insert(116252005, 'Sulfide', 'Sulfide');
        $this->insert(111088007, 'Latex', 'Latex');
        $this->insert(722071008, 'Mold antigen', ' Schimmelpilz-Antigen');
    }

    private function insert($id, $name_en, $name_de) {
        DB::table('allergy_substances')->insert([
            'id' => $id,
            'name_en' => $name_en,
            'name_de' => $name_de
        ]);
    }
}