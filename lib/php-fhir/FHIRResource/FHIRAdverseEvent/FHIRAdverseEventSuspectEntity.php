<?php namespace HL7\FHIR\STU3\FHIRResource\FHIRAdverseEvent;

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
 * Actual or  potential/avoided event causing unintended physical injury resulting from or contributed to by medical care, a research study or other healthcare setting factors that requires additional monitoring, treatment, or hospitalization, or that results in death.
 */
class FHIRAdverseEventSuspectEntity extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * Identifies the actual instance of what caused the adverse event.  May be a substance, medication, medication administration, medication statement or a device.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    public $instance = null;

    /**
     * causality1 | causality2.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRAdverseEventCausality
     */
    public $causality = null;

    /**
     * assess1 | assess2.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept
     */
    public $causalityAssessment = null;

    /**
     * AdverseEvent.suspectEntity.causalityProductRelatedness.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    public $causalityProductRelatedness = null;

    /**
     * method1 | method2.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept
     */
    public $causalityMethod = null;

    /**
     * AdverseEvent.suspectEntity.causalityAuthor.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    public $causalityAuthor = null;

    /**
     * result1 | result2.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept
     */
    public $causalityResult = null;

    /**
     * @var string
     */
    private $_fhirElementName = 'AdverseEvent.SuspectEntity';

    /**
     * Identifies the actual instance of what caused the adverse event.  May be a substance, medication, medication administration, medication statement or a device.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    public function getInstance() {
        return $this->instance;
    }

    /**
     * Identifies the actual instance of what caused the adverse event.  May be a substance, medication, medication administration, medication statement or a device.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRReference $instance
     * @return $this
     */
    public function setInstance($instance) {
        $this->instance = $instance;
        return $this;
    }

    /**
     * causality1 | causality2.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRAdverseEventCausality
     */
    public function getCausality() {
        return $this->causality;
    }

    /**
     * causality1 | causality2.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRAdverseEventCausality $causality
     * @return $this
     */
    public function setCausality($causality) {
        $this->causality = $causality;
        return $this;
    }

    /**
     * assess1 | assess2.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept
     */
    public function getCausalityAssessment() {
        return $this->causalityAssessment;
    }

    /**
     * assess1 | assess2.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept $causalityAssessment
     * @return $this
     */
    public function setCausalityAssessment($causalityAssessment) {
        $this->causalityAssessment = $causalityAssessment;
        return $this;
    }

    /**
     * AdverseEvent.suspectEntity.causalityProductRelatedness.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    public function getCausalityProductRelatedness() {
        return $this->causalityProductRelatedness;
    }

    /**
     * AdverseEvent.suspectEntity.causalityProductRelatedness.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRString $causalityProductRelatedness
     * @return $this
     */
    public function setCausalityProductRelatedness($causalityProductRelatedness) {
        $this->causalityProductRelatedness = $causalityProductRelatedness;
        return $this;
    }

    /**
     * method1 | method2.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept
     */
    public function getCausalityMethod() {
        return $this->causalityMethod;
    }

    /**
     * method1 | method2.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept $causalityMethod
     * @return $this
     */
    public function setCausalityMethod($causalityMethod) {
        $this->causalityMethod = $causalityMethod;
        return $this;
    }

    /**
     * AdverseEvent.suspectEntity.causalityAuthor.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    public function getCausalityAuthor() {
        return $this->causalityAuthor;
    }

    /**
     * AdverseEvent.suspectEntity.causalityAuthor.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRReference $causalityAuthor
     * @return $this
     */
    public function setCausalityAuthor($causalityAuthor) {
        $this->causalityAuthor = $causalityAuthor;
        return $this;
    }

    /**
     * result1 | result2.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept
     */
    public function getCausalityResult() {
        return $this->causalityResult;
    }

    /**
     * result1 | result2.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept $causalityResult
     * @return $this
     */
    public function setCausalityResult($causalityResult) {
        $this->causalityResult = $causalityResult;
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
            if (isset($data['instance'])) {
                $this->setInstance($data['instance']);
            }
            if (isset($data['causality'])) {
                $this->setCausality($data['causality']);
            }
            if (isset($data['causalityAssessment'])) {
                $this->setCausalityAssessment($data['causalityAssessment']);
            }
            if (isset($data['causalityProductRelatedness'])) {
                $this->setCausalityProductRelatedness($data['causalityProductRelatedness']);
            }
            if (isset($data['causalityMethod'])) {
                $this->setCausalityMethod($data['causalityMethod']);
            }
            if (isset($data['causalityAuthor'])) {
                $this->setCausalityAuthor($data['causalityAuthor']);
            }
            if (isset($data['causalityResult'])) {
                $this->setCausalityResult($data['causalityResult']);
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
        if (isset($this->instance)) $json['instance'] = $this->instance;
        if (isset($this->causality)) $json['causality'] = $this->causality;
        if (isset($this->causalityAssessment)) $json['causalityAssessment'] = $this->causalityAssessment;
        if (isset($this->causalityProductRelatedness)) $json['causalityProductRelatedness'] = $this->causalityProductRelatedness;
        if (isset($this->causalityMethod)) $json['causalityMethod'] = $this->causalityMethod;
        if (isset($this->causalityAuthor)) $json['causalityAuthor'] = $this->causalityAuthor;
        if (isset($this->causalityResult)) $json['causalityResult'] = $this->causalityResult;
        return $json;
    }

    /**
     * @param boolean $returnSXE
     * @param \SimpleXMLElement $sxe
     * @return string|\SimpleXMLElement
     */
    public function xmlSerialize($returnSXE = false, $sxe = null) {
        if (null === $sxe) $sxe = new \SimpleXMLElement('<AdverseEventSuspectEntity xmlns="http://hl7.org/fhir"></AdverseEventSuspectEntity>');
        parent::xmlSerialize(true, $sxe);
        if (isset($this->instance)) $this->instance->xmlSerialize(true, $sxe->addChild('instance'));
        if (isset($this->causality)) $this->causality->xmlSerialize(true, $sxe->addChild('causality'));
        if (isset($this->causalityAssessment)) $this->causalityAssessment->xmlSerialize(true, $sxe->addChild('causalityAssessment'));
        if (isset($this->causalityProductRelatedness)) $this->causalityProductRelatedness->xmlSerialize(true, $sxe->addChild('causalityProductRelatedness'));
        if (isset($this->causalityMethod)) $this->causalityMethod->xmlSerialize(true, $sxe->addChild('causalityMethod'));
        if (isset($this->causalityAuthor)) $this->causalityAuthor->xmlSerialize(true, $sxe->addChild('causalityAuthor'));
        if (isset($this->causalityResult)) $this->causalityResult->xmlSerialize(true, $sxe->addChild('causalityResult'));
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}