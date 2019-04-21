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
 * This resource provides eligibility and plan details from the processing of an Eligibility resource.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIREligibilityResponse extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * The Response business identifier.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = [];

    /**
     * The status of the resource instance.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRFinancialResourceStatusCodes
     */
    public $status = null;

    /**
     * The date when the enclosed suite of services were performed or completed.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRDateTime
     */
    public $created = null;

    /**
     * The practitioner who is responsible for the services rendered to the patient.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    public $requestProvider = null;

    /**
     * The organization which is responsible for the services rendered to the patient.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    public $requestOrganization = null;

    /**
     * Original request resource reference.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    public $request = null;

    /**
     * Transaction status: error, complete.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept
     */
    public $outcome = null;

    /**
     * A description of the status of the adjudication.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    public $disposition = null;

    /**
     * The Insurer who produced this adjudicated response.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    public $insurer = null;

    /**
     * Flag indicating if the coverage provided is inforce currently  if no service date(s) specified or for the whole duration of the service dates.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRBoolean
     */
    public $inforce = null;

    /**
     * The insurer may provide both the details for the requested coverage as well as details for additional coverages known to the insurer.
     * @var \HL7\FHIR\STU3\FHIRResource\FHIREligibilityResponse\FHIREligibilityResponseInsurance[]
     */
    public $insurance = [];

    /**
     * The form to be used for printing the content.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept
     */
    public $form = null;

    /**
     * Mutually exclusive with Services Provided (Item).
     * @var \HL7\FHIR\STU3\FHIRResource\FHIREligibilityResponse\FHIREligibilityResponseError[]
     */
    public $error = [];

    /**
     * @var string
     */
    private $_fhirElementName = 'EligibilityResponse';

    /**
     * The Response business identifier.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier() {
        return $this->identifier;
    }

    /**
     * The Response business identifier.
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
     * The date when the enclosed suite of services were performed or completed.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRDateTime
     */
    public function getCreated() {
        return $this->created;
    }

    /**
     * The date when the enclosed suite of services were performed or completed.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRDateTime $created
     * @return $this
     */
    public function setCreated($created) {
        $this->created = $created;
        return $this;
    }

    /**
     * The practitioner who is responsible for the services rendered to the patient.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    public function getRequestProvider() {
        return $this->requestProvider;
    }

    /**
     * The practitioner who is responsible for the services rendered to the patient.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRReference $requestProvider
     * @return $this
     */
    public function setRequestProvider($requestProvider) {
        $this->requestProvider = $requestProvider;
        return $this;
    }

    /**
     * The organization which is responsible for the services rendered to the patient.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    public function getRequestOrganization() {
        return $this->requestOrganization;
    }

    /**
     * The organization which is responsible for the services rendered to the patient.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRReference $requestOrganization
     * @return $this
     */
    public function setRequestOrganization($requestOrganization) {
        $this->requestOrganization = $requestOrganization;
        return $this;
    }

    /**
     * Original request resource reference.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    public function getRequest() {
        return $this->request;
    }

    /**
     * Original request resource reference.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRReference $request
     * @return $this
     */
    public function setRequest($request) {
        $this->request = $request;
        return $this;
    }

    /**
     * Transaction status: error, complete.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept
     */
    public function getOutcome() {
        return $this->outcome;
    }

    /**
     * Transaction status: error, complete.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept $outcome
     * @return $this
     */
    public function setOutcome($outcome) {
        $this->outcome = $outcome;
        return $this;
    }

    /**
     * A description of the status of the adjudication.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    public function getDisposition() {
        return $this->disposition;
    }

    /**
     * A description of the status of the adjudication.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRString $disposition
     * @return $this
     */
    public function setDisposition($disposition) {
        $this->disposition = $disposition;
        return $this;
    }

    /**
     * The Insurer who produced this adjudicated response.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    public function getInsurer() {
        return $this->insurer;
    }

    /**
     * The Insurer who produced this adjudicated response.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRReference $insurer
     * @return $this
     */
    public function setInsurer($insurer) {
        $this->insurer = $insurer;
        return $this;
    }

    /**
     * Flag indicating if the coverage provided is inforce currently  if no service date(s) specified or for the whole duration of the service dates.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRBoolean
     */
    public function getInforce() {
        return $this->inforce;
    }

    /**
     * Flag indicating if the coverage provided is inforce currently  if no service date(s) specified or for the whole duration of the service dates.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRBoolean $inforce
     * @return $this
     */
    public function setInforce($inforce) {
        $this->inforce = $inforce;
        return $this;
    }

    /**
     * The insurer may provide both the details for the requested coverage as well as details for additional coverages known to the insurer.
     * @return \HL7\FHIR\STU3\FHIRResource\FHIREligibilityResponse\FHIREligibilityResponseInsurance[]
     */
    public function getInsurance() {
        return $this->insurance;
    }

    /**
     * The insurer may provide both the details for the requested coverage as well as details for additional coverages known to the insurer.
     * @param \HL7\FHIR\STU3\FHIRResource\FHIREligibilityResponse\FHIREligibilityResponseInsurance $insurance
     * @return $this
     */
    public function addInsurance($insurance) {
        $this->insurance[] = $insurance;
        return $this;
    }

    /**
     * The form to be used for printing the content.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept
     */
    public function getForm() {
        return $this->form;
    }

    /**
     * The form to be used for printing the content.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept $form
     * @return $this
     */
    public function setForm($form) {
        $this->form = $form;
        return $this;
    }

    /**
     * Mutually exclusive with Services Provided (Item).
     * @return \HL7\FHIR\STU3\FHIRResource\FHIREligibilityResponse\FHIREligibilityResponseError[]
     */
    public function getError() {
        return $this->error;
    }

    /**
     * Mutually exclusive with Services Provided (Item).
     * @param \HL7\FHIR\STU3\FHIRResource\FHIREligibilityResponse\FHIREligibilityResponseError $error
     * @return $this
     */
    public function addError($error) {
        $this->error[] = $error;
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
            if (isset($data['created'])) {
                $this->setCreated($data['created']);
            }
            if (isset($data['requestProvider'])) {
                $this->setRequestProvider($data['requestProvider']);
            }
            if (isset($data['requestOrganization'])) {
                $this->setRequestOrganization($data['requestOrganization']);
            }
            if (isset($data['request'])) {
                $this->setRequest($data['request']);
            }
            if (isset($data['outcome'])) {
                $this->setOutcome($data['outcome']);
            }
            if (isset($data['disposition'])) {
                $this->setDisposition($data['disposition']);
            }
            if (isset($data['insurer'])) {
                $this->setInsurer($data['insurer']);
            }
            if (isset($data['inforce'])) {
                $this->setInforce($data['inforce']);
            }
            if (isset($data['insurance'])) {
                if (is_array($data['insurance'])) {
                    foreach($data['insurance'] as $d) {
                        $this->addinsurance($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"insurance" must be array of objects or null, '.gettype($data['insurance']).' seen.'); 
                }
            }
            if (isset($data['form'])) {
                $this->setForm($data['form']);
            }
            if (isset($data['error'])) {
                if (is_array($data['error'])) {
                    foreach($data['error'] as $d) {
                        $this->adderror($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"error" must be array of objects or null, '.gettype($data['error']).' seen.'); 
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
        if (isset($this->created)) $json['created'] = $this->created;
        if (isset($this->requestProvider)) $json['requestProvider'] = $this->requestProvider;
        if (isset($this->requestOrganization)) $json['requestOrganization'] = $this->requestOrganization;
        if (isset($this->request)) $json['request'] = $this->request;
        if (isset($this->outcome)) $json['outcome'] = $this->outcome;
        if (isset($this->disposition)) $json['disposition'] = $this->disposition;
        if (isset($this->insurer)) $json['insurer'] = $this->insurer;
        if (isset($this->inforce)) $json['inforce'] = $this->inforce;
        if (0 < count($this->insurance)) {
            $json['insurance'] = [];
            foreach($this->insurance as $insurance) {
                if (null !== $insurance) $json['insurance'][] = $insurance;
            }
        }
        if (isset($this->form)) $json['form'] = $this->form;
        if (0 < count($this->error)) {
            $json['error'] = [];
            foreach($this->error as $error) {
                if (null !== $error) $json['error'][] = $error;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<EligibilityResponse xmlns="http://hl7.org/fhir"></EligibilityResponse>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (isset($this->status)) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (isset($this->created)) $this->created->xmlSerialize(true, $sxe->addChild('created'));
        if (isset($this->requestProvider)) $this->requestProvider->xmlSerialize(true, $sxe->addChild('requestProvider'));
        if (isset($this->requestOrganization)) $this->requestOrganization->xmlSerialize(true, $sxe->addChild('requestOrganization'));
        if (isset($this->request)) $this->request->xmlSerialize(true, $sxe->addChild('request'));
        if (isset($this->outcome)) $this->outcome->xmlSerialize(true, $sxe->addChild('outcome'));
        if (isset($this->disposition)) $this->disposition->xmlSerialize(true, $sxe->addChild('disposition'));
        if (isset($this->insurer)) $this->insurer->xmlSerialize(true, $sxe->addChild('insurer'));
        if (isset($this->inforce)) $this->inforce->xmlSerialize(true, $sxe->addChild('inforce'));
        if (0 < count($this->insurance)) {
            foreach($this->insurance as $insurance) {
                $insurance->xmlSerialize(true, $sxe->addChild('insurance'));
            }
        }
        if (isset($this->form)) $this->form->xmlSerialize(true, $sxe->addChild('form'));
        if (0 < count($this->error)) {
            foreach($this->error as $error) {
                $error->xmlSerialize(true, $sxe->addChild('error'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}