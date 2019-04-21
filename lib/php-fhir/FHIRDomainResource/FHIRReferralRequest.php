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
 * Used to record and send details about a request for referral service or transfer of a patient to the care of another provider or provider organization.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRReferralRequest extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * Business identifier that uniquely identifies the referral/care transfer request instance.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = [];

    /**
     * A protocol, guideline, orderset or other definition that is adhered to in whole or in part by this request.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRReference[]
     */
    public $definition = [];

    /**
     * Indicates any plans, proposals or orders that this request is intended to satisfy - in whole or in part.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRReference[]
     */
    public $basedOn = [];

    /**
     * Completed or terminated request(s) whose function is taken by this new request.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRReference[]
     */
    public $replaces = [];

    /**
     * The business identifier of the logical "grouping" request/order that this referral is a part of.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRIdentifier
     */
    public $groupIdentifier = null;

    /**
     * The status of the authorization/intention reflected by the referral request record.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRRequestStatus
     */
    public $status = null;

    /**
     * Distinguishes the "level" of authorization/demand implicit in this request.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRRequestIntent
     */
    public $intent = null;

    /**
     * An indication of the type of referral (or where applicable the type of transfer of care) request.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept
     */
    public $type = null;

    /**
     * An indication of the urgency of referral (or where applicable the type of transfer of care) request.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRRequestPriority
     */
    public $priority = null;

    /**
     * The service(s) that is/are requested to be provided to the patient.  For example: cardiac pacemaker insertion.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    public $serviceRequested = [];

    /**
     * The patient who is the subject of a referral or transfer of care request.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    public $subject = null;

    /**
     * The encounter at which the request for referral or transfer of care is initiated.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    public $context = null;

    /**
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRDateTime
     */
    public $occurrenceDateTime = null;

    /**
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRPeriod
     */
    public $occurrencePeriod = null;

    /**
     * Date/DateTime of creation for draft requests and date of activation for active requests.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRDateTime
     */
    public $authoredOn = null;

    /**
     * The individual who initiated the request and has responsibility for its activation.
     * @var \HL7\FHIR\STU3\FHIRResource\FHIRReferralRequest\FHIRReferralRequestRequester
     */
    public $requester = null;

    /**
     * Indication of the clinical domain or discipline to which the referral or transfer of care request is sent.  For example: Cardiology Gastroenterology Diabetology.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept
     */
    public $specialty = null;

    /**
     * The healthcare provider(s) or provider organization(s) who/which is to receive the referral/transfer of care request.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRReference[]
     */
    public $recipient = [];

    /**
     * Description of clinical condition indicating why referral/transfer of care is requested.  For example:  Pathological Anomalies, Disabled (physical or mental),  Behavioral Management.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    public $reasonCode = [];

    /**
     * Indicates another resource whose existence justifies this request.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRReference[]
     */
    public $reasonReference = [];

    /**
     * The reason element gives a short description of why the referral is being made, the description expands on this to support a more complete clinical summary.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    public $description = null;

    /**
     * Any additional (administrative, financial or clinical) information required to support request for referral or transfer of care.  For example: Presenting problems/chief complaints Medical History Family History Alerts Allergy/Intolerance and Adverse Reactions Medications Observations/Assessments (may include cognitive and fundtional assessments) Diagnostic Reports Care Plan.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRReference[]
     */
    public $supportingInfo = [];

    /**
     * Comments made about the referral request by any of the participants.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRAnnotation[]
     */
    public $note = [];

    /**
     * Links to Provenance records for past versions of this resource or fulfilling request or event resources that identify key state transitions or updates that are likely to be relevant to a user looking at the current version of the resource.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRReference[]
     */
    public $relevantHistory = [];

    /**
     * @var string
     */
    private $_fhirElementName = 'ReferralRequest';

    /**
     * Business identifier that uniquely identifies the referral/care transfer request instance.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier() {
        return $this->identifier;
    }

    /**
     * Business identifier that uniquely identifies the referral/care transfer request instance.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier) {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * A protocol, guideline, orderset or other definition that is adhered to in whole or in part by this request.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRReference[]
     */
    public function getDefinition() {
        return $this->definition;
    }

    /**
     * A protocol, guideline, orderset or other definition that is adhered to in whole or in part by this request.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRReference $definition
     * @return $this
     */
    public function addDefinition($definition) {
        $this->definition[] = $definition;
        return $this;
    }

    /**
     * Indicates any plans, proposals or orders that this request is intended to satisfy - in whole or in part.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRReference[]
     */
    public function getBasedOn() {
        return $this->basedOn;
    }

    /**
     * Indicates any plans, proposals or orders that this request is intended to satisfy - in whole or in part.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRReference $basedOn
     * @return $this
     */
    public function addBasedOn($basedOn) {
        $this->basedOn[] = $basedOn;
        return $this;
    }

    /**
     * Completed or terminated request(s) whose function is taken by this new request.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRReference[]
     */
    public function getReplaces() {
        return $this->replaces;
    }

    /**
     * Completed or terminated request(s) whose function is taken by this new request.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRReference $replaces
     * @return $this
     */
    public function addReplaces($replaces) {
        $this->replaces[] = $replaces;
        return $this;
    }

    /**
     * The business identifier of the logical "grouping" request/order that this referral is a part of.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRIdentifier
     */
    public function getGroupIdentifier() {
        return $this->groupIdentifier;
    }

    /**
     * The business identifier of the logical "grouping" request/order that this referral is a part of.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRIdentifier $groupIdentifier
     * @return $this
     */
    public function setGroupIdentifier($groupIdentifier) {
        $this->groupIdentifier = $groupIdentifier;
        return $this;
    }

    /**
     * The status of the authorization/intention reflected by the referral request record.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRRequestStatus
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * The status of the authorization/intention reflected by the referral request record.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRRequestStatus $status
     * @return $this
     */
    public function setStatus($status) {
        $this->status = $status;
        return $this;
    }

    /**
     * Distinguishes the "level" of authorization/demand implicit in this request.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRRequestIntent
     */
    public function getIntent() {
        return $this->intent;
    }

    /**
     * Distinguishes the "level" of authorization/demand implicit in this request.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRRequestIntent $intent
     * @return $this
     */
    public function setIntent($intent) {
        $this->intent = $intent;
        return $this;
    }

    /**
     * An indication of the type of referral (or where applicable the type of transfer of care) request.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept
     */
    public function getType() {
        return $this->type;
    }

    /**
     * An indication of the type of referral (or where applicable the type of transfer of care) request.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept $type
     * @return $this
     */
    public function setType($type) {
        $this->type = $type;
        return $this;
    }

    /**
     * An indication of the urgency of referral (or where applicable the type of transfer of care) request.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRRequestPriority
     */
    public function getPriority() {
        return $this->priority;
    }

    /**
     * An indication of the urgency of referral (or where applicable the type of transfer of care) request.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRRequestPriority $priority
     * @return $this
     */
    public function setPriority($priority) {
        $this->priority = $priority;
        return $this;
    }

    /**
     * The service(s) that is/are requested to be provided to the patient.  For example: cardiac pacemaker insertion.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    public function getServiceRequested() {
        return $this->serviceRequested;
    }

    /**
     * The service(s) that is/are requested to be provided to the patient.  For example: cardiac pacemaker insertion.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept $serviceRequested
     * @return $this
     */
    public function addServiceRequested($serviceRequested) {
        $this->serviceRequested[] = $serviceRequested;
        return $this;
    }

    /**
     * The patient who is the subject of a referral or transfer of care request.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    public function getSubject() {
        return $this->subject;
    }

    /**
     * The patient who is the subject of a referral or transfer of care request.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRReference $subject
     * @return $this
     */
    public function setSubject($subject) {
        $this->subject = $subject;
        return $this;
    }

    /**
     * The encounter at which the request for referral or transfer of care is initiated.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    public function getContext() {
        return $this->context;
    }

    /**
     * The encounter at which the request for referral or transfer of care is initiated.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRReference $context
     * @return $this
     */
    public function setContext($context) {
        $this->context = $context;
        return $this;
    }

    /**
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRDateTime
     */
    public function getOccurrenceDateTime() {
        return $this->occurrenceDateTime;
    }

    /**
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRDateTime $occurrenceDateTime
     * @return $this
     */
    public function setOccurrenceDateTime($occurrenceDateTime) {
        $this->occurrenceDateTime = $occurrenceDateTime;
        return $this;
    }

    /**
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRPeriod
     */
    public function getOccurrencePeriod() {
        return $this->occurrencePeriod;
    }

    /**
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRPeriod $occurrencePeriod
     * @return $this
     */
    public function setOccurrencePeriod($occurrencePeriod) {
        $this->occurrencePeriod = $occurrencePeriod;
        return $this;
    }

    /**
     * Date/DateTime of creation for draft requests and date of activation for active requests.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRDateTime
     */
    public function getAuthoredOn() {
        return $this->authoredOn;
    }

    /**
     * Date/DateTime of creation for draft requests and date of activation for active requests.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRDateTime $authoredOn
     * @return $this
     */
    public function setAuthoredOn($authoredOn) {
        $this->authoredOn = $authoredOn;
        return $this;
    }

    /**
     * The individual who initiated the request and has responsibility for its activation.
     * @return \HL7\FHIR\STU3\FHIRResource\FHIRReferralRequest\FHIRReferralRequestRequester
     */
    public function getRequester() {
        return $this->requester;
    }

    /**
     * The individual who initiated the request and has responsibility for its activation.
     * @param \HL7\FHIR\STU3\FHIRResource\FHIRReferralRequest\FHIRReferralRequestRequester $requester
     * @return $this
     */
    public function setRequester($requester) {
        $this->requester = $requester;
        return $this;
    }

    /**
     * Indication of the clinical domain or discipline to which the referral or transfer of care request is sent.  For example: Cardiology Gastroenterology Diabetology.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept
     */
    public function getSpecialty() {
        return $this->specialty;
    }

    /**
     * Indication of the clinical domain or discipline to which the referral or transfer of care request is sent.  For example: Cardiology Gastroenterology Diabetology.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept $specialty
     * @return $this
     */
    public function setSpecialty($specialty) {
        $this->specialty = $specialty;
        return $this;
    }

    /**
     * The healthcare provider(s) or provider organization(s) who/which is to receive the referral/transfer of care request.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRReference[]
     */
    public function getRecipient() {
        return $this->recipient;
    }

    /**
     * The healthcare provider(s) or provider organization(s) who/which is to receive the referral/transfer of care request.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRReference $recipient
     * @return $this
     */
    public function addRecipient($recipient) {
        $this->recipient[] = $recipient;
        return $this;
    }

    /**
     * Description of clinical condition indicating why referral/transfer of care is requested.  For example:  Pathological Anomalies, Disabled (physical or mental),  Behavioral Management.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    public function getReasonCode() {
        return $this->reasonCode;
    }

    /**
     * Description of clinical condition indicating why referral/transfer of care is requested.  For example:  Pathological Anomalies, Disabled (physical or mental),  Behavioral Management.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept $reasonCode
     * @return $this
     */
    public function addReasonCode($reasonCode) {
        $this->reasonCode[] = $reasonCode;
        return $this;
    }

    /**
     * Indicates another resource whose existence justifies this request.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRReference[]
     */
    public function getReasonReference() {
        return $this->reasonReference;
    }

    /**
     * Indicates another resource whose existence justifies this request.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRReference $reasonReference
     * @return $this
     */
    public function addReasonReference($reasonReference) {
        $this->reasonReference[] = $reasonReference;
        return $this;
    }

    /**
     * The reason element gives a short description of why the referral is being made, the description expands on this to support a more complete clinical summary.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * The reason element gives a short description of why the referral is being made, the description expands on this to support a more complete clinical summary.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRString $description
     * @return $this
     */
    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }

    /**
     * Any additional (administrative, financial or clinical) information required to support request for referral or transfer of care.  For example: Presenting problems/chief complaints Medical History Family History Alerts Allergy/Intolerance and Adverse Reactions Medications Observations/Assessments (may include cognitive and fundtional assessments) Diagnostic Reports Care Plan.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRReference[]
     */
    public function getSupportingInfo() {
        return $this->supportingInfo;
    }

    /**
     * Any additional (administrative, financial or clinical) information required to support request for referral or transfer of care.  For example: Presenting problems/chief complaints Medical History Family History Alerts Allergy/Intolerance and Adverse Reactions Medications Observations/Assessments (may include cognitive and fundtional assessments) Diagnostic Reports Care Plan.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRReference $supportingInfo
     * @return $this
     */
    public function addSupportingInfo($supportingInfo) {
        $this->supportingInfo[] = $supportingInfo;
        return $this;
    }

    /**
     * Comments made about the referral request by any of the participants.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRAnnotation[]
     */
    public function getNote() {
        return $this->note;
    }

    /**
     * Comments made about the referral request by any of the participants.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRAnnotation $note
     * @return $this
     */
    public function addNote($note) {
        $this->note[] = $note;
        return $this;
    }

    /**
     * Links to Provenance records for past versions of this resource or fulfilling request or event resources that identify key state transitions or updates that are likely to be relevant to a user looking at the current version of the resource.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRReference[]
     */
    public function getRelevantHistory() {
        return $this->relevantHistory;
    }

    /**
     * Links to Provenance records for past versions of this resource or fulfilling request or event resources that identify key state transitions or updates that are likely to be relevant to a user looking at the current version of the resource.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRReference $relevantHistory
     * @return $this
     */
    public function addRelevantHistory($relevantHistory) {
        $this->relevantHistory[] = $relevantHistory;
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
            if (isset($data['basedOn'])) {
                if (is_array($data['basedOn'])) {
                    foreach($data['basedOn'] as $d) {
                        $this->addbasedOn($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"basedOn" must be array of objects or null, '.gettype($data['basedOn']).' seen.'); 
                }
            }
            if (isset($data['replaces'])) {
                if (is_array($data['replaces'])) {
                    foreach($data['replaces'] as $d) {
                        $this->addreplaces($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"replaces" must be array of objects or null, '.gettype($data['replaces']).' seen.'); 
                }
            }
            if (isset($data['groupIdentifier'])) {
                $this->setGroupIdentifier($data['groupIdentifier']);
            }
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
            if (isset($data['intent'])) {
                $this->setIntent($data['intent']);
            }
            if (isset($data['type'])) {
                $this->setType($data['type']);
            }
            if (isset($data['priority'])) {
                $this->setPriority($data['priority']);
            }
            if (isset($data['serviceRequested'])) {
                if (is_array($data['serviceRequested'])) {
                    foreach($data['serviceRequested'] as $d) {
                        $this->addserviceRequested($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"serviceRequested" must be array of objects or null, '.gettype($data['serviceRequested']).' seen.'); 
                }
            }
            if (isset($data['subject'])) {
                $this->setSubject($data['subject']);
            }
            if (isset($data['context'])) {
                $this->setContext($data['context']);
            }
            if (isset($data['occurrenceDateTime'])) {
                $this->setOccurrenceDateTime($data['occurrenceDateTime']);
            }
            if (isset($data['occurrencePeriod'])) {
                $this->setOccurrencePeriod($data['occurrencePeriod']);
            }
            if (isset($data['authoredOn'])) {
                $this->setAuthoredOn($data['authoredOn']);
            }
            if (isset($data['requester'])) {
                $this->setRequester($data['requester']);
            }
            if (isset($data['specialty'])) {
                $this->setSpecialty($data['specialty']);
            }
            if (isset($data['recipient'])) {
                if (is_array($data['recipient'])) {
                    foreach($data['recipient'] as $d) {
                        $this->addrecipient($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"recipient" must be array of objects or null, '.gettype($data['recipient']).' seen.'); 
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
            if (isset($data['description'])) {
                $this->setDescription($data['description']);
            }
            if (isset($data['supportingInfo'])) {
                if (is_array($data['supportingInfo'])) {
                    foreach($data['supportingInfo'] as $d) {
                        $this->addsupportingInfo($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"supportingInfo" must be array of objects or null, '.gettype($data['supportingInfo']).' seen.'); 
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
            if (isset($data['relevantHistory'])) {
                if (is_array($data['relevantHistory'])) {
                    foreach($data['relevantHistory'] as $d) {
                        $this->addrelevantHistory($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"relevantHistory" must be array of objects or null, '.gettype($data['relevantHistory']).' seen.'); 
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
        if (0 < count($this->basedOn)) {
            $json['basedOn'] = [];
            foreach($this->basedOn as $basedOn) {
                if (null !== $basedOn) $json['basedOn'][] = $basedOn;
            }
        }
        if (0 < count($this->replaces)) {
            $json['replaces'] = [];
            foreach($this->replaces as $replaces) {
                if (null !== $replaces) $json['replaces'][] = $replaces;
            }
        }
        if (isset($this->groupIdentifier)) $json['groupIdentifier'] = $this->groupIdentifier;
        if (isset($this->status)) $json['status'] = $this->status;
        if (isset($this->intent)) $json['intent'] = $this->intent;
        if (isset($this->type)) $json['type'] = $this->type;
        if (isset($this->priority)) $json['priority'] = $this->priority;
        if (0 < count($this->serviceRequested)) {
            $json['serviceRequested'] = [];
            foreach($this->serviceRequested as $serviceRequested) {
                if (null !== $serviceRequested) $json['serviceRequested'][] = $serviceRequested;
            }
        }
        if (isset($this->subject)) $json['subject'] = $this->subject;
        if (isset($this->context)) $json['context'] = $this->context;
        if (isset($this->occurrenceDateTime)) $json['occurrenceDateTime'] = $this->occurrenceDateTime;
        if (isset($this->occurrencePeriod)) $json['occurrencePeriod'] = $this->occurrencePeriod;
        if (isset($this->authoredOn)) $json['authoredOn'] = $this->authoredOn;
        if (isset($this->requester)) $json['requester'] = $this->requester;
        if (isset($this->specialty)) $json['specialty'] = $this->specialty;
        if (0 < count($this->recipient)) {
            $json['recipient'] = [];
            foreach($this->recipient as $recipient) {
                if (null !== $recipient) $json['recipient'][] = $recipient;
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
        if (isset($this->description)) $json['description'] = $this->description;
        if (0 < count($this->supportingInfo)) {
            $json['supportingInfo'] = [];
            foreach($this->supportingInfo as $supportingInfo) {
                if (null !== $supportingInfo) $json['supportingInfo'][] = $supportingInfo;
            }
        }
        if (0 < count($this->note)) {
            $json['note'] = [];
            foreach($this->note as $note) {
                if (null !== $note) $json['note'][] = $note;
            }
        }
        if (0 < count($this->relevantHistory)) {
            $json['relevantHistory'] = [];
            foreach($this->relevantHistory as $relevantHistory) {
                if (null !== $relevantHistory) $json['relevantHistory'][] = $relevantHistory;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ReferralRequest xmlns="http://hl7.org/fhir"></ReferralRequest>');
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
        if (0 < count($this->basedOn)) {
            foreach($this->basedOn as $basedOn) {
                $basedOn->xmlSerialize(true, $sxe->addChild('basedOn'));
            }
        }
        if (0 < count($this->replaces)) {
            foreach($this->replaces as $replaces) {
                $replaces->xmlSerialize(true, $sxe->addChild('replaces'));
            }
        }
        if (isset($this->groupIdentifier)) $this->groupIdentifier->xmlSerialize(true, $sxe->addChild('groupIdentifier'));
        if (isset($this->status)) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (isset($this->intent)) $this->intent->xmlSerialize(true, $sxe->addChild('intent'));
        if (isset($this->type)) $this->type->xmlSerialize(true, $sxe->addChild('type'));
        if (isset($this->priority)) $this->priority->xmlSerialize(true, $sxe->addChild('priority'));
        if (0 < count($this->serviceRequested)) {
            foreach($this->serviceRequested as $serviceRequested) {
                $serviceRequested->xmlSerialize(true, $sxe->addChild('serviceRequested'));
            }
        }
        if (isset($this->subject)) $this->subject->xmlSerialize(true, $sxe->addChild('subject'));
        if (isset($this->context)) $this->context->xmlSerialize(true, $sxe->addChild('context'));
        if (isset($this->occurrenceDateTime)) $this->occurrenceDateTime->xmlSerialize(true, $sxe->addChild('occurrenceDateTime'));
        if (isset($this->occurrencePeriod)) $this->occurrencePeriod->xmlSerialize(true, $sxe->addChild('occurrencePeriod'));
        if (isset($this->authoredOn)) $this->authoredOn->xmlSerialize(true, $sxe->addChild('authoredOn'));
        if (isset($this->requester)) $this->requester->xmlSerialize(true, $sxe->addChild('requester'));
        if (isset($this->specialty)) $this->specialty->xmlSerialize(true, $sxe->addChild('specialty'));
        if (0 < count($this->recipient)) {
            foreach($this->recipient as $recipient) {
                $recipient->xmlSerialize(true, $sxe->addChild('recipient'));
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
        if (isset($this->description)) $this->description->xmlSerialize(true, $sxe->addChild('description'));
        if (0 < count($this->supportingInfo)) {
            foreach($this->supportingInfo as $supportingInfo) {
                $supportingInfo->xmlSerialize(true, $sxe->addChild('supportingInfo'));
            }
        }
        if (0 < count($this->note)) {
            foreach($this->note as $note) {
                $note->xmlSerialize(true, $sxe->addChild('note'));
            }
        }
        if (0 < count($this->relevantHistory)) {
            foreach($this->relevantHistory as $relevantHistory) {
                $relevantHistory->xmlSerialize(true, $sxe->addChild('relevantHistory'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}