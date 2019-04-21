<?php namespace HL7\FHIR\STU3\FHIRResource\FHIRContract;

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
 * A formal agreement between parties regarding the conduct of business, exchange of information or other matters.
 */
class FHIRContractTerm extends FHIRBackboneElement implements \JsonSerializable
{
    /**
     * Unique identifier for this particular Contract Provision.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRIdentifier
     */
    public $identifier = null;

    /**
     * When this Contract Provision was issued.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRDateTime
     */
    public $issued = null;

    /**
     * Relevant time or time-period when this Contract Provision is applicable.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRPeriod
     */
    public $applies = null;

    /**
     * Type of Contract Provision such as specific requirements, purposes for actions, obligations, prohibitions, e.g. life time maximum benefit.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * Subtype of this Contract Provision, e.g. life time maximum payment for a contract term for specific valued item, e.g. disability payment.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept
     */
    public $subType = null;

    /**
     * The matter of concern in the context of this provision of the agrement.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRReference[]
     */
    public $topic = [];

    /**
     * Action stipulated by this Contract Provision.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    public $action = [];

    /**
     * Reason or purpose for the action stipulated by this Contract Provision.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    public $actionReason = [];

    /**
     * A set of security labels that define which terms are controlled by this condition.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRCoding[]
     */
    public $securityLabel = [];

    /**
     * An actor taking a role in an activity for which it can be assigned some degree of responsibility for the activity taking place.
     * @var \HL7\FHIR\STU3\FHIRResource\FHIRContract\FHIRContractAgent1[]
     */
    public $agent = [];

    /**
     * Human readable form of this Contract Provision.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    public $text = null;

    /**
     * Contract Provision Valued Item List.
     * @var \HL7\FHIR\STU3\FHIRResource\FHIRContract\FHIRContractValuedItem1[]
     */
    public $valuedItem = [];

    /**
     * Nested group of Contract Provisions.
     * @var \HL7\FHIR\STU3\FHIRResource\FHIRContract\FHIRContractTerm[]
     */
    public $group = [];

    /**
     * @var string
     */
    private $_fhirElementName = 'Contract.Term';

    /**
     * Unique identifier for this particular Contract Provision.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRIdentifier
     */
    public function getIdentifier() {
        return $this->identifier;
    }

    /**
     * Unique identifier for this particular Contract Provision.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function setIdentifier($identifier) {
        $this->identifier = $identifier;
        return $this;
    }

    /**
     * When this Contract Provision was issued.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRDateTime
     */
    public function getIssued() {
        return $this->issued;
    }

    /**
     * When this Contract Provision was issued.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRDateTime $issued
     * @return $this
     */
    public function setIssued($issued) {
        $this->issued = $issued;
        return $this;
    }

    /**
     * Relevant time or time-period when this Contract Provision is applicable.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRPeriod
     */
    public function getApplies() {
        return $this->applies;
    }

    /**
     * Relevant time or time-period when this Contract Provision is applicable.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRPeriod $applies
     * @return $this
     */
    public function setApplies($applies) {
        $this->applies = $applies;
        return $this;
    }

    /**
     * Type of Contract Provision such as specific requirements, purposes for actions, obligations, prohibitions, e.g. life time maximum benefit.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept
     */
    public function getType() {
        return $this->type;
    }

    /**
     * Type of Contract Provision such as specific requirements, purposes for actions, obligations, prohibitions, e.g. life time maximum benefit.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept $type
     * @return $this
     */
    public function setType($type) {
        $this->type = $type;
        return $this;
    }

    /**
     * Subtype of this Contract Provision, e.g. life time maximum payment for a contract term for specific valued item, e.g. disability payment.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept
     */
    public function getSubType() {
        return $this->subType;
    }

    /**
     * Subtype of this Contract Provision, e.g. life time maximum payment for a contract term for specific valued item, e.g. disability payment.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept $subType
     * @return $this
     */
    public function setSubType($subType) {
        $this->subType = $subType;
        return $this;
    }

    /**
     * The matter of concern in the context of this provision of the agrement.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRReference[]
     */
    public function getTopic() {
        return $this->topic;
    }

    /**
     * The matter of concern in the context of this provision of the agrement.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRReference $topic
     * @return $this
     */
    public function addTopic($topic) {
        $this->topic[] = $topic;
        return $this;
    }

