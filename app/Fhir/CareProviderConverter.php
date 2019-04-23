<?php

//This is the FHIR converter for the care provider. All information about the care provider,
//which is output on the haptic allergy passport for the affected person, is converted here into FHIR,
//so that it can be stored on MIDATA (simulated EPD).

namespace App\Fhir;

use App\CareProvider;
use HL7\FHIR\STU3\FHIRDomainResource\FHIROrganization;
use HL7\FHIR\STU3\FHIRResource\FHIROrganization\FHIROrganizationContact;
use HL7\FHIR\STU3\FHIRElement\FHIRAddress;
use HL7\FHIR\STU3\FHIRElement\FHIRCoding;
use HL7\FHIR\STU3\FHIRElement\FHIRExtension;

class CareProviderConverter
{
    public static function convert(CareProvider $care_provider)
    {
        if (!$care_provider) {
            throw "CareProvider not found.";
        }

        $address = $care_provider->user->address;
        if (!$address) {
            throw "CareProvider.Address not found.";
        }

        $fhirPurpose = new FHIRCoding();
        $fhirPurpose->setSystem("http://terminology.hl7.org/CodeSystem/contactentity-type");
        $fhirPurpose->setCode("ADMIN");

        $fhirAddress = new FHIRAddress();
        $fhirAddress->addLine($address->street);
        $fhirAddress->addExtension($address->street_number);
        $fhirAddress->setPostalCode($address->zip);
        $fhirAddress->setCity($address->city);
        $fhirAddress->setCountry("CH");

        $fhirDiscipline = new FHIRExtension();
        $fhirDiscipline->setUrl("https://eallergiepass.ch/fhir/StructureDefinition/organization-contact-discipline");
        $fhirDiscipline->setId(100);
        $fhirDiscipline->setValueString($care_provider->discipline);

        $fhirOrganizationContact = new FHIROrganizationContact();
        $fhirOrganizationContact->setName($care_provider->title . ' ' . $address->first_name . ' ' . $address->last_name);
        $fhirOrganizationContact->setPurpose($fhirPurpose);
        $fhirOrganizationContact->addExtension($fhirDiscipline);

        $fhirOrganization = new FHIROrganization();
        $fhirOrganization->setName($care_provider->name);
        $fhirOrganization->addAddress($fhirAddress);
        $fhirOrganization->addContact($fhirOrganizationContact);

        return $fhirOrganization;
    }
}
