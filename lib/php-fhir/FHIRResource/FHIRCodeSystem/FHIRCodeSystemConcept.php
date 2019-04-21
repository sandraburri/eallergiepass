<?php namespace HL7\FHIR\STU3\FHIRResource\FHIRCodeSystem;

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
 * A code system resource specifies a set of codes drawn from one or more code systems.
 */
class FHIRCodeSystemConcept extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * A code - a text symbol - that uniquely identifies the concept within the code system.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRCode
     */
    public $code = null;

    /**
     * A human readable string that is the recommended default way to present this concept to a user.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    public $display = null;

    /**
     * The formal definition of the concept. The code system resource does not make formal definitions required, because of the prevalence of legacy systems. However, they are highly recommended, as without them there is no formal meaning associated with the concept.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    public $definition = null;

    /**
     * Additional representations for the concept - other languages, aliases, specialized purposes, used for particular purposes, etc.
     * @var \HL7\FHIR\STU3\FHIRResource\FHIRCodeSystem\FHIRCodeSystemDesignation[]
     */
    public $designation = [];

    /**
     * A property value for this concept.
     * @var \HL7\FHIR\STU3\FHIRResource\FHIRCodeSystem\FHIRCodeSystemProperty1[]
     */
    public $property = [];

    /**
     * Defines children of a concept to produce a hierarchy of concepts. The nature of the relationships is variable (is-a/contains/categorizes) - see hierarchyMeaning.
     * @var \HL7\FHIR\STU3\FHIRResource\FHIRCodeSystem\FHIRCodeSystemConcept[]
     */
    public $concept = [];

    /**
     * @var string
     */
    private $_fhirElementName = 'CodeSystem.Concept';

    /**
     * A code - a text symbol - that uniquely identifies the concept within the code system.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRCode
     */
    public function getCode() {
        return $this->code;
    }

    /**
     * A code - a text symbol - that uniquely identifies the concept within the code system.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRCode $code
     * @return $this
     */
    public function setCode($code) {
        $this->code = $code;
        return $this;
    }

    /**
     * A human readable string that is the recommended default way to present this concept to a user.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    public function getDisplay() {
        return $this->display;
    }

    /**
     * A human readable string that is the recommended default way to present this concept to a user.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRString $display
     * @return $this
     */
    public function setDisplay($display) {
        $this->display = $display;
        return $this;
    }

    /**
     * The formal definition of the concept. The code system resource does not make formal definitions required, because of the prevalence of legacy systems. However, they are highly recommended, as without them there is no formal meaning associated with the concept.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    public function getDefinition() {
        return $this->definition;
    }

    /**
     * The formal definition of the concept. The code system resource does not make formal definitions required, because of the prevalence of legacy systems. However, they are highly recommended, as without them there is no formal meaning associated with the concept.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRString $definition
     * @return $this
     */
    public function setDefinition($definition) {
        $this->definition = $definition;
        return $this;
    }

    /**
     * Additional representations for the concept - other languages, aliases, specialized purposes, used for particular purposes, etc.
     * @return \HL7\FHIR\STU3\FHIRResource\FHIRCodeSystem\FHIRCodeSystemDesignation[]
     */
    public function getDesignation() {
        return $this->designation;
    }

    /**
     * Additional representations for the concept - other languages, aliases, specialized purposes, used for particular purposes, etc.
     * @param \HL7\FHIR\STU3\FHIRResource\FHIRCodeSystem\FHIRCodeSystemDesignation $designation
     * @return $this
     */
    public function addDesignation($designation) {
        $this->designation[] = $designation;
        return $this;
    }

    /**
     * A property value for this concept.
     * @return \HL7\FHIR\STU3\FHIRResource\FHIRCodeSystem\FHIRCodeSystemProperty1[]
     */
    public function getProperty() {
        return $this->property;
    }

    /**
     * A property value for this concept.
     * @param \HL7\FHIR\STU3\FHIRResource\FHIRCodeSystem\FHIRCodeSystemProperty1 $property
     * @return $this
     */
    public function addProperty($property) {
        $this->property[] = $property;
        return $this;
    }

    /**
     * Defines children of a concept to produce a hierarchy of concepts. The nature of the relationships is variable (is-a/contains/categorizes) - see hierarchyMeaning.
     * @return \HL7\FHIR\STU3\FHIRResource\FHIRCodeSystem\FHIRCodeSystemConcept[]
     */
    public function getConcept() {
        return $this->concept;
    }

    /**
     * Defines children of a concept to produce a hierarchy of concepts. The nature of the relationships is variable (is-a/contains/categorizes) - see hierarchyMeaning.
     * @param \HL7\FHIR\STU3\FHIRResource\FHIRCodeSystem\FHIRCodeSystemConcept $concept
     * @return $this
     */
    public function addConcept($concept) {
        $this->concept[] = $concept;
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
            if (isset($data['code'])) {
                $this->setCode($data['code']);
            }
            if (isset($data['display'])) {
                $this->setDisplay($data['display']);
            }
            if (isset($data['definition'])) {
                $this->setDefinition($data['definition']);
            }
            if (isset($data['designation'])) {
                if (is_array($data['designation'])) {
                    foreach($data['designation'] as $d) {
                        $this->adddesignation($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"designation" must be array of objects or null, '.gettype($data['designation']).' seen.'); 
                }
            }
            if (isset($data['property'])) {
                if (is_array($data['property'])) {
                    foreach($data['property'] as $d) {
                        $this->addproperty($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"property" must be array of objects or null, '.gettype($data['property']).' seen.'); 
                }
            }
            if (isset($data['concept'])) {
                if (is_array($data['concept'])) {
                    foreach($data['concept'] as $d) {
                        $this->addconcept($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"concept" must be array of objects or null, '.gettype($data['concept']).' seen.'); 
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
        if (isset($this->code)) $json['code'] = $this->code;
        if (isset($this->display)) $json['display'] = $this->display;
        if (isset($this->definition)) $json['definition'] = $this->definition;
        if (0 < count($this->designation)) {
            $json['designation'] = [];
            foreach($this->designation as $designation) {
                if (null !== $designation) $json['designation'][] = $designation;
            }
        }
        if (0 < count($this->property)) {
            $json['property'] = [];
            foreach($this->property as $property) {
                if (null !== $property) $json['property'][] = $property;
            }
        }
        if (0 < count($this->concept)) {
            $json['concept'] = [];
            foreach($this->concept as $concept) {
                if (null !== $concept) $json['concept'][] = $concept;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<CodeSystemConcept xmlns="http://hl7.org/fhir"></CodeSystemConcept>');
        parent::xmlSerialize(true, $sxe);
        if (isset($this->code)) $this->code->xmlSerialize(true, $sxe->addChild('code'));
        if (isset($this->display)) $this->display->xmlSerialize(true, $sxe->addChild('display'));
        if (isset($this->definition)) $this->definition->xmlSerialize(true, $sxe->addChild('definition'));
        if (0 < count($this->designation)) {
            foreach($this->designation as $designation) {
                $designation->xmlSerialize(true, $sxe->addChild('designation'));
            }
        }
        if (0 < count($this->property)) {
            foreach($this->property as $property) {
                $property->xmlSerialize(true, $sxe->addChild('property'));
            }
        }
        if (0 < count($this->concept)) {
            foreach($this->concept as $concept) {
                $concept->xmlSerialize(true, $sxe->addChild('concept'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}