<?php namespace HL7\FHIR\STU3\FHIRResource\FHIRStructureMap;

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
 * A Map of relationships between 2 structures that can be used to transform data.
 */
class FHIRStructureMapTarget extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * Type or variable this rule applies to.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRId
     */
    public $context = null;

    /**
     * How to interpret the context.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRStructureMapContextType
     */
    public $contextType = null;

    /**
     * Field to create in the context.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    public $element = null;

    /**
     * Named context for field, if desired, and a field is specified.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRId
     */
    public $variable = null;

    /**
     * If field is a list, how to manage the list.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRStructureMapTargetListMode[]
     */
    public $listMode = [];

    /**
     * Internal rule reference for shared list items.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRId
     */
    public $listRuleId = null;

    /**
     * How the data is copied / created.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRStructureMapTransform
     */
    public $transform = null;

    /**
     * Parameters to the transform.
     * @var \HL7\FHIR\STU3\FHIRResource\FHIRStructureMap\FHIRStructureMapParameter[]
     */
    public $parameter = [];

    /**
     * @var string
     */
    private $_fhirElementName = 'StructureMap.Target';

    /**
     * Type or variable this rule applies to.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRId
     */
    public function getContext() {
        return $this->context;
    }

    /**
     * Type or variable this rule applies to.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRId $context
     * @return $this
     */
    public function setContext($context) {
        $this->context = $context;
        return $this;
    }

    /**
     * How to interpret the context.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRStructureMapContextType
     */
    public function getContextType() {
        return $this->contextType;
    }

    /**
     * How to interpret the context.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRStructureMapContextType $contextType
     * @return $this
     */
    public function setContextType($contextType) {
        $this->contextType = $contextType;
        return $this;
    }

    /**
     * Field to create in the context.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    public function getElement() {
        return $this->element;
    }

    /**
     * Field to create in the context.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRString $element
     * @return $this
     */
    public function setElement($element) {
        $this->element = $element;
        return $this;
    }

    /**
     * Named context for field, if desired, and a field is specified.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRId
     */
    public function getVariable() {
        return $this->variable;
    }

    /**
     * Named context for field, if desired, and a field is specified.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRId $variable
     * @return $this
     */
    public function setVariable($variable) {
        $this->variable = $variable;
        return $this;
    }

    /**
     * If field is a list, how to manage the list.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRStructureMapTargetListMode[]
     */
    public function getListMode() {
        return $this->listMode;
    }

    /**
     * If field is a list, how to manage the list.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRStructureMapTargetListMode $listMode
     * @return $this
     */
    public function addListMode($listMode) {
        $this->listMode[] = $listMode;
        return $this;
    }

    /**
     * Internal rule reference for shared list items.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRId
     */
    public function getListRuleId() {
        return $this->listRuleId;
    }

    /**
     * Internal rule reference for shared list items.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRId $listRuleId
     * @return $this
     */
    public function setListRuleId($listRuleId) {
        $this->listRuleId = $listRuleId;
        return $this;
    }

    /**
     * How the data is copied / created.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRStructureMapTransform
     */
    public function getTransform() {
        return $this->transform;
    }

    /**
     * How the data is copied / created.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRStructureMapTransform $transform
     * @return $this
     */
    public function setTransform($transform) {
        $this->transform = $transform;
        return $this;
    }

    /**
     * Parameters to the transform.
     * @return \HL7\FHIR\STU3\FHIRResource\FHIRStructureMap\FHIRStructureMapParameter[]
     */
    public function getParameter() {
        return $this->parameter;
    }

    /**
     * Parameters to the transform.
     * @param \HL7\FHIR\STU3\FHIRResource\FHIRStructureMap\FHIRStructureMapParameter $parameter
     * @return $this
     */
    public function addParameter($parameter) {
        $this->parameter[] = $parameter;
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
            if (isset($data['context'])) {
                $this->setContext($data['context']);
            }
            if (isset($data['contextType'])) {
                $this->setContextType($data['contextType']);
            }
            if (isset($data['element'])) {
                $this->setElement($data['element']);
            }
            if (isset($data['variable'])) {
                $this->setVariable($data['variable']);
            }
            if (isset($data['listMode'])) {
                if (is_array($data['listMode'])) {
                    foreach($data['listMode'] as $d) {
                        $this->addlistMode($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"listMode" must be array of objects or null, '.gettype($data['listMode']).' seen.'); 
                }
            }
            if (isset($data['listRuleId'])) {
                $this->setListRuleId($data['listRuleId']);
            }
            if (isset($data['transform'])) {
                $this->setTransform($data['transform']);
            }
            if (isset($data['parameter'])) {
                if (is_array($data['parameter'])) {
                    foreach($data['parameter'] as $d) {
                        $this->addparameter($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"parameter" must be array of objects or null, '.gettype($data['parameter']).' seen.'); 
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
        if (isset($this->context)) $json['context'] = $this->context;
        if (isset($this->contextType)) $json['contextType'] = $this->contextType;
        if (isset($this->element)) $json['element'] = $this->element;
        if (isset($this->variable)) $json['variable'] = $this->variable;
        if (0 < count($this->listMode)) {
            $json['listMode'] = [];
            foreach($this->listMode as $listMode) {
                if (null !== $listMode) $json['listMode'][] = $listMode;
            }
        }
        if (isset($this->listRuleId)) $json['listRuleId'] = $this->listRuleId;
        if (isset($this->transform)) $json['transform'] = $this->transform;
        if (0 < count($this->parameter)) {
            $json['parameter'] = [];
            foreach($this->parameter as $parameter) {
                if (null !== $parameter) $json['parameter'][] = $parameter;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<StructureMapTarget xmlns="http://hl7.org/fhir"></StructureMapTarget>');
        parent::xmlSerialize(true, $sxe);
        if (isset($this->context)) $this->context->xmlSerialize(true, $sxe->addChild('context'));
        if (isset($this->contextType)) $this->contextType->xmlSerialize(true, $sxe->addChild('contextType'));
        if (isset($this->element)) $this->element->xmlSerialize(true, $sxe->addChild('element'));
        if (isset($this->variable)) $this->variable->xmlSerialize(true, $sxe->addChild('variable'));
        if (0 < count($this->listMode)) {
            foreach($this->listMode as $listMode) {
                $listMode->xmlSerialize(true, $sxe->addChild('listMode'));
            }
        }
        if (isset($this->listRuleId)) $this->listRuleId->xmlSerialize(true, $sxe->addChild('listRuleId'));
        if (isset($this->transform)) $this->transform->xmlSerialize(true, $sxe->addChild('transform'));
        if (0 < count($this->parameter)) {
            foreach($this->parameter as $parameter) {
                $parameter->xmlSerialize(true, $sxe->addChild('parameter'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}