<?php

//This is the FHIR converter for affected persons. All information about the care provider,
//which is output on the haptic allergy passport for the affected person, is converted here into FHIR,
//so that it can be stored on MIDATA (simulated EPD).

namespace App\Fhir;

use App\Affected;
use HL7\FHIR\STU3\FHIRDomainResource\FHIRPatient;
use HL7\FHIR\STU3\FHIRResource\FHIRPatient\FHIRPatientCommunication;
use HL7\FHIR\STU3\FHIRElement\FHIRAddress;
use HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept;
use HL7\FHIR\STU3\FHIRElement\FHIRCoding;
use HL7\FHIR\STU3\FHIRElement\FHIRDate;
use HL7\FHIR\STU3\FHIRElement\FHIRContactPoint;
use HL7\FHIR\STU3\FHIRElement\FHIRExtension;

class AffectedConverter
{
    public static function convert(Affected $affected)
    {
        if (!$affected) {
            throw "Affected not found.";
        }

        $address = $affected->user->address;
        if (!$address) {
            throw "Affected.Address not found.";
        }

        $language = new FHIRCoding();
        $language->setSystem("urn:ietf:bcp:47");
        $language->setCode("de");
        $language->setDisplay("German");

        $languageCoding = new FHIRCodeableConcept();
        $languageCoding->addCoding($language);

        $fHIRPatientCommunication = new FHIRPatientCommunication();
        $fHIRPatientCommunication->setLanguage($languageCoding);
        $fHIRPatientCommunication->setPreferred(true);

        $fhirAddress = new FHIRAddress();
        $fhirAddress->addLine($address->street);
        $fhirAddress->addExtension($address->street_number);
        $fhirAddress->setPostalCode($address->zip);
        $fhirAddress->setCity($address->city);
        $fhirAddress->setCountry("CH");

        $fhirContactPoint = new FHIRContactPoint();
        $fhirContactPoint->setSystem("phone");
        $fhirContactPoint->setValue($address->phone_number);
        $fhirContactPoint->setUse("mobile");

        $fhirBirthDate = new FHIRDate();
        $fhirBirthDate->setValue($affected->birth_date->format('Y-m-d'));

        $fhirAhvNumber = new FHIRExtension();
        $fhirAhvNumber->setUrl("https://eallergiepass.ch/fhir/StructureDefinition/ahv-number");
        $fhirAhvNumber->setId(100);
        $fhirAhvNumber->setValueString($affected->ahv_number);

        $fhirAffected = new FHIRPatient();
        $fhirAffected->addName($address->first_name . ' ' . $address->last_name);
        $fhirAffected->addTelecom($fhirContactPoint);
        $fhirAffected->addCommunication($fHIRPatientCommunication);
        $fhirAffected->addAddress($fhirAddress);
        $fhirAffected->setBirthDate($fhirBirthDate);
        $fhirAffected->addExtension($fhirAhvNumber);

        return $fhirAffected;
    }
}