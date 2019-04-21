<?php namespace HL7\FHIR\STU3\FHIRResource\FHIRConsent;

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
 * A record of a healthcare consumer’s policy choices, which permits or denies identified recipient(s) or recipient role(s) to perform one or more actions within a given policy context, for specific purposes and periods of time.
 */
class FHIRConsentExcept extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * Action  to take - permit or deny - when the exception conditions are met.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRConsentExceptType
     */
    public $type = null;

    /**
     * The timeframe in this exception is valid.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRPeriod
     */
    public $period = null;

    /**
     * Who or what is controlled by this Exception. Use group to identify a set of actors by some property they share (e.g. 'admitting officers').
     * @var \HL7\FHIR\STU3\FHIRResource\FHIRConsent\FHIRConsentActor1[]
     */
    public $actor = [];

    /**
     * Actions controlled by this Exception.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    public $action = [];

    /**
     * A set of security labels that define which resources are controlled by this exception. If more than one label is specified, all resources must have all the specified labels.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRCoding[]
     */
    public $securityLabel = [];

    /**
     * The context of the activities a user is taking - why the user is accessing the data - that are controlled by this exception.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRCoding[]
     */
    public $purpose = [];

    /**
     * The class of information covered by this exception. The type can be a FHIR resource type, a profile on a type, or a CDA document, or some other type that indicates what sort of information the consent relates to.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRCoding[]
     */
    public $class = [];

    /**
     * If this code is found in an instance, then the exception applies.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRCoding[]
     */
    public $code = [];

    /**
     * Clinical or Operational Relevant period of time that bounds the data controlled by this exception.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRPeriod
     */
    public $dataPeriod = null;

    /**
     * The resources controlled by this exception, if specific resources are referenced.
     * @var \HL7\FHIR\STU3\FHIRResource\FHIRConsent\FHIRConsentData1[]
     */
    public $data = [];

    /**
     * @var string
     */
    private $_fhirElementName = 'Consent.Except';

    /**
     * Action  to take - permit or deny - when the exception conditions are met.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRConsentExceptType
     */
    public function getType() {
        return $this->type;
    }

    /**
     * Action  to take - permit or deny - when the exception conditions are met.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRConsentExceptType $type
     * @return $this
     */
    public function setType($type) {
        $this->type = $type;
        return $this;
    }

    /**
     * The timeframe in this exception is valid.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRPeriod
     */
    public function getPeriod() {
        return $this->period;
    }

    /**
     * The timeframe in this exception is valid.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRPeriod $period
     * @return $this
     */
    public function setPeriod($period) {
        $this->period = $period;
        return $this;
    }

    /**
     * Who or what is controlled by this Exception. Use group to identify a set of actors by some property they share (e.g. 'admitting officers').
     * @return \HL7\FHIR\STU3\FHIRResource\FHIRConsent\FHIRConsentActor1[]
     */
    public function getActor() {
        return $this->actor;
    }

    /**
     * Who or what is controlled by this Exception. Use group to identify a set of actors by some property they share (e.g. 'admitting officers').
     * @param \HL7\FHIR\STU3\FHIRResource\FHIRConsent\FHIRConsentActor1 $actor
     * @return $this
     */
    public function addActor($actor) {
        $this->actor[] = $actor;
        return $this;
    }

    /**
     * Actions controlled by this Exception.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    public function getAction() {
        return $this->action;
    }

    /**
     * Actions controlled by this Exception.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept $action
     * @return $this
     */
    public function addAction($action) {
        $this->action[] = $action;
        return $this;
    }

    /**
     * A set of security labels that define which resources are controlled by this exception. If more than one label is specified, all resources must have all the specified labels.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRCoding[]
     */
    public function getSecurityLabel() {
        return $this->securityLabel;
    }

    /**
     * A set of security labels that define which resources are controlled by this exception. If more than one label is specified, all resources must have all the specified labels.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRCoding $securityLabel
     * @return $this
     */
    public function addSecurityLabel($securityLabel) {
        $this->securityLabel[] = $securityLabel;
        return $this;
    }

    /**
     * The context of the activities a user is taking - why the user is accessing the data - that are controlled by this exception.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRCoding[]
     */
    public function getPurpose() {
        return $this->purpose;
    }

    /**
     * The context of the activities a user is taking - why the user is accessing the data - that are controlled by this exception.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRCoding $purpose
     * @return $this
     */
    public function addPurpose($purpose) {
        $this->purpose[] = $purpose;
        return $this;
    }

    /**
     * The class of information covered by this exception. The type can be a FHIR resource type, a profile on a type, or a CDA document, or some other type that indicates what sort of information the consent relates to.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRCoding[]
     */
    public function getClass() {
        return $this->class;
    }

    /**
     * The class of information covered by this exception. The type can be a FHIR resource type, a profile on a type, or a CDA document, or some other type that indicates what sort of information the consent relates to.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRCoding $class
     * @return $this
     */
    public function addClass($class) {
        $this->class[] = $class;
        return $this;
    }

    /**
     * If this code is found in an instance, then the exception applies.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRCoding[]
     */
    public function getCode() {
        return $this->code;
    }

    /**
     * If this code is found in an instance, then the exception applies.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRCoding $code
     * @return $this
     */
    public function addCode($code) {
        $this->code[] = $code;
        return $this;
    }

    /**
     * Clinical or Operational Relevant period of time that bounds the data controlled by this exception.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRPeriod
     */
    public function getDataPeriod() {
        return $this->dataPeriod;
    }

    /**
     * Clinical or Operational Relevant period of time that bounds the data controlled by this exception.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRPeriod $dataPeriod
     * @return $this
     */
    public function setDataPeriod($dataPeriod) {
        $this->dataPeriod = $dataPeriod;
        return $this;
    }

    /**
     * The resources controlled by this exception, if specific resources are referenced.
     * @return \HL7\FHIR\STU3\FHIRResource\FHIRConsent\FHIRConsentData1[]
     */
    public function getData() {
        return $this->data;
    }

    /**
     * The resources controlled by this exception, if specific resources are referenced.
     * @param \HL7\FHIR\STU3\FHIRResource\FHIRConsent\FHIRConsentData1 $data
     * @return $this
     */
    public function addData($data) {
        $this->data[] = $data;
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
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
            if (isset($data['period'])) {
                $this->setPeriod($data['period']);
            }
            if (isset($data['actor'])) {
                if (is_array($data['actor'])) {
                    foreach($data['actor'] as $d) {
                        $this->addactor($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"actor" must be array of objects or null, '.gettype($data['actor']).' seen.'); 
                }
            }
            if (isset($data['action'])) {
                if (is_array($data['action'])) {
                    foreach($data['action'] as $d) {
                        $this->addaction($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"action" must be array of objects or null, '.gettype($data['action']).' seen.'); 
                }
            }
            if (isset($data['securityLabel'])) {
                if (is_array($data['securityLabel'])) {
                    foreach($data['securityLabel'] as $d) {
                        $this->addsecurityLabel($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"securityLabel" must be array of objects or null, '.gettype($data['securityLabel']).' seen.'); 
                }
            }
            if (isset($data['purpose'])) {
                if (is_array($data['purpose'])) {
                    foreach($data['purpose'] as $d) {
                        $this->addpurpose($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"purpose" must be array of objects or null, '.gettype($data['purpose']).' seen.'); 
                }
            }
            if (isset($data['class'])) {
                if (is_array($data['class'])) {
                    foreach($data['class'] as $d) {
                        $this->addclass($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"class" must be array of objects or null, '.gettype($data['class']).' seen.'); 
                }
            }
            if (isset($data['code'])) {
                if (is_array($data['code'])) {
                    foreach($data['code'] as $d) {
                        $this->addcode($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"code" must be array of objects or null, '.gettype($data['code']).' seen.'); 
                }
            }
            if (isset($data['dataPeriod'])) {
                $this->setDataPeriod($data['dataPeriod']);
            }
            if (isset($data['data'])) {
                if (is_array($data['data'])) {
                    foreach($data['data'] as $d) {
                        $this->adddata($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"data" must be array of objects or null, '.gettype($data['data']).' seen.'); 
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
        if (isset($this->type)) $json['type'] = $this->type;
        if (isset($this->period)) $json['period'] = $this->period;
        if (0 < count($this->actor)) {
            $json['actor'] = [];
            foreach($this->actor as $actor) {
                if (null !== $actor) $json['actor'][] = $actor;
            }
        }
        if (0 < count($this->action)) {
            $json['action'] = [];
            foreach($this->action as $action) {
                if (null !== $action) $json['action'][] = $action;
            }
        }
        if (0 < count($this->securityLabel)) {
            $json['securityLabel'] = [];
            foreach($this->securityLabel as $securityLabel) {
                if (null !== $securityLabel) $json['securityLabel'][] = $securityLabel;
            }
        }
        if (0 < count($this->purpose)) {
            $json['purpose'] = [];
            foreach($this->purpose as $purpose) {
                if (null !== $purpose) $json['purpose'][] = $purpose;
            }
        }
        if (0 < count($this->class)) {
            $json['class'] = [];
            foreach($this->class as $class) {
                if (null !== $class) $json['class'][] = $class;
            }
        }
        if (0 < count($this->code)) {
            $json['code'] = [];
            foreach($this->code as $code) {
                if (null !== $code) $json['code'][] = $code;
            }
        }
        if (isset($this->dataPeriod)) $json['dataPeriod'] = $this->dataPeriod;
        if (0 < count($this->data)) {
            $json['data'] = [];
            foreach($this->data as $data) {
                if (null !== $data) $json['data'][] = $data;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ConsentExcept xmlns="http://hl7.org/fhir"></ConsentExcept>');
        parent::xmlSerialize(true, $sxe);
        if (isset($this->type)) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (isset($this->period)) $this->period->xmlSerialize(true, $sxe->addChild('period'));
        if (0 < count($this->actor)) {
            foreach($this->actor as $actor) {
                $actor->xmlSerialize(true, $sxe->addChild('actor'));
            }
        }
        if (0 < count($this->action)) {
            foreach($this->action as $action) {
                $action->xmlSerialize(true, $sxe->addChild('action'));
            }
        }
        if (0 < count($this->securityLabel)) {
            foreach($this->securityLabel as $securityLabel) {
                $securityLabel->xmlSerialize(true, $sxe->addChild('securityLabel'));
            }
        }
        if (0 < count($this->purpose)) {
            foreach($this->purpose as $purpose) {
                $purpose->xmlSerialize(true, $sxe->addChild('purpose'));
            }
        }
        if (0 < count($this->class)) {
            foreach($this->class as $class) {
                $class->xmlSerialize(true, $sxe->addChild('class'));
            }
        }
        if (0 < count($this->code)) {
            foreach($this->code as $code) {
                $code->xmlSerialize(true, $sxe->addChild('code'));
            }
        }
        if (isset($this->dataPeriod)) $this->dataPeriod->xmlSerialize(true, $sxe->addChild('dataPeriod'));
        if (0 < count($this->data)) {
            foreach($this->data as $data) {
                $data->xmlSerialize(true, $sxe->addChild('data'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}