    /**
     * Action stipulated by this Contract Provision.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    public function getAction() {
        return $this->action;
    }

    /**
     * Action stipulated by this Contract Provision.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept $action
     * @return $this
     */
    public function addAction($action) {
        $this->action[] = $action;
        return $this;
    }

    /**
     * Reason or purpose for the action stipulated by this Contract Provision.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    public function getActionReason() {
        return $this->actionReason;
    }

    /**
     * Reason or purpose for the action stipulated by this Contract Provision.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept $actionReason
     * @return $this
     */
    public function addActionReason($actionReason) {
        $this->actionReason[] = $actionReason;
        return $this;
    }

    /**
     * A set of security labels that define which terms are controlled by this condition.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRCoding[]
     */
    public function getSecurityLabel() {
        return $this->securityLabel;
    }

    /**
     * A set of security labels that define which terms are controlled by this condition.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRCoding $securityLabel
     * @return $this
     */
    public function addSecurityLabel($securityLabel) {
        $this->securityLabel[] = $securityLabel;
        return $this;
    }

    /**
     * An actor taking a role in an activity for which it can be assigned some degree of responsibility for the activity taking place.
     * @return \HL7\FHIR\STU3\FHIRResource\FHIRContract\FHIRContractAgent1[]
     */
    public function getAgent() {
        return $this->agent;
    }

    /**
     * An actor taking a role in an activity for which it can be assigned some degree of responsibility for the activity taking place.
     * @param \HL7\FHIR\STU3\FHIRResource\FHIRContract\FHIRContractAgent1 $agent
     * @return $this
     */
    public function addAgent($agent) {
        $this->agent[] = $agent;
        return $this;
    }

    /**
     * Human readable form of this Contract Provision.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    public function getText() {
        return $this->text;
    }

    /**
     * Human readable form of this Contract Provision.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRString $text
     * @return $this
     */
    public function setText($text) {
        $this->text = $text;
        return $this;
    }

    /**
     * Contract Provision Valued Item List.
     * @return \HL7\FHIR\STU3\FHIRResource\FHIRContract\FHIRContractValuedItem1[]
     */
    public function getValuedItem() {
        return $this->valuedItem;
    }

    /**
     * Contract Provision Valued Item List.
     * @param \HL7\FHIR\STU3\FHIRResource\FHIRContract\FHIRContractValuedItem1 $valuedItem
     * @return $this
     */
    public function addValuedItem($valuedItem) {
        $this->valuedItem[] = $valuedItem;
        return $this;
    }

    /**
     * Nested group of Contract Provisions.
     * @return \HL7\FHIR\STU3\FHIRResource\FHIRContract\FHIRContractTerm[]
     */
    public function getGroup() {
        return $this->group;
    }

    /**
     * Nested group of Contract Provisions.
     * @param \HL7\FHIR\STU3\FHIRResource\FHIRContract\FHIRContractTerm $group
     * @return $this
     */
    public function addGroup($group) {
        $this->group[] = $group;
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
                $this->setIdentifier($data['identifier']);
            }
            if (isset($data['issued'])) {
                $this->setIssued($data['issued']);
            }
            if (isset($data['applies'])) {
                $this->setApplies($data['applies']);
            }
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
            if (isset($data['subType'])) {
                $this->setSubType($data['subType']);
            }
            if (isset($data['topic'])) {
                if (is_array($data['topic'])) {
                    foreach($data['topic'] as $d) {
                        $this->addtopic($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"topic" must be array of objects or null, '.gettype($data['topic']).' seen.'); 
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
            if (isset($data['actionReason'])) {
                if (is_array($data['actionReason'])) {
                    foreach($data['actionReason'] as $d) {
                        $this->addactionReason($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"actionReason" must be array of objects or null, '.gettype($data['actionReason']).' seen.'); 
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
            if (isset($data['agent'])) {
                if (is_array($data['agent'])) {
                    foreach($data['agent'] as $d) {
                        $this->addagent($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"agent" must be array of objects or null, '.gettype($data['agent']).' seen.'); 
                }
            }
            if (isset($data['text'])) {
                $this->setText($data['text']);
            }
            if (isset($data['valuedItem'])) {
                if (is_array($data['valuedItem'])) {
                    foreach($data['valuedItem'] as $d) {
                        $this->addvaluedItem($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"valuedItem" must be array of objects or null, '.gettype($data['valuedItem']).' seen.'); 
                }
            }
            if (isset($data['group'])) {
                if (is_array($data['group'])) {
                    foreach($data['group'] as $d) {
                        $this->addgroup($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"group" must be array of objects or null, '.gettype($data['group']).' seen.'); 
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
        if (isset($this->identifier)) $json['identifier'] = $this->identifier;
        if (isset($this->issued)) $json['issued'] = $this->issued;
        if (isset($this->applies)) $json['applies'] = $this->applies;
        if (isset($this->type)) $json['type'] = $this->type;
        if (isset($this->subType)) $json['subType'] = $this->subType;
        if (0 < count($this->topic)) {
            $json['topic'] = [];
            foreach($this->topic as $topic) {
                if (null !== $topic) $json['topic'][] = $topic;
            }
        }
        if (0 < count($this->action)) {
            $json['action'] = [];
            foreach($this->action as $action) {
                if (null !== $action) $json['action'][] = $action;
            }
        }
        if (0 < count($this->actionReason)) {
            $json['actionReason'] = [];
            foreach($this->actionReason as $actionReason) {
                if (null !== $actionReason) $json['actionReason'][] = $actionReason;
            }
        }
        if (0 < count($this->securityLabel)) {
            $json['securityLabel'] = [];
            foreach($this->securityLabel as $securityLabel) {
                if (null !== $securityLabel) $json['securityLabel'][] = $securityLabel;
            }
        }
        if (0 < count($this->agent)) {
            $json['agent'] = [];
            foreach($this->agent as $agent) {
                if (null !== $agent) $json['agent'][] = $agent;
            }
        }
        if (isset($this->text)) $json['text'] = $this->text;
        if (0 < count($this->valuedItem)) {
            $json['valuedItem'] = [];
            foreach($this->valuedItem as $valuedItem) {
                if (null !== $valuedItem) $json['valuedItem'][] = $valuedItem;
            }
        }
        if (0 < count($this->group)) {
            $json['group'] = [];
            foreach($this->group as $group) {
                if (null !== $group) $json['group'][] = $group;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ContractTerm xmlns="http://hl7.org/fhir"></ContractTerm>');
        parent::xmlSerialize(true, $sxe);
        if (isset($this->identifier)) $this->identifier->xmlSerialize(true, $sxe->addChild('identifier'));
        if (isset($this->issued)) $this->issued->xmlSerialize(true, $sxe->addChild('issued'));
        if (isset($this->applies)) $this->applies->xmlSerialize(true, $sxe->addChild('applies'));
        if (isset($this->type)) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (isset($this->subType)) $this->subType->xmlSerialize(true, $sxe->addChild('subType'));
        if (0 < count($this->topic)) {
            foreach($this->topic as $topic) {
                $topic->xmlSerialize(true, $sxe->addChild('topic'));
            }
        }
        if (0 < count($this->action)) {
            foreach($this->action as $action) {
                $action->xmlSerialize(true, $sxe->addChild('action'));
            }
        }
        if (0 < count($this->actionReason)) {
            foreach($this->actionReason as $actionReason) {
                $actionReason->xmlSerialize(true, $sxe->addChild('actionReason'));
            }
        }
        if (0 < count($this->securityLabel)) {
            foreach($this->securityLabel as $securityLabel) {
                $securityLabel->xmlSerialize(true, $sxe->addChild('securityLabel'));
            }
        }
        if (0 < count($this->agent)) {
            foreach($this->agent as $agent) {
                $agent->xmlSerialize(true, $sxe->addChild('agent'));
            }
        }
        if (isset($this->text)) $this->text->xmlSerialize(true, $sxe->addChild('text'));
        if (0 < count($this->valuedItem)) {
            foreach($this->valuedItem as $valuedItem) {
                $valuedItem->xmlSerialize(true, $sxe->addChild('valuedItem'));
            }
        }
        if (0 < count($this->group)) {
            foreach($this->group as $group) {
                $group->xmlSerialize(true, $sxe->addChild('group'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}