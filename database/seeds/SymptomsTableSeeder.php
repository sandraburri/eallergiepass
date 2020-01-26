<?php

use Illuminate\Database\Seeder;
use App\Symptom;

class SymptomsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Symptom::unguard();

        $this->insert(267036007, 'Dyspnea', 'Atemnot');
        $this->insert(418290006, 'Itching', 'Juckreiz');
        $this->insert(422400008, 'Vomiting', 'Erbrechen');
        $this->insert(65124004, 'Swelling', 'Schwellung');
        $this->insert(3424008, 'Tachycardia', 'Tachykardie');
        $this->insert(45007003, 'Low blood pressure', 'Tiefer Blutdruck'); 
        $this->insert(418107008, 'Unconscious', 'Bewusstlosigkeit');
        $this->insert(39579001,	'Anaphylaxis', 'Anaphylaxie');
        $this->insert(74776002,	'Itching of eye	Juckreiz', 'Augen');
        $this->insert(68235000,	'Nasal congestion', 'Verstopfte Nase');
        $this->insert(62315008,	'Diarrhea', 'Durchfall');
        $this->insert(25064002,	'Headache', 'Kopfschmerzen');
        $this->insert(61582004,	'Allergic rhinitis', 'Allergische Rhinitis');
        $this->insert(418363000, 'Itching of skin', 'Juckende Haut');
        $this->insert(49727002,	'Cough', 'Husten');
        $this->insert(703630003, 'Red eye', 'Rote Augen');
        $this->insert(247472004, 'Urticarial rash', 'Nesselsucht');
        $this->insert(699376002, 'Lip Swelling', 'Geschwollene Lippen');
        $this->insert(130987000, 'Acute confusion', 'Verwirrung');
        $this->insert(76067001,	'Sneezing', 'Niesen');
       
    }
    private function insert($id, $name_en, $name_de) {
        DB::table('symptoms')->insert([
            'id' => $id,
            'name_en' => $name_en,
            'name_de' => $name_de
        ]);
    }
}
