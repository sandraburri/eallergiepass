<?php namespace HL7\FHIR\STU3\FHIRDomainResource;

/*!
 * This class was generated with the PHPFHIR library (https://github.com/dcarbone/php-fhir) using
 * class definitions from HL7 FHIR (https://www.hl7.org/fhir/)
 * 
 * Class creation date: April 21st, 2019
 * 
 * PHPFHIR Copyright:
 * 
 * Copyright 2016-2019 Daniel Carbone (daniel.p.carbone@gmail.com)
 * 
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 * 
 *        http://www.apache.org/licenses/LICENSE-2.0
 * 
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 * 
 *
 * FHIR Copyright Notice:
 *
 *   Copyright (c) 2011-2013, HL7, Inc.
 *   All rights reserved.
 * 
 *   Redistribution and use in source and binary forms, with or without modification,
 *   are permitted provided that the following conditions are met:
 * 
 *    * Redistributions of source code must retain the above copyright notice, this
 *      list of conditions and the following disclaimer.
 *    * Redistributions in binary form must reproduce the above copyright notice,
 *      this list of conditions and the following disclaimer in the documentation
 *      and/or other materials provided with the distribution.
 *    * Neither the name of HL7 nor the names of its contributors may be used to
 *      endorse or promote products derived from this software without specific
 *      prior written permission.
 * 
 *   THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
 *   ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
 *   WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED.
 *   IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT,
 *   INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT
 *   NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR
 *   PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY,
 *   WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
 *   ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 *   POSSIBILITY OF SUCH DAMAGE.
 * 
 * 
 *   Generated on Tue, Sep 30, 2014 18:08+1000 for FHIR v0.0.82
 *   Copyright (c) 2011+, HL7, Inc.
 *   All rights reserved.
 * 
 *   Redistribution and use in source and binary forms, with or without modification,
 *   are permitted provided that the following conditions are met:
 * 
 *    * Redistributions of source code must retain the above copyright notice, this
 *      list of conditions and the following disclaimer.
 *    * Redistributions in binary form must reproduce the above copyright notice,
 *      this list of conditions and the following disclaimer in the documentation
 *      and/or other materials provided with the distribution.
 *    * Neither the name of HL7 nor the names of its contributors may be used to
 *      endorse or promote products derived from this software without specific
 *      prior written permission.
 * 
 *   THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
 *   ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
 *   WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED.
 *   IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT,
 *   INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT
 *   NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR
 *   PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY,
 *   WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
 *   ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 *   POSSIBILITY OF SUCH DAMAGE.
 * 
 * 
 *   Generated on Sat, Oct 24, 2015 07:41+1100 for FHIR v1.0.2
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 *   Copyright (c) 2011+, HL7, Inc.
 *   All rights reserved.
 * 
 *   Redistribution and use in source and binary forms, with or without modification,
 *   are permitted provided that the following conditions are met:
 * 
 *    * Redistributions of source code must retain the above copyright notice, this
 *      list of conditions and the following disclaimer.
 *    * Redistributions in binary form must reproduce the above copyright notice,
 *      this list of conditions and the following disclaimer in the documentation
 *      and/or other materials provided with the distribution.
 *    * Neither the name of HL7 nor the names of its contributors may be used to
 *      endorse or promote products derived from this software without specific
 *      prior written permission.
 * 
 *   THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" AND
 *   ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE IMPLIED
 *   WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE DISCLAIMED.
 *   IN NO EVENT SHALL THE COPYRIGHT HOLDER OR CONTRIBUTORS BE LIABLE FOR ANY DIRECT,
 *   INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT
 *   NOT LIMITED TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR
 *   PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY,
 *   WHETHER IN CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE)
 *   ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
 *   POSSIBILITY OF SUCH DAMAGE.
 * 
 * 
 *   Generated on Wed, Apr 19, 2017 07:44+1000 for FHIR v3.0.1
 * 
 *   Note: the schemas & schematrons do not contain all of the rules about what makes resources
 *   valid. Implementers will still need to be familiar with the content of the specification and with
 *   any profiles that apply to the resources in order to make a conformant implementation.
 * 
 */

