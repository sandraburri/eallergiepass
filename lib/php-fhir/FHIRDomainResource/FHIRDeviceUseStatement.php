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
 * A record of a device being used by a patient where the record is the result of a report from the patient or another clinician.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRDeviceUseStatement extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * An external identifier for this statement such as an IRI.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = [];

    /**
     * A code representing the patient or other source's judgment about the state of the device used that this statement is about.  Generally this will be active or completed.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRDeviceUseStatementStatus
     */
    public $status = null;

    /**
     * The patient who used the device.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    public $subject = null;

    /**
     * The time period over which the device was used.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRPeriod
     */
    public $whenUsed = null;

    /**
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRTiming
     */
    public $timingTiming = null;

    /**
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRPeriod
     */
    public $timingPeriod = null;

    /**
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRDateTime
     */
    public $timingDateTime = null;

    /**
     * The time at which the statement was made/recorded.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRDateTime
     */
    public $recordedOn = null;

    /**
     * Who reported the device was being used by the patient.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    public $source = null;

    /**
     * The details of the device used.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    public $device = null;

    /**
     * Reason or justification for the use of the device.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    public $indication = [];

    /**
     * Indicates the site on the subject's body where the device was used ( i.e. the target site).
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept
     */
    public $bodySite = null;

    /**
     * Details about the device statement that were not represented at all or sufficiently in one of the attributes provided in a class. These may include for example a comment, an instruction, or a note associated with the statement.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRAnnotation[]
     */
    public $note = [];

    /**
     * @var string
     */
    private $_fhirElementName = 'DeviceUseStatement';

    /**
     * An external identifier for this statement such as an IRI.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier() {
        return $this->identifier;
    }

    /**
     * An external identifier for this statement such as an IRI.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier) {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * A code representing the patient or other source's judgment about the state of the device used that this statement is about.  Generally this will be active or completed.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRDeviceUseStatementStatus
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * A code representing the patient or other source's judgment about the state of the device used that this statement is about.  Generally this will be active or completed.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRDeviceUseStatementStatus $status
     * @return $this
     */
    public function setStatus($status) {
        $this->status = $status;
        return $this;
    }

    /**
     * The patient who used the device.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    public function getSubject() {
        return $this->subject;
    }

    /**
     * The patient who used the device.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRReference $subject
     * @return $this
     */
    public function setSubject($subject) {
        $this->subject = $subject;
        return $this;
    }

    /**
     * The time period over which the device was used.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRPeriod
     */
    public function getWhenUsed() {
        return $this->whenUsed;
    }

    /**
     * The time period over which the device was used.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRPeriod $whenUsed
     * @return $this
     */
    public function setWhenUsed($whenUsed) {
        $this->whenUsed = $whenUsed;
        return $this;
    }

    /**
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRTiming
     */
    public function getTimingTiming() {
        return $this->timingTiming;
    }

    /**
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRTiming $timingTiming
     * @return $this
     */
    public function setTimingTiming($timingTiming) {
        $this->timingTiming = $timingTiming;
        return $this;
    }

    /**
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRPeriod
     */
    public function getTimingPeriod() {
        return $this->timingPeriod;
    }

    /**
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRPeriod $timingPeriod
     * @return $this
     */
    public function setTimingPeriod($timingPeriod) {
        $this->timingPeriod = $timingPeriod;
        return $this;
    }

    /**
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRDateTime
     */
    public function getTimingDateTime() {
        return $this->timingDateTime;
    }

    /**
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRDateTime $timingDateTime
     * @return $this
     */
    public function setTimingDateTime($timingDateTime) {
        $this->timingDateTime = $timingDateTime;
        return $this;
    }

    /**
     * The time at which the statement was made/recorded.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRDateTime
     */
    public function getRecordedOn() {
        return $this->recordedOn;
    }

    /**
     * The time at which the statement was made/recorded.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRDateTime $recordedOn
     * @return $this
     */
    public function setRecordedOn($recordedOn) {
        $this->recordedOn = $recordedOn;
        return $this;
    }

    /**
     * Who reported the device was being used by the patient.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    public function getSource() {
        return $this->source;
    }

    /**
     * Who reported the device was being used by the patient.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRReference $source
     * @return $this
     */
    public function setSource($source) {
        $this->source = $source;
        return $this;
    }

    /**
     * The details of the device used.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    public function getDevice() {
        return $this->device;
    }

    /**
     * The details of the device used.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRReference $device
     * @return $this
     */
    public function setDevice($device) {
        $this->device = $device;
        return $this;
    }

    /**
     * Reason or justification for the use of the device.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    public function getIndication() {
        return $this->indication;
    }

    /**
     * Reason or justification for the use of the device.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept $indication
     * @return $this
     */
    public function addIndication($indication) {
        $this->indication[] = $indication;
        return $this;
    }

    /**
     * Indicates the site on the subject's body where the device was used ( i.e. the target site).
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept
     */
    public function getBodySite() {
        return $this->bodySite;
    }

    /**
     * Indicates the site on the subject's body where the device was used ( i.e. the target site).
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept $bodySite
     * @return $this
     */
    public function setBodySite($bodySite) {
        $this->bodySite = $bodySite;
        return $this;
    }

    /**
     * Details about the device statement that were not represented at all or sufficiently in one of the attributes provided in a class. These may include for example a comment, an instruction, or a note associated with the statement.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRAnnotation[]
     */
    public function getNote() {
        return $this->note;
    }

    /**
     * Details about the device statement that were not represented at all or sufficiently in one of the attributes provided in a class. These may include for example a comment, an instruction, or a note associated with the statement.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRAnnotation $note
     * @return $this
     */
    public function addNote($note) {
        $this->note[] = $note;
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
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
            if (isset($data['subject'])) {
                $this->setSubject($data['subject']);
            }
            if (isset($data['whenUsed'])) {
                $this->setWhenUsed($data['whenUsed']);
            }
            if (isset($data['timingTiming'])) {
                $this->setTimingTiming($data['timingTiming']);
            }
            if (isset($data['timingPeriod'])) {
                $this->setTimingPeriod($data['timingPeriod']);
            }
            if (isset($data['timingDateTime'])) {
                $this->setTimingDateTime($data['timingDateTime']);
            }
            if (isset($data['recordedOn'])) {
                $this->setRecordedOn($data['recordedOn']);
            }
            if (isset($data['source'])) {
                $this->setSource($data['source']);
            }
            if (isset($data['device'])) {
                $this->setDevice($data['device']);
            }
            if (isset($data['indication'])) {
                if (is_array($data['indication'])) {
                    foreach($data['indication'] as $d) {
                        $this->addindication($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"indication" must be array of objects or null, '.gettype($data['indication']).' seen.'); 
                }
            }
            if (isset($data['bodySite'])) {
                $this->setBodySite($data['bodySite']);
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
        if (isset($this->status)) $json['status'] = $this->status;
        if (isset($this->subject)) $json['subject'] = $this->subject;
        if (isset($this->whenUsed)) $json['whenUsed'] = $this->whenUsed;
        if (isset($this->timingTiming)) $json['timingTiming'] = $this->timingTiming;
        if (isset($this->timingPeriod)) $json['timingPeriod'] = $this->timingPeriod;
        if (isset($this->timingDateTime)) $json['timingDateTime'] = $this->timingDateTime;
        if (isset($this->recordedOn)) $json['recordedOn'] = $this->recordedOn;
        if (isset($this->source)) $json['source'] = $this->source;
        if (isset($this->device)) $json['device'] = $this->device;
        if (0 < count($this->indication)) {
            $json['indication'] = [];
            foreach($this->indication as $indication) {
                if (null !== $indication) $json['indication'][] = $indication;
            }
        }
        if (isset($this->bodySite)) $json['bodySite'] = $this->bodySite;
        if (0 < count($this->note)) {
            $json['note'] = [];
            foreach($this->note as $note) {
                if (null !== $note) $json['note'][] = $note;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<DeviceUseStatement xmlns="http://hl7.org/fhir"></DeviceUseStatement>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (isset($this->status)) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (isset($this->subject)) $this->subject->xmlSerialize(true, $sxe->addChild('subject'));
        if (isset($this->whenUsed)) $this->whenUsed->xmlSerialize(true, $sxe->addChild('whenUsed'));
        if (isset($this->timingTiming)) $this->timingTiming->xmlSerialize(true, $sxe->addChild('timingTiming'));
        if (isset($this->timingPeriod)) $this->timingPeriod->xmlSerialize(true, $sxe->addChild('timingPeriod'));
        if (isset($this->timingDateTime)) $this->timingDateTime->xmlSerialize(true, $sxe->addChild('timingDateTime'));
        if (isset($this->recordedOn)) $this->recordedOn->xmlSerialize(true, $sxe->addChild('recordedOn'));
        if (isset($this->source)) $this->source->xmlSerialize(true, $sxe->addChild('source'));
        if (isset($this->device)) $this->device->xmlSerialize(true, $sxe->addChild('device'));
        if (0 < count($this->indication)) {
            foreach($this->indication as $indication) {
                $indication->xmlSerialize(true, $sxe->addChild('indication'));
            }
        }
        if (isset($this->bodySite)) $this->bodySite->xmlSerialize(true, $sxe->addChild('bodySite'));
        if (0 < count($this->note)) {
            foreach($this->note as $note) {
                $note->xmlSerialize(true, $sxe->addChild('note'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}