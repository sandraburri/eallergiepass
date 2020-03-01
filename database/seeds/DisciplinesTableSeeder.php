<?php

use Illuminate\Database\Seeder;
use App\Discipline;

class DisciplinesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Discipline::unguard();

        $this->insert(1002, 'Surgery', 'Chirurgie');
        $this->insert(1003, 'Gynaecology and obstetrics', 'Gynäkologie und Geburtshilfe');
        $this->insert(1004, 'Cardiac and thoracic vascular surgery', 'Herz- und thorakale Gefässchirurgie');
        $this->insert(1006, 'Paediatrics', 'Kinder- und Jugendmedizin');
        $this->insert(1007, 'Ophthalmology', 'Ophthalmologie');
        $this->insert(1008, 'Otorhinolaryngology', 'Oto-Thino-Laryngologie');
        $this->insert(1009, 'Pathology', 'Pathologie');
        $this->insert(1012, 'Anaesthesiology', 'Anästhesiologie');
        $this->insert(1013, 'Neurosurgery', 'Neurochirurgie');
        $this->insert(1014, 'Neurology', 'Neurologie');
        $this->insert(1015, 'Orthopaedic surgery and traumatology of the locomotor apparatus', 'Orthopädische Chirurgie und Traumatologie des Bewegungsapparates');
        $this->insert(1016, 'Pneumology', 'Pneumologie');
        $this->insert(1017, 'Psychiatry and psychotherapy', 'Psychiatrie und Psychotherapie');
        $this->insert(1018, 'Urology', 'Urologie');
        $this->insert(1019, 'Allergology and clinical immunology', 'Allergologie und klinische Immunologie');
        $this->insert(1020, 'Occupational medicine', 'Arbeitsmedizin');
        $this->insert(1021, 'Dermatology and venereology', 'Dermatologie und Venerologie');
        $this->insert(1022, 'Endocrinology - Diabetology', 'Endokrinologie / Diabetologie');
        $this->insert(1023, 'Gastroenterology', 'Gastroenterologie');
        $this->insert(1024, 'Haematology', 'Hämatologie');
        $this->insert(1025, 'Cardiology', 'Kardiologie');
        $this->insert(1026, 'Oral and maxillofacial surgery', 'Mund-, Kiefer- und Gesichtschirurgie');
        $this->insert(1027, 'Child and adolescent psychiatry and psychotherapy', 'Kinder- und Jugendpsychiatrie und -psychotherapie');
        $this->insert(1028, 'Paediatric surgery', 'Kinderchirurgie');
        $this->insert(1029, 'Clinical pharmacology and toxicology', 'Klinische Pharmakologie und Toxikologie');
        $this->insert(1030, 'Radiology', 'Radiologie');
        $this->insert(1031, 'Nuclear medicine', 'Nuklearmedizin');
        $this->insert(1032, 'Radio-oncology / radiotherapy', 'Radio-Onkologie / Strahlentherapie');
        $this->insert(1033, 'Nephrology', 'Nephrologie');
        $this->insert(1034, 'Physical medicine and rehabilitation', 'Physikalische Medizin und Rehabilitation');
        $this->insert(1035, 'Plastic, reconstructive and aesthetic surgery', 'Plastische, Rekonstruktive und Ästhetische Chirurgie');
        $this->insert(1036, 'Prevention and public health', 'Prävention und Gesundheitswesen');
        $this->insert(1037, 'Rheumatology', 'Rheumatologie');
        $this->insert(1038, 'Tropical and travel medicine', 'Tropen- und Reisemedizin');
        $this->insert(1039, 'Infectology', 'Infektologie');
        $this->insert(1041, 'Angiology', 'Angiologie');
        $this->insert(1042, 'Intensive care medicine', 'Intensivmedizin');
        $this->insert(1043, 'Medical genetics', 'Medizinische Genetik');
        $this->insert(1044, 'Medical oncology', 'Medizinische Onkologie');
        $this->insert(1045, 'Pharmaceutical medicine', 'Pharmazeutische Medizin');
        $this->insert(1046, 'Forensic medicine', 'Rechtsmedizin');
        $this->insert(1051, 'General Internal Medicine', 'Allgemeine Innere Medizin');
        $this->insert(1059, 'Hand surgery', 'Handchirurgie');
        $this->insert(1060, 'Vascular surgery', 'Gefässchirurgie');
        $this->insert(1061, 'Thoracic surgery', 'Thoraxchirurgie');
        $this->insert(2089, 'Neuropathology', 'Neuropathologie');
    }

    private function insert($id, $name_en, $name_de) {
        DB::table('disciplines')->insert([
            'id' => $id,
            'name_en' => $name_en,
            'name_de' => $name_de
        ]);
    }
}