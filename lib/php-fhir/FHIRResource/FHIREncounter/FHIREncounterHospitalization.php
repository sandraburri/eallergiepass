<?php namespace HL7\FHIR\STU3\FHIRResource\FHIREncounter;

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

use HL7\FHIR\STU3\FHIRElement\FHIRBackboneElement;

/**
 * An interaction between a patient and healthcare provider(s) for the purpose of providing healthcare service(s) or assessing the health status of a patient.
 */
class FHIREncounterHospitalization extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * Pre-admission identifier.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRIdentifier
     */
    public $preAdmissionIdentifier = null;

    /**
     * The location from which the patient came before admission.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    public $origin = null;

    /**
     * From where patient was admitted (physician referral, transfer).
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept
     */
    public $admitSource = null;

    /**
     * Whether this hospitalization is a readmission and why if known.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept
     */
    public $reAdmission = null;

    /**
     * Diet preferences reported by the patient.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    public $dietPreference = [];

    /**
     * Special courtesies (VIP, board member).
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    public $specialCourtesy = [];

    /**
     * Any special requests that have been made for this hospitalization encounter, such as the provision of specific equipment or other things.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    public $specialArrangement = [];

    /**
     * Location to which the patient is discharged.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    public $destination = null;

    /**
     * Category or kind of location after discharge.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept
     */
    public $dischargeDisposition = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'Encounter.Hospitalization';

    /**
     * Pre-admission identifier.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRIdentifier
     */
    public function getPreAdmissionIdentifier() {
        return $this->preAdmissionIdentifier;
    }

    /**
     * Pre-admission identifier.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRIdentifier $preAdmissionIdentifier
     * @return $this
     */
    public function setPreAdmissionIdentifier($preAdmissionIdentifier) {
        $this->preAdmissionIdentifier = $preAdmissionIdentifier;
        return $this;
    }

    /**
     * The location from which the patient came before admission.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    public function getOrigin() {
        return $this->origin;
    }

    /**
     * The location from which the patient came before admission.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRReference $origin
     * @return $this
     */
    public function setOrigin($origin) {
        $this->origin = $origin;
        return $this;
    }

    /**
     * From where patient was admitted (physician referral, transfer).
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept
     */
    public function getAdmitSource() {
        return $this->admitSource;
    }

    /**
     * From where patient was admitted (physician referral, transfer).
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept $admitSource
     * @return $this
     */
    public function setAdmitSource($admitSource) {
        $this->admitSource = $admitSource;
        return $this;
    }

    /**
     * Whether this hospitalization is a readmission and why if known.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept
     */
    public function getReAdmission() {
        return $this->reAdmission;
    }

    /**
     * Whether this hospitalization is a readmission and why if known.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept $reAdmission
     * @return $this
     */
    public function setReAdmission($reAdmission) {
        $this->reAdmission = $reAdmission;
        return $this;
    }

    /**
     * Diet preferences reported by the patient.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    public function getDietPreference() {
        return $this->dietPreference;
    }

    /**
     * Diet preferences reported by the patient.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept $dietPreference
     * @return $this
     */
    public function addDietPreference($dietPreference) {
        $this->dietPreference[] = $dietPreference;
        return $this;
    }

    /**
     * Special courtesies (VIP, board member).
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    public function getSpecialCourtesy() {
        return $this->specialCourtesy;
    }

    /**
     * Special courtesies (VIP, board member).
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept $specialCourtesy
     * @return $this
     */
    public function addSpecialCourtesy($specialCourtesy) {
        $this->specialCourtesy[] = $specialCourtesy;
        return $this;
    }

    /**
     * Any special requests that have been made for this hospitalization encounter, such as the provision of specific equipment or other things.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    public function getSpecialArrangement() {
        return $this->specialArrangement;
    }

    /**
     * Any special requests that have been made for this hospitalization encounter, such as the provision of specific equipment or other things.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept $specialArrangement
     * @return $this
     */
    public function addSpecialArrangement($specialArrangement) {
        $this->specialArrangement[] = $specialArrangement;
        return $this;
    }

    /**
     * Location to which the patient is discharged.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    public function getDestination() {
        return $this->destination;
    }

    /**
     * Location to which the patient is discharged.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRReference $destination
     * @return $this
     */
    public function setDestination($destination) {
        $this->destination = $destination;
        return $this;
    }

    /**
     * Category or kind of location after discharge.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept
     */
    public function getDischargeDisposition() {
        return $this->dischargeDisposition;
    }

    /**
     * Category or kind of location after discharge.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept $dischargeDisposition
     * @return $this
     */
    public function setDischargeDisposition($dischargeDisposition) {
        $this->dischargeDisposition = $dischargeDisposition;
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
            if (isset($data['preAdmissionIdentifier'])) {
                $this->setPreAdmissionIdentifier($data['preAdmissionIdentifier']);
            }
            if (isset($data['origin'])) {
                $this->setOrigin($data['origin']);
            }
            if (isset($data['admitSource'])) {
                $this->setAdmitSource($data['admitSource']);
            }
            if (isset($data['reAdmission'])) {
                $this->setReAdmission($data['reAdmission']);
            }
            if (isset($data['dietPreference'])) {
                if (is_array($data['dietPreference'])) {
                    foreach($data['dietPreference'] as $d) {
                        $this->adddietPreference($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"dietPreference" must be array of objects or null, '.gettype($data['dietPreference']).' seen.'); 
                }
            }
            if (isset($data['specialCourtesy'])) {
                if (is_array($data['specialCourtesy'])) {
                    foreach($data['specialCourtesy'] as $d) {
                        $this->addspecialCourtesy($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"specialCourtesy" must be array of objects or null, '.gettype($data['specialCourtesy']).' seen.'); 
                }
            }
            if (isset($data['specialArrangement'])) {
                if (is_array($data['specialArrangement'])) {
                    foreach($data['specialArrangement'] as $d) {
                        $this->addspecialArrangement($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"specialArrangement" must be array of objects or null, '.gettype($data['specialArrangement']).' seen.'); 
                }
            }
            if (isset($data['destination'])) {
                $this->setDestination($data['destination']);
            }
            if (isset($data['dischargeDisposition'])) {
                $this->setDischargeDisposition($data['dischargeDisposition']);
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
        if (isset($this->preAdmissionIdentifier)) $json['preAdmissionIdentifier'] = $this->preAdmissionIdentifier;
        if (isset($this->origin)) $json['origin'] = $this->origin;
        if (isset($this->admitSource)) $json['admitSource'] = $this->admitSource;
        if (isset($this->reAdmission)) $json['reAdmission'] = $this->reAdmission;
        if (0 < count($this->dietPreference)) {
            $json['dietPreference'] = [];
            foreach($this->dietPreference as $dietPreference) {
                if (null !== $dietPreference) $json['dietPreference'][] = $dietPreference;
            }
        }
        if (0 < count($this->specialCourtesy)) {
            $json['specialCourtesy'] = [];
            foreach($this->specialCourtesy as $specialCourtesy) {
                if (null !== $specialCourtesy) $json['specialCourtesy'][] = $specialCourtesy;
            }
        }
        if (0 < count($this->specialArrangement)) {
            $json['specialArrangement'] = [];
            foreach($this->specialArrangement as $specialArrangement) {
                if (null !== $specialArrangement) $json['specialArrangement'][] = $specialArrangement;
            }
        }
        if (isset($this->destination)) $json['destination'] = $this->destination;
        if (isset($this->dischargeDisposition)) $json['dischargeDisposition'] = $this->dischargeDisposition;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null) {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<EncounterHospitalization xmlns="http://hl7.org/fhir"></EncounterHospitalization>');
        parent::xmlSerialize(true, $sxe);
        if (isset($this->preAdmissionIdentifier)) $this->preAdmissionIdentifier->xmlSerialize(true, $sxe->addChild('preAdmissionIdentifier'));
        if (isset($this->origin)) $this->origin->xmlSerialize(true, $sxe->addChild('origin'));
        if (isset($this->admitSource)) $this->admitSource->xmlSerialize(true, $sxe->addChild('admitSource'));
        if (isset($this->reAdmission)) $this->reAdmission->xmlSerialize(true, $sxe->addChild('reAdmission'));
        if (0 < count($this->dietPreference)) {
            foreach($this->dietPreference as $dietPreference) {
                $dietPreference->xmlSerialize(true, $sxe->addChild('dietPreference'));
            }
        }
        if (0 < count($this->specialCourtesy)) {
            foreach($this->specialCourtesy as $specialCourtesy) {
                $specialCourtesy->xmlSerialize(true, $sxe->addChild('specialCourtesy'));
            }
        }
        if (0 < count($this->specialArrangement)) {
            foreach($this->specialArrangement as $specialArrangement) {
                $specialArrangement->xmlSerialize(true, $sxe->addChild('specialArrangement'));
            }
        }
        if (isset($this->destination)) $this->destination->xmlSerialize(true, $sxe->addChild('destination'));
        if (isset($this->dischargeDisposition)) $this->dischargeDisposition->xmlSerialize(true, $sxe->addChild('dischargeDisposition'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}