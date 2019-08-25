<?php

namespace App\Fhir;

use App\AffectedItem;
use HL7\FHIR\STU3\FHIRDomainResource\FHIRAllergyIntolerance;
use HL7\FHIR\STU3\FHIRElement\FHIRExtension;
use HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept;
use HL7\FHIR\STU3\FHIRElement\FHIRDate;
use HL7\FHIR\STU3\FHIRElement\FHIRAllergyIntoleranceType;
use HL7\FHIR\STU3\FHIRResource\FHIRAllergyIntolerance\FHIRAllergyIntoleranceReaction;

class AffectedItemsConverter
{
    public static function convert(AffectedItem $item)
    {
        $fhirVerifiedBy = new FHIRExtension();
        $fhirVerifiedBy->setUrl("https://eallergiepass.ch/fhir/StructureDefinition/allergyIntolerance-verified_by");
        $fhirVerifiedBy->setId(101);
        $fhirVerifiedBy->setValueString($item->verified_by);

        $fhirSuspicion = new FHIRExtension();
        $fhirSuspicion->setUrl("https://eallergiepass.ch/fhir/StructureDefinition/allergyIntolerance-suspicion");
        $fhirSuspicion->setId(102);
        $fhirSuspicion->setValueString($item->suspicion);

        $fhirInitialreaction = new FHIRExtension();
        $fhirInitialreaction->setUrl("https://eallergiepass.ch/fhir/StructureDefinition/allergyIntolerance-Initialreaction");
        $fhirInitialreaction->setId(103);
        $fhirInitialreaction->setValueString($item->Initialreaction);

        $fhirEmergencyMedication = new FHIRExtension();
        $fhirEmergencyMedication->setUrl("https://eallergiepass.ch/fhir/StructureDefinition/allergyIntolerance-emergency_medication");
        $fhirEmergencyMedication->setId(104);
        $fhirEmergencyMedication->setValueString($item->emergency_medication);

        $fhirType = new FHIRAllergyIntoleranceType();
        $fhirType->setValue($item->type);

        $substance = new FHIRCodeableConcept();
        $substance->setText($item->name);

        $onset = new FHIRDate();
        $onset->setValue(optional($item->verification)->format('Y-m-d'));

        $fhirReaction = new FHIRAllergyIntoleranceReaction();
        $fhirReaction->setSubstance($substance);
        $fhirReaction->setOnset($onset);

        $fhirAllergyIntolerance = new FHIRAllergyIntolerance();
        $fhirAllergyIntolerance->setType($fhirType);
        $fhirAllergyIntolerance->addReaction($fhirReaction);
        $fhirAllergyIntolerance->addExtension($fhirVerifiedBy);
        $fhirAllergyIntolerance->addExtension($fhirSuspicion);
        $fhirAllergyIntolerance->addExtension($fhirInitialreaction);
        $fhirAllergyIntolerance->addExtension($fhirEmergencyMedication);

        return $fhirAllergyIntolerance;
    }
}