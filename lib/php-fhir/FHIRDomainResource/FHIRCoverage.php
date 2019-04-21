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
 * Financial instrument which may be used to reimburse or pay for health care products and services.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRCoverage extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * The main (and possibly only) identifier for the coverage - often referred to as a Member Id, Certificate number, Personal Health Number or Case ID. May be constructed as the concatination of the Coverage.SubscriberID and the Coverage.dependant.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = [];

    /**
     * The status of the resource instance.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRFinancialResourceStatusCodes
     */
    public $status = null;

    /**
     * The type of coverage: social program, medical plan, accident coverage (workers compensation, auto), group health or payment by an individual or organization.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * The party who 'owns' the insurance policy,  may be an individual, corporation or the subscriber's employer.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    public $policyHolder = null;

    /**
     * The party who has signed-up for or 'owns' the contractual relationship to the policy or to whom the benefit of the policy for services rendered to them or their family is due.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    public $subscriber = null;

    /**
     * The insurer assigned ID for the Subscriber.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    public $subscriberId = null;

    /**
     * The party who benefits from the insurance coverage., the patient when services are provided.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    public $beneficiary = null;

    /**
     * The relationship of beneficiary (patient) to the subscriber.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept
     */
    public $relationship = null;

    /**
     * Time period during which the coverage is in force. A missing start date indicates the start date isn't known, a missing end date means the coverage is continuing to be in force.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRPeriod
     */
    public $period = null;

    /**
     * The program or plan underwriter or payor including both insurance and non-insurance agreements, such as patient-pay agreements. May provide multiple identifiers such as insurance company identifier or business identifier (BIN number).
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRReference[]
     */
    public $payor = [];

    /**
     * A suite of underwrite specific classifiers, for example may be used to identify a class of coverage or employer group, Policy, Plan.
     * @var \HL7\FHIR\STU3\FHIRResource\FHIRCoverage\FHIRCoverageGrouping
     */
    public $grouping = null;

    /**
     * A unique identifier for a dependent under the coverage.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    public $dependent = null;

    /**
     * An optional counter for a particular instance of the identified coverage which increments upon each renewal.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    public $sequence = null;

    /**
     * The order of applicability of this coverage relative to other coverages which are currently inforce. Note, there may be gaps in the numbering and this does not imply primary, secondard etc. as the specific positioning of coverages depends upon the episode of care.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRPositiveInt
     */
    public $order = null;

    /**
     * The insurer-specific identifier for the insurer-defined network of providers to which the beneficiary may seek treatment which will be covered at the 'in-network' rate, otherwise 'out of network' terms and conditions apply.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    public $network = null;

    /**
     * The policy(s) which constitute this insurance coverage.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRReference[]
     */
    public $contract = [];

    /**
     * @var string
     */
    private $_fhirElementName = 'Coverage';

    /**
     * The main (and possibly only) identifier for the coverage - often referred to as a Member Id, Certificate number, Personal Health Number or Case ID. May be constructed as the concatination of the Coverage.SubscriberID and the Coverage.dependant.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier() {
        return $this->identifier;
    }

    /**
     * The main (and possibly only) identifier for the coverage - often referred to as a Member Id, Certificate number, Personal Health Number or Case ID. May be constructed as the concatination of the Coverage.SubscriberID and the Coverage.dependant.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier) {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * The status of the resource instance.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRFinancialResourceStatusCodes
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * The status of the resource instance.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRFinancialResourceStatusCodes $status
     * @return $this
     */
    public function setStatus($status) {
        $this->status = $status;
        return $this;
    }

    /**
     * The type of coverage: social program, medical plan, accident coverage (workers compensation, auto), group health or payment by an individual or organization.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept
     */
    public function getType() {
        return $this->type;
    }

    /**
     * The type of coverage: social program, medical plan, accident coverage (workers compensation, auto), group health or payment by an individual or organization.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept $type
     * @return $this
     */
    public function setType($type) {
        $this->type = $type;
        return $this;
    }

    /**
     * The party who 'owns' the insurance policy,  may be an individual, corporation or the subscriber's employer.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    public function getPolicyHolder() {
        return $this->policyHolder;
    }

    /**
     * The party who 'owns' the insurance policy,  may be an individual, corporation or the subscriber's employer.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRReference $policyHolder
     * @return $this
     */
    public function setPolicyHolder($policyHolder) {
        $this->policyHolder = $policyHolder;
        return $this;
    }

    /**
     * The party who has signed-up for or 'owns' the contractual relationship to the policy or to whom the benefit of the policy for services rendered to them or their family is due.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    public function getSubscriber() {
        return $this->subscriber;
    }

    /**
     * The party who has signed-up for or 'owns' the contractual relationship to the policy or to whom the benefit of the policy for services rendered to them or their family is due.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRReference $subscriber
     * @return $this
     */
    public function setSubscriber($subscriber) {
        $this->subscriber = $subscriber;
        return $this;
    }

    /**
     * The insurer assigned ID for the Subscriber.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    public function getSubscriberId() {
        return $this->subscriberId;
    }

    /**
     * The insurer assigned ID for the Subscriber.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRString $subscriberId
     * @return $this
     */
    public function setSubscriberId($subscriberId) {
        $this->subscriberId = $subscriberId;
        return $this;
    }

    /**
     * The party who benefits from the insurance coverage., the patient when services are provided.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    public function getBeneficiary() {
        return $this->beneficiary;
    }

    /**
     * The party who benefits from the insurance coverage., the patient when services are provided.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRReference $beneficiary
     * @return $this
     */
    public function setBeneficiary($beneficiary) {
        $this->beneficiary = $beneficiary;
        return $this;
    }

    /**
     * The relationship of beneficiary (patient) to the subscriber.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept
     */
    public function getRelationship() {
        return $this->relationship;
    }

    /**
     * The relationship of beneficiary (patient) to the subscriber.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept $relationship
     * @return $this
     */
    public function setRelationship($relationship) {
        $this->relationship = $relationship;
        return $this;
    }

    /**
     * Time period during which the coverage is in force. A missing start date indicates the start date isn't known, a missing end date means the coverage is continuing to be in force.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRPeriod
     */
    public function getPeriod() {
        return $this->period;
    }

    /**
     * Time period during which the coverage is in force. A missing start date indicates the start date isn't known, a missing end date means the coverage is continuing to be in force.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRPeriod $period
     * @return $this
     */
    public function setPeriod($period) {
        $this->period = $period;
        return $this;
    }

    /**
     * The program or plan underwriter or payor including both insurance and non-insurance agreements, such as patient-pay agreements. May provide multiple identifiers such as insurance company identifier or business identifier (BIN number).
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRReference[]
     */
    public function getPayor() {
        return $this->payor;
    }

    /**
     * The program or plan underwriter or payor including both insurance and non-insurance agreements, such as patient-pay agreements. May provide multiple identifiers such as insurance company identifier or business identifier (BIN number).
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRReference $payor
     * @return $this
     */
    public function addPayor($payor) {
        $this->payor[] = $payor;
        return $this;
    }

    /**
     * A suite of underwrite specific classifiers, for example may be used to identify a class of coverage or employer group, Policy, Plan.
     * @return \HL7\FHIR\STU3\FHIRResource\FHIRCoverage\FHIRCoverageGrouping
     */
    public function getGrouping() {
        return $this->grouping;
    }

    /**
     * A suite of underwrite specific classifiers, for example may be used to identify a class of coverage or employer group, Policy, Plan.
     * @param \HL7\FHIR\STU3\FHIRResource\FHIRCoverage\FHIRCoverageGrouping $grouping
     * @return $this
     */
    public function setGrouping($grouping) {
        $this->grouping = $grouping;
        return $this;
    }

    /**
     * A unique identifier for a dependent under the coverage.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    public function getDependent() {
        return $this->dependent;
    }

    /**
     * A unique identifier for a dependent under the coverage.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRString $dependent
     * @return $this
     */
    public function setDependent($dependent) {
        $this->dependent = $dependent;
        return $this;
    }

    /**
     * An optional counter for a particular instance of the identified coverage which increments upon each renewal.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    public function getSequence() {
        return $this->sequence;
    }

    /**
     * An optional counter for a particular instance of the identified coverage which increments upon each renewal.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRString $sequence
     * @return $this
     */
    public function setSequence($sequence) {
        $this->sequence = $sequence;
        return $this;
    }

    /**
     * The order of applicability of this coverage relative to other coverages which are currently inforce. Note, there may be gaps in the numbering and this does not imply primary, secondard etc. as the specific positioning of coverages depends upon the episode of care.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRPositiveInt
     */
    public function getOrder() {
        return $this->order;
    }

    /**
     * The order of applicability of this coverage relative to other coverages which are currently inforce. Note, there may be gaps in the numbering and this does not imply primary, secondard etc. as the specific positioning of coverages depends upon the episode of care.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRPositiveInt $order
     * @return $this
     */
    public function setOrder($order) {
        $this->order = $order;
        return $this;
    }

    /**
     * The insurer-specific identifier for the insurer-defined network of providers to which the beneficiary may seek treatment which will be covered at the 'in-network' rate, otherwise 'out of network' terms and conditions apply.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    public function getNetwork() {
        return $this->network;
    }

    /**
     * The insurer-specific identifier for the insurer-defined network of providers to which the beneficiary may seek treatment which will be covered at the 'in-network' rate, otherwise 'out of network' terms and conditions apply.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRString $network
     * @return $this
     */
    public function setNetwork($network) {
        $this->network = $network;
        return $this;
    }

    /**
     * The policy(s) which constitute this insurance coverage.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRReference[]
     */
    public function getContract() {
        return $this->contract;
    }

    /**
     * The policy(s) which constitute this insurance coverage.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRReference $contract
     * @return $this
     */
    public function addContract($contract) {
        $this->contract[] = $contract;
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
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
            if (isset($data['policyHolder'])) {
                $this->setPolicyHolder($data['policyHolder']);
            }
            if (isset($data['subscriber'])) {
                $this->setSubscriber($data['subscriber']);
            }
            if (isset($data['subscriberId'])) {
                $this->setSubscriberId($data['subscriberId']);
            }
            if (isset($data['beneficiary'])) {
                $this->setBeneficiary($data['beneficiary']);
            }
            if (isset($data['relationship'])) {
                $this->setRelationship($data['relationship']);
            }
            if (isset($data['period'])) {
                $this->setPeriod($data['period']);
            }
            if (isset($data['payor'])) {
                if (is_array($data['payor'])) {
                    foreach($data['payor'] as $d) {
                        $this->addpayor($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"payor" must be array of objects or null, '.gettype($data['payor']).' seen.'); 
                }
            }
            if (isset($data['grouping'])) {
                $this->setGrouping($data['grouping']);
            }
            if (isset($data['dependent'])) {
                $this->setDependent($data['dependent']);
            }
            if (isset($data['sequence'])) {
                $this->setSequence($data['sequence']);
            }
            if (isset($data['order'])) {
                $this->setOrder($data['order']);
            }
            if (isset($data['network'])) {
                $this->setNetwork($data['network']);
            }
            if (isset($data['contract'])) {
                if (is_array($data['contract'])) {
                    foreach($data['contract'] as $d) {
                        $this->addcontract($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"contract" must be array of objects or null, '.gettype($data['contract']).' seen.'); 
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
        if (isset($this->type)) $json['type'] = $this->type;
        if (isset($this->policyHolder)) $json['policyHolder'] = $this->policyHolder;
        if (isset($this->subscriber)) $json['subscriber'] = $this->subscriber;
        if (isset($this->subscriberId)) $json['subscriberId'] = $this->subscriberId;
        if (isset($this->beneficiary)) $json['beneficiary'] = $this->beneficiary;
        if (isset($this->relationship)) $json['relationship'] = $this->relationship;
        if (isset($this->period)) $json['period'] = $this->period;
        if (0 < count($this->payor)) {
            $json['payor'] = [];
            foreach($this->payor as $payor) {
                if (null !== $payor) $json['payor'][] = $payor;
            }
        }
        if (isset($this->grouping)) $json['grouping'] = $this->grouping;
        if (isset($this->dependent)) $json['dependent'] = $this->dependent;
        if (isset($this->sequence)) $json['sequence'] = $this->sequence;
        if (isset($this->order)) $json['order'] = $this->order;
        if (isset($this->network)) $json['network'] = $this->network;
        if (0 < count($this->contract)) {
            $json['contract'] = [];
            foreach($this->contract as $contract) {
                if (null !== $contract) $json['contract'][] = $contract;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<Coverage xmlns="http://hl7.org/fhir"></Coverage>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (isset($this->status)) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (isset($this->type)) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (isset($this->policyHolder)) $this->policyHolder->xmlSerialize(true, $sxe->addChild('policyHolder'));
        if (isset($this->subscriber)) $this->subscriber->xmlSerialize(true, $sxe->addChild('subscriber'));
        if (isset($this->subscriberId)) $this->subscriberId->xmlSerialize(true, $sxe->addChild('subscriberId'));
        if (isset($this->beneficiary)) $this->beneficiary->xmlSerialize(true, $sxe->addChild('beneficiary'));
        if (isset($this->relationship)) $this->relationship->xmlSerialize(true, $sxe->addChild('relationship'));
        if (isset($this->period)) $this->period->xmlSerialize(true, $sxe->addChild('period'));
        if (0 < count($this->payor)) {
            foreach($this->payor as $payor) {
                $payor->xmlSerialize(true, $sxe->addChild('payor'));
            }
        }
        if (isset($this->grouping)) $this->grouping->xmlSerialize(true, $sxe->addChild('grouping'));
        if (isset($this->dependent)) $this->dependent->xmlSerialize(true, $sxe->addChild('dependent'));
        if (isset($this->sequence)) $this->sequence->xmlSerialize(true, $sxe->addChild('sequence'));
        if (isset($this->order)) $this->order->xmlSerialize(true, $sxe->addChild('order'));
        if (isset($this->network)) $this->network->xmlSerialize(true, $sxe->addChild('network'));
        if (0 < count($this->contract)) {
            foreach($this->contract as $contract) {
                $contract->xmlSerialize(true, $sxe->addChild('contract'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}