use HL7\FHIR\STU3\FHIRResource\FHIRDomainResource;

/**
 * Describes the event of a patient consuming or otherwise being administered a medication.  This may be as simple as swallowing a tablet or it may be a long running infusion.  Related resources tie this event to the authorizing prescription, and the specific encounter between patient and health care practitioner.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRMedicationAdministration extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * External identifier - FHIR will generate its own internal identifiers (probably URLs) which do not need to be explicitly managed by the resource.  The identifier here is one that would be used by another non-FHIR system - for example an automated medication pump would provide a record each time it operated; an administration while the patient was off the ward might be made with a different system and entered after the event.  Particularly important if these records have to be updated.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = [];

    /**
     * A protocol, guideline, orderset or other definition that was adhered to in whole or in part by this event.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRReference[]
     */
    public $definition = [];

    /**
     * A larger event of which this particular event is a component or step.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRReference[]
     */
    public $partOf = [];

    /**
     * Will generally be set to show that the administration has been completed.  For some long running administrations such as infusions it is possible for an administration to be started but not completed or it may be paused while some other process is under way.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRMedicationAdministrationStatus
     */
    public $status = null;

    /**
     * Indicates the type of medication administration and where the medication is expected to be consumed or administered.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept
     */
    public $category = null;

    /**
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept
     */
    public $medicationCodeableConcept = null;

    /**
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    public $medicationReference = null;

    /**
     * The person or animal or group receiving the medication.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    public $subject = null;

    /**
     * The visit, admission or other contact between patient and health care provider the medication administration was performed as part of.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    public $context = null;

    /**
     * Additional information (for example, patient height and weight) that supports the administration of the medication.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRReference[]
     */
    public $supportingInformation = [];

    /**
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRDateTime
     */
    public $effectiveDateTime = null;

    /**
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRPeriod
     */
    public $effectivePeriod = null;

    /**
     * The individual who was responsible for giving the medication to the patient.
     * @var \HL7\FHIR\STU3\FHIRResource\FHIRMedicationAdministration\FHIRMedicationAdministrationPerformer[]
     */
    public $performer = [];

    /**
     * Set this to true if the record is saying that the medication was NOT administered.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRBoolean
     */
    public $notGiven = null;

    /**
     * A code indicating why the administration was not performed.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    public $reasonNotGiven = [];

    /**
     * A code indicating why the medication was given.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    public $reasonCode = [];

    /**
     * Condition or observation that supports why the medication was administered.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRReference[]
     */
    public $reasonReference = [];

    /**
     * The original request, instruction or authority to perform the administration.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    public $prescription = null;

    /**
     * The device used in administering the medication to the patient.  For example, a particular infusion pump.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRReference[]
     */
    public $device = [];

    /**
     * Extra information about the medication administration that is not conveyed by the other attributes.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRAnnotation[]
     */
    public $note = [];

    /**
     * Describes the medication dosage information details e.g. dose, rate, site, route, etc.
     * @var \HL7\FHIR\STU3\FHIRResource\FHIRMedicationAdministration\FHIRMedicationAdministrationDosage
     */
    public $dosage = null;

    /**
     * A summary of the events of interest that have occurred, such as when the administration was verified.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRReference[]
     */
    public $eventHistory = [];

    /**
     * @var string
     */
    private $_fhirElementName = 'MedicationAdministration';

    /**
     * External identifier - FHIR will generate its own internal identifiers (probably URLs) which do not need to be explicitly managed by the resource.  The identifier here is one that would be used by another non-FHIR system - for example an automated medication pump would provide a record each time it operated; an administration while the patient was off the ward might be made with a different system and entered after the event.  Particularly important if these records have to be updated.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier() {
        return $this->identifier;
    }

    /**
     * External identifier - FHIR will generate its own internal identifiers (probably URLs) which do not need to be explicitly managed by the resource.  The identifier here is one that would be used by another non-FHIR system - for example an automated medication pump would provide a record each time it operated; an administration while the patient was off the ward might be made with a different system and entered after the event.  Particularly important if these records have to be updated.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier) {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * A protocol, guideline, orderset or other definition that was adhered to in whole or in part by this event.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRReference[]
     */
    public function getDefinition() {
        return $this->definition;
    }

    /**
     * A protocol, guideline, orderset or other definition that was adhered to in whole or in part by this event.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRReference $definition
     * @return $this
     */
    public function addDefinition($definition) {
        $this->definition[] = $definition;
        return $this;
    }

    /**
     * A larger event of which this particular event is a component or step.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRReference[]
     */
    public function getPartOf() {
        return $this->partOf;
    }

    /**
     * A larger event of which this particular event is a component or step.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRReference $partOf
     * @return $this
     */
    public function addPartOf($partOf) {
        $this->partOf[] = $partOf;
        return $this;
    }

    /**
     * Will generally be set to show that the administration has been completed.  For some long running administrations such as infusions it is possible for an administration to be started but not completed or it may be paused while some other process is under way.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRMedicationAdministrationStatus
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * Will generally be set to show that the administration has been completed.  For some long running administrations such as infusions it is possible for an administration to be started but not completed or it may be paused while some other process is under way.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRMedicationAdministrationStatus $status
     * @return $this
     */
    public function setStatus($status) {
        $this->status = $status;
        return $this;
    }

    /**
     * Indicates the type of medication administration and where the medication is expected to be consumed or administered.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept
     */
    public function getCategory() {
        return $this->category;
    }

    /**
     * Indicates the type of medication administration and where the medication is expected to be consumed or administered.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept $category
     * @return $this
     */
    public function setCategory($category) {
        $this->category = $category;
        return $this;
    }

    /**
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept
     */
    public function getMedicationCodeableConcept() {
        return $this->medicationCodeableConcept;
    }

    /**
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept $medicationCodeableConcept
     * @return $this
     */
    public function setMedicationCodeableConcept($medicationCodeableConcept) {
        $this->medicationCodeableConcept = $medicationCodeableConcept;
        return $this;
    }

    /**
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    public function getMedicationReference() {
        return $this->medicationReference;
    }

    /**
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRReference $medicationReference
     * @return $this
     */
    public function setMedicationReference($medicationReference) {
        $this->medicationReference = $medicationReference;
        return $this;
    }

    /**
     * The person or animal or group receiving the medication.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    public function getSubject() {
        return $this->subject;
    }

    /**
     * The person or animal or group receiving the medication.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRReference $subject
     * @return $this
     */
    public function setSubject($subject) {
        $this->subject = $subject;
        return $this;
    }

    /**
     * The visit, admission or other contact between patient and health care provider the medication administration was performed as part of.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    public function getContext() {
        return $this->context;
    }

    /**
     * The visit, admission or other contact between patient and health care provider the medication administration was performed as part of.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRReference $context
     * @return $this
     */
    public function setContext($context) {
        $this->context = $context;
        return $this;
    }

    /**
     * Additional information (for example, patient height and weight) that supports the administration of the medication.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRReference[]
     */
    public function getSupportingInformation() {
        return $this->supportingInformation;
    }

    /**
     * Additional information (for example, patient height and weight) that supports the administration of the medication.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRReference $supportingInformation
     * @return $this
     */
    public function addSupportingInformation($supportingInformation) {
        $this->supportingInformation[] = $supportingInformation;
        return $this;
    }

    /**
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRDateTime
     */
    public function getEffectiveDateTime() {
        return $this->effectiveDateTime;
    }

    /**
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRDateTime $effectiveDateTime
     * @return $this
     */
    public function setEffectiveDateTime($effectiveDateTime) {
        $this->effectiveDateTime = $effectiveDateTime;
        return $this;
    }

    /**
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRPeriod
     */
    public function getEffectivePeriod() {
        return $this->effectivePeriod;
    }

    /**
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRPeriod $effectivePeriod
     * @return $this
     */
    public function setEffectivePeriod($effectivePeriod) {
        $this->effectivePeriod = $effectivePeriod;
        return $this;
    }

    /**
     * The individual who was responsible for giving the medication to the patient.
     * @return \HL7\FHIR\STU3\FHIRResource\FHIRMedicationAdministration\FHIRMedicationAdministrationPerformer[]
     */
    public function getPerformer() {
        return $this->performer;
    }

    /**
     * The individual who was responsible for giving the medication to the patient.
     * @param \HL7\FHIR\STU3\FHIRResource\FHIRMedicationAdministration\FHIRMedicationAdministrationPerformer $performer
     * @return $this
     */
    public function addPerformer($performer) {
        $this->performer[] = $performer;
        return $this;
    }

    /**
     * Set this to true if the record is saying that the medication was NOT administered.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRBoolean
     */
    public function getNotGiven() {
        return $this->notGiven;
    }

    /**
     * Set this to true if the record is saying that the medication was NOT administered.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRBoolean $notGiven
     * @return $this
     */
    public function setNotGiven($notGiven) {
        $this->notGiven = $notGiven;
        return $this;
    }

    /**
     * A code indicating why the administration was not performed.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    public function getReasonNotGiven() {
        return $this->reasonNotGiven;
    }

    /**
     * A code indicating why the administration was not performed.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept $reasonNotGiven
     * @return $this
     */
    public function addReasonNotGiven($reasonNotGiven) {
        $this->reasonNotGiven[] = $reasonNotGiven;
        return $this;
    }

    /**
     * A code indicating why the medication was given.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    public function getReasonCode() {
        return $this->reasonCode;
    }

    /**
     * A code indicating why the medication was given.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept $reasonCode
     * @return $this
     */
    public function addReasonCode($reasonCode) {
        $this->reasonCode[] = $reasonCode;
        return $this;
    }

    /**
     * Condition or observation that supports why the medication was administered.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRReference[]
     */
    public function getReasonReference() {
        return $this->reasonReference;
    }

    /**
     * Condition or observation that supports why the medication was administered.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRReference $reasonReference
     * @return $this
     */
    public function addReasonReference($reasonReference) {
        $this->reasonReference[] = $reasonReference;
        return $this;
    }

    /**
     * The original request, instruction or authority to perform the administration.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    public function getPrescription() {
        return $this->prescription;
    }

    /**
     * The original request, instruction or authority to perform the administration.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRReference $prescription
     * @return $this
     */
    public function setPrescription($prescription) {
        $this->prescription = $prescription;
        return $this;
    }

    /**
     * The device used in administering the medication to the patient.  For example, a particular infusion pump.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRReference[]
     */
    public function getDevice() {
        return $this->device;
    }

    /**
     * The device used in administering the medication to the patient.  For example, a particular infusion pump.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRReference $device
     * @return $this
     */
    public function addDevice($device) {
        $this->device[] = $device;
        return $this;
    }

    /**
     * Extra information about the medication administration that is not conveyed by the other attributes.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRAnnotation[]
     */
    public function getNote() {
        return $this->note;
    }

    /**
     * Extra information about the medication administration that is not conveyed by the other attributes.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRAnnotation $note
     * @return $this
     */
    public function addNote($note) {
        $this->note[] = $note;
        return $this;
    }

    /**
     * Describes the medication dosage information details e.g. dose, rate, site, route, etc.
     * @return \HL7\FHIR\STU3\FHIRResource\FHIRMedicationAdministration\FHIRMedicationAdministrationDosage
     */
    public function getDosage() {
        return $this->dosage;
    }

    /**
     * Describes the medication dosage information details e.g. dose, rate, site, route, etc.
     * @param \HL7\FHIR\STU3\FHIRResource\FHIRMedicationAdministration\FHIRMedicationAdministrationDosage $dosage
     * @return $this
     */
    public function setDosage($dosage) {
        $this->dosage = $dosage;
        return $this;
    }

    /**
     * A summary of the events of interest that have occurred, such as when the administration was verified.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRReference[]
     */
    public function getEventHistory() {
        return $this->eventHistory;
    }

    /**
     * A summary of the events of interest that have occurred, such as when the administration was verified.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRReference $eventHistory
     * @return $this
     */
    public function addEventHistory($eventHistory) {
        $this->eventHistory[] = $eventHistory;
        return $this;
    }

    /**
     * @return string
     */
    public function get_fhirElementName() {
        return $this->_fhirElementName;
    }

    /**
     * @param mixed $data
     */
    public function __construct($data = []) {
        if (is_array($data)) {
            if (isset($data['identifier'])) {
                if (is_array($data['identifier'])) {
                    foreach($data['identifier'] as $d) {
                        $this->addidentifier($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"identifier" must be array of objects or null, '.gettype($data['identifier']).' seen.'); 
                }
            }
            if (isset($data['definition'])) {
                if (is_array($data['definition'])) {
                    foreach($data['definition'] as $d) {
                        $this->adddefinition($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"definition" must be array of objects or null, '.gettype($data['definition']).' seen.'); 
                }
            }
            if (isset($data['partOf'])) {
                if (is_array($data['partOf'])) {
                    foreach($data['partOf'] as $d) {
                        $this->addpartOf($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"partOf" must be array of objects or null, '.gettype($data['partOf']).' seen.'); 
                }
            }
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
            if (isset($data['category'])) {
                $this->setCategory($data['category']);
            }
            if (isset($data['medicationCodeableConcept'])) {
                $this->setMedicationCodeableConcept($data['medicationCodeableConcept']);
            }
            if (isset($data['medicationReference'])) {
                $this->setMedicationReference($data['medicationReference']);
            }
            if (isset($data['subject'])) {
                $this->setSubject($data['subject']);
            }
            if (isset($data['context'])) {
                $this->setContext($data['context']);
            }
            if (isset($data['supportingInformation'])) {
                if (is_array($data['supportingInformation'])) {
                    foreach($data['supportingInformation'] as $d) {
                        $this->addsupportingInformation($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"supportingInformation" must be array of objects or null, '.gettype($data['supportingInformation']).' seen.'); 
                }
            }
            if (isset($data['effectiveDateTime'])) {
                $this->setEffectiveDateTime($data['effectiveDateTime']);
            }
            if (isset($data['effectivePeriod'])) {
                $this->setEffectivePeriod($data['effectivePeriod']);
            }
            if (isset($data['performer'])) {
                if (is_array($data['performer'])) {
                    foreach($data['performer'] as $d) {
                        $this->addperformer($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"performer" must be array of objects or null, '.gettype($data['performer']).' seen.'); 
                }
            }
            if (isset($data['notGiven'])) {
                $this->setNotGiven($data['notGiven']);
            }
            if (isset($data['reasonNotGiven'])) {
                if (is_array($data['reasonNotGiven'])) {
                    foreach($data['reasonNotGiven'] as $d) {
                        $this->addreasonNotGiven($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"reasonNotGiven" must be array of objects or null, '.gettype($data['reasonNotGiven']).' seen.'); 
                }
            }
            if (isset($data['reasonCode'])) {
                if (is_array($data['reasonCode'])) {
                    foreach($data['reasonCode'] as $d) {
                        $this->addreasonCode($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"reasonCode" must be array of objects or null, '.gettype($data['reasonCode']).' seen.'); 
                }
            }
            if (isset($data['reasonReference'])) {
                if (is_array($data['reasonReference'])) {
                    foreach($data['reasonReference'] as $d) {
                        $this->addreasonReference($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"reasonReference" must be array of objects or null, '.gettype($data['reasonReference']).' seen.'); 
                }
            }
            if (isset($data['prescription'])) {
                $this->setPrescription($data['prescription']);
            }
            if (isset($data['device'])) {
                if (is_array($data['device'])) {
                    foreach($data['device'] as $d) {
                        $this->adddevice($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"device" must be array of objects or null, '.gettype($data['device']).' seen.'); 
                }
            }
            if (isset($data['note'])) {
                if (is_array($data['note'])) {
                    foreach($data['note'] as $d) {
                        $this->addnote($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"note" must be array of objects or null, '.gettype($data['note']).' seen.'); 
                }
            }
            if (isset($data['dosage'])) {
                $this->setDosage($data['dosage']);
            }
            if (isset($data['eventHistory'])) {
                if (is_array($data['eventHistory'])) {
                    foreach($data['eventHistory'] as $d) {
                        $this->addeventHistory($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"eventHistory" must be array of objects or null, '.gettype($data['eventHistory']).' seen.'); 
                }
            }
        } else if (null !== $data) {
            throw new \InvalidArgumentException('$data expected to be array of values, saw "'.gettype($data).'"');
        }
        parent::__construct($data);
    }

    /**
     * @return string
     */
    public function __toString() {
        return $this->get_fhirElementName();
    }

    /**
     * @return array
     */
    public function jsonSerialize() {
        $json = parent::jsonSerialize();
        $json['resourceType'] = $this->_fhirElementName;
        if (0 < count($this->identifier)) {
            $json['identifier'] = [];
            foreach($this->identifier as $identifier) {
                if (null !== $identifier) $json['identifier'][] = $identifier;
            }
        }
        if (0 < count($this->definition)) {
            $json['definition'] = [];
            foreach($this->definition as $definition) {
                if (null !== $definition) $json['definition'][] = $definition;
            }
        }
        if (0 < count($this->partOf)) {
            $json['partOf'] = [];
            foreach($this->partOf as $partOf) {
                if (null !== $partOf) $json['partOf'][] = $partOf;
            }
        }
        if (isset($this->status)) $json['status'] = $this->status;
        if (isset($this->category)) $json['category'] = $this->category;
        if (isset($this->medicationCodeableConcept)) $json['medicationCodeableConcept'] = $this->medicationCodeableConcept;
        if (isset($this->medicationReference)) $json['medicationReference'] = $this->medicationReference;
        if (isset($this->subject)) $json['subject'] = $this->subject;
        if (isset($this->context)) $json['context'] = $this->context;
        if (0 < count($this->supportingInformation)) {
            $json['supportingInformation'] = [];
            foreach($this->supportingInformation as $supportingInformation) {
                if (null !== $supportingInformation) $json['supportingInformation'][] = $supportingInformation;
            }
        }
        if (isset($this->effectiveDateTime)) $json['effectiveDateTime'] = $this->effectiveDateTime;
        if (isset($this->effectivePeriod)) $json['effectivePeriod'] = $this->effectivePeriod;
        if (0 < count($this->performer)) {
            $json['performer'] = [];
            foreach($this->performer as $performer) {
                if (null !== $performer) $json['performer'][] = $performer;
            }
        }
        if (isset($this->notGiven)) $json['notGiven'] = $this->notGiven;
        if (0 < count($this->reasonNotGiven)) {
            $json['reasonNotGiven'] = [];
            foreach($this->reasonNotGiven as $reasonNotGiven) {
                if (null !== $reasonNotGiven) $json['reasonNotGiven'][] = $reasonNotGiven;
            }
        }
        if (0 < count($this->reasonCode)) {
            $json['reasonCode'] = [];
            foreach($this->reasonCode as $reasonCode) {
                if (null !== $reasonCode) $json['reasonCode'][] = $reasonCode;
            }
        }
        if (0 < count($this->reasonReference)) {
            $json['reasonReference'] = [];
            foreach($this->reasonReference as $reasonReference) {
                if (null !== $reasonReference) $json['reasonReference'][] = $reasonReference;
            }
        }
        if (isset($this->prescription)) $json['prescription'] = $this->prescription;
        if (0 < count($this->device)) {
            $json['device'] = [];
            foreach($this->device as $device) {
                if (null !== $device) $json['device'][] = $device;
            }
        }
        if (0 < count($this->note)) {
            $json['note'] = [];
            foreach($this->note as $note) {
                if (null !== $note) $json['note'][] = $note;
            }
        }
        if (isset($this->dosage)) $json['dosage'] = $this->dosage;
        if (0 < count($this->eventHistory)) {
            $json['eventHistory'] = [];
            foreach($this->eventHistory as $eventHistory) {
                if (null !== $eventHistory) $json['eventHistory'][] = $eventHistory;
            }
        }
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null) {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<MedicationAdministration xmlns="http://hl7.org/fhir"></MedicationAdministration>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (0 < count($this->definition)) {
            foreach($this->definition as $definition) {
                $definition->xmlSerialize(true, $sxe->addChild('definition'));
            }
        }
        if (0 < count($this->partOf)) {
            foreach($this->partOf as $partOf) {
                $partOf->xmlSerialize(true, $sxe->addChild('partOf'));
            }
        }
        if (isset($this->status)) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (isset($this->category)) $this->category->xmlSerialize(true, $sxe->addChild('category'));
        if (isset($this->medicationCodeableConcept)) $this->medicationCodeableConcept->xmlSerialize(true, $sxe->addChild('medicationCodeableConcept'));
        if (isset($this->medicationReference)) $this->medicationReference->xmlSerialize(true, $sxe->addChild('medicationReference'));
        if (isset($this->subject)) $this->subject->xmlSerialize(true, $sxe->addChild('subject'));
        if (isset($this->context)) $this->context->xmlSerialize(true, $sxe->addChild('context'));
        if (0 < count($this->supportingInformation)) {
            foreach($this->supportingInformation as $supportingInformation) {
                $supportingInformation->xmlSerialize(true, $sxe->addChild('supportingInformation'));
            }
        }
        if (isset($this->effectiveDateTime)) $this->effectiveDateTime->xmlSerialize(true, $sxe->addChild('effectiveDateTime'));
        if (isset($this->effectivePeriod)) $this->effectivePeriod->xmlSerialize(true, $sxe->addChild('effectivePeriod'));
        if (0 < count($this->performer)) {
            foreach($this->performer as $performer) {
                $performer->xmlSerialize(true, $sxe->addChild('performer'));
            }
        }
        if (isset($this->notGiven)) $this->notGiven->xmlSerialize(true, $sxe->addChild('notGiven'));
        if (0 < count($this->reasonNotGiven)) {
            foreach($this->reasonNotGiven as $reasonNotGiven) {
                $reasonNotGiven->xmlSerialize(true, $sxe->addChild('reasonNotGiven'));
            }
        }
        if (0 < count($this->reasonCode)) {
            foreach($this->reasonCode as $reasonCode) {
                $reasonCode->xmlSerialize(true, $sxe->addChild('reasonCode'));
            }
        }
        if (0 < count($this->reasonReference)) {
            foreach($this->reasonReference as $reasonReference) {
                $reasonReference->xmlSerialize(true, $sxe->addChild('reasonReference'));
            }
        }
        if (isset($this->prescription)) $this->prescription->xmlSerialize(true, $sxe->addChild('prescription'));
        if (0 < count($this->device)) {
            foreach($this->device as $device) {
                $device->xmlSerialize(true, $sxe->addChild('device'));
            }
        }
        if (0 < count($this->note)) {
            foreach($this->note as $note) {
                $note->xmlSerialize(true, $sxe->addChild('note'));
            }
        }
        if (isset($this->dosage)) $this->dosage->xmlSerialize(true, $sxe->addChild('dosage'));
        if (0 < count($this->eventHistory)) {
            foreach($this->eventHistory as $eventHistory) {
                $eventHistory->xmlSerialize(true, $sxe->addChild('eventHistory'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}