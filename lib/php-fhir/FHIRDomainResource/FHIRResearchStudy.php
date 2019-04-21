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
 * A process where a researcher or organization plans and then executes a series of steps intended to increase the field of healthcare-related knowledge.  This includes studies of safety, efficacy, comparative effectiveness and other information about medications, devices, therapies and other interventional and investigative techniques.  A ResearchStudy involves the gathering of information about human or animal subjects.
 * If the element is present, it must have either a @value, an @id, or extensions
 */
class FHIRResearchStudy extends FHIRDomainResource implements \JsonSerializable
{
    /**
     * Identifiers assigned to this research study by the sponsor or other systems.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRIdentifier[]
     */
    public $identifier = [];

    /**
     * A short, descriptive user-friendly label for the study.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    public $title = null;

    /**
     * The set of steps expected to be performed as part of the execution of the study.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRReference[]
     */
    public $protocol = [];

    /**
     * A larger research study of which this particular study is a component or step.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRReference[]
     */
    public $partOf = [];

    /**
     * The current state of the study.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRResearchStudyStatus
     */
    public $status = null;

    /**
     * Codes categorizing the type of study such as investigational vs. observational, type of blinding, type of randomization, safety vs. efficacy, etc.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    public $category = [];

    /**
     * The condition(s), medication(s), food(s), therapy(ies), device(s) or other concerns or interventions that the study is seeking to gain more information about.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    public $focus = [];

    /**
     * Contact details to assist a user in learning more about or engaging with the study.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRContactDetail[]
     */
    public $contact = [];

    /**
     * Citations, references and other related documents.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRRelatedArtifact[]
     */
    public $relatedArtifact = [];

    /**
     * Key terms to aid in searching for or filtering the study.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    public $keyword = [];

    /**
     * Indicates a country, state or other region where the study is taking place.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    public $jurisdiction = [];

    /**
     * A full description of how the study is being conducted.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRMarkdown
     */
    public $description = null;

    /**
     * Reference to a Group that defines the criteria for and quantity of subjects participating in the study.  E.g. " 200 female Europeans between the ages of 20 and 45 with early onset diabetes".
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRReference[]
     */
    public $enrollment = [];

    /**
     * Identifies the start date and the expected (or actual, depending on status) end date for the study.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRPeriod
     */
    public $period = null;

    /**
     * The organization responsible for the execution of the study.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    public $sponsor = null;

    /**
     * Indicates the individual who has primary oversite of the execution of the study.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    public $principalInvestigator = null;

    /**
     * Clinic, hospital or other healthcare location that is participating in the study.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRReference[]
     */
    public $site = [];

    /**
     * A description and/or code explaining the premature termination of the study.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept
     */
    public $reasonStopped = null;

    /**
     * Comments made about the event by the performer, subject or other participants.
     * @var \HL7\FHIR\STU3\FHIRElement\FHIRAnnotation[]
     */
    public $note = [];

    /**
     * Describes an expected sequence of events for one of the participants of a study.  E.g. Exposure to drug A, wash-out, exposure to drug B, wash-out, follow-up.
     * @var \HL7\FHIR\STU3\FHIRResource\FHIRResearchStudy\FHIRResearchStudyArm[]
     */
    public $arm = [];

    /**
     * @var string
     */
    private $_fhirElementName = 'ResearchStudy';

    /**
     * Identifiers assigned to this research study by the sponsor or other systems.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRIdentifier[]
     */
    public function getIdentifier() {
        return $this->identifier;
    }

    /**
     * Identifiers assigned to this research study by the sponsor or other systems.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRIdentifier $identifier
     * @return $this
     */
    public function addIdentifier($identifier) {
        $this->identifier[] = $identifier;
        return $this;
    }

    /**
     * A short, descriptive user-friendly label for the study.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRString
     */
    public function getTitle() {
        return $this->title;
    }

    /**
     * A short, descriptive user-friendly label for the study.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRString $title
     * @return $this
     */
    public function setTitle($title) {
        $this->title = $title;
        return $this;
    }

    /**
     * The set of steps expected to be performed as part of the execution of the study.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRReference[]
     */
    public function getProtocol() {
        return $this->protocol;
    }

    /**
     * The set of steps expected to be performed as part of the execution of the study.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRReference $protocol
     * @return $this
     */
    public function addProtocol($protocol) {
        $this->protocol[] = $protocol;
        return $this;
    }

    /**
     * A larger research study of which this particular study is a component or step.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRReference[]
     */
    public function getPartOf() {
        return $this->partOf;
    }

    /**
     * A larger research study of which this particular study is a component or step.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRReference $partOf
     * @return $this
     */
    public function addPartOf($partOf) {
        $this->partOf[] = $partOf;
        return $this;
    }

    /**
     * The current state of the study.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRResearchStudyStatus
     */
    public function getStatus() {
        return $this->status;
    }

    /**
     * The current state of the study.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRResearchStudyStatus $status
     * @return $this
     */
    public function setStatus($status) {
        $this->status = $status;
        return $this;
    }

    /**
     * Codes categorizing the type of study such as investigational vs. observational, type of blinding, type of randomization, safety vs. efficacy, etc.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    public function getCategory() {
        return $this->category;
    }

    /**
     * Codes categorizing the type of study such as investigational vs. observational, type of blinding, type of randomization, safety vs. efficacy, etc.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept $category
     * @return $this
     */
    public function addCategory($category) {
        $this->category[] = $category;
        return $this;
    }

    /**
     * The condition(s), medication(s), food(s), therapy(ies), device(s) or other concerns or interventions that the study is seeking to gain more information about.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    public function getFocus() {
        return $this->focus;
    }

    /**
     * The condition(s), medication(s), food(s), therapy(ies), device(s) or other concerns or interventions that the study is seeking to gain more information about.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept $focus
     * @return $this
     */
    public function addFocus($focus) {
        $this->focus[] = $focus;
        return $this;
    }

    /**
     * Contact details to assist a user in learning more about or engaging with the study.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRContactDetail[]
     */
    public function getContact() {
        return $this->contact;
    }

    /**
     * Contact details to assist a user in learning more about or engaging with the study.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRContactDetail $contact
     * @return $this
     */
    public function addContact($contact) {
        $this->contact[] = $contact;
        return $this;
    }

    /**
     * Citations, references and other related documents.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRRelatedArtifact[]
     */
    public function getRelatedArtifact() {
        return $this->relatedArtifact;
    }

    /**
     * Citations, references and other related documents.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRRelatedArtifact $relatedArtifact
     * @return $this
     */
    public function addRelatedArtifact($relatedArtifact) {
        $this->relatedArtifact[] = $relatedArtifact;
        return $this;
    }

    /**
     * Key terms to aid in searching for or filtering the study.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    public function getKeyword() {
        return $this->keyword;
    }

    /**
     * Key terms to aid in searching for or filtering the study.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept $keyword
     * @return $this
     */
    public function addKeyword($keyword) {
        $this->keyword[] = $keyword;
        return $this;
    }

    /**
     * Indicates a country, state or other region where the study is taking place.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept[]
     */
    public function getJurisdiction() {
        return $this->jurisdiction;
    }

    /**
     * Indicates a country, state or other region where the study is taking place.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept $jurisdiction
     * @return $this
     */
    public function addJurisdiction($jurisdiction) {
        $this->jurisdiction[] = $jurisdiction;
        return $this;
    }

    /**
     * A full description of how the study is being conducted.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRMarkdown
     */
    public function getDescription() {
        return $this->description;
    }

    /**
     * A full description of how the study is being conducted.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRMarkdown $description
     * @return $this
     */
    public function setDescription($description) {
        $this->description = $description;
        return $this;
    }

    /**
     * Reference to a Group that defines the criteria for and quantity of subjects participating in the study.  E.g. " 200 female Europeans between the ages of 20 and 45 with early onset diabetes".
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRReference[]
     */
    public function getEnrollment() {
        return $this->enrollment;
    }

    /**
     * Reference to a Group that defines the criteria for and quantity of subjects participating in the study.  E.g. " 200 female Europeans between the ages of 20 and 45 with early onset diabetes".
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRReference $enrollment
     * @return $this
     */
    public function addEnrollment($enrollment) {
        $this->enrollment[] = $enrollment;
        return $this;
    }

    /**
     * Identifies the start date and the expected (or actual, depending on status) end date for the study.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRPeriod
     */
    public function getPeriod() {
        return $this->period;
    }

    /**
     * Identifies the start date and the expected (or actual, depending on status) end date for the study.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRPeriod $period
     * @return $this
     */
    public function setPeriod($period) {
        $this->period = $period;
        return $this;
    }

    /**
     * The organization responsible for the execution of the study.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    public function getSponsor() {
        return $this->sponsor;
    }

    /**
     * The organization responsible for the execution of the study.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRReference $sponsor
     * @return $this
     */
    public function setSponsor($sponsor) {
        $this->sponsor = $sponsor;
        return $this;
    }

    /**
     * Indicates the individual who has primary oversite of the execution of the study.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRReference
     */
    public function getPrincipalInvestigator() {
        return $this->principalInvestigator;
    }

    /**
     * Indicates the individual who has primary oversite of the execution of the study.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRReference $principalInvestigator
     * @return $this
     */
    public function setPrincipalInvestigator($principalInvestigator) {
        $this->principalInvestigator = $principalInvestigator;
        return $this;
    }

    /**
     * Clinic, hospital or other healthcare location that is participating in the study.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRReference[]
     */
    public function getSite() {
        return $this->site;
    }

    /**
     * Clinic, hospital or other healthcare location that is participating in the study.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRReference $site
     * @return $this
     */
    public function addSite($site) {
        $this->site[] = $site;
        return $this;
    }

    /**
     * A description and/or code explaining the premature termination of the study.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept
     */
    public function getReasonStopped() {
        return $this->reasonStopped;
    }

    /**
     * A description and/or code explaining the premature termination of the study.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRCodeableConcept $reasonStopped
     * @return $this
     */
    public function setReasonStopped($reasonStopped) {
        $this->reasonStopped = $reasonStopped;
        return $this;
    }

    /**
     * Comments made about the event by the performer, subject or other participants.
     * @return \HL7\FHIR\STU3\FHIRElement\FHIRAnnotation[]
     */
    public function getNote() {
        return $this->note;
    }

    /**
     * Comments made about the event by the performer, subject or other participants.
     * @param \HL7\FHIR\STU3\FHIRElement\FHIRAnnotation $note
     * @return $this
     */
    public function addNote($note) {
        $this->note[] = $note;
        return $this;
    }

    /**
     * Describes an expected sequence of events for one of the participants of a study.  E.g. Exposure to drug A, wash-out, exposure to drug B, wash-out, follow-up.
     * @return \HL7\FHIR\STU3\FHIRResource\FHIRResearchStudy\FHIRResearchStudyArm[]
     */
    public function getArm() {
        return $this->arm;
    }

    /**
     * Describes an expected sequence of events for one of the participants of a study.  E.g. Exposure to drug A, wash-out, exposure to drug B, wash-out, follow-up.
     * @param \HL7\FHIR\STU3\FHIRResource\FHIRResearchStudy\FHIRResearchStudyArm $arm
     * @return $this
     */
    public function addArm($arm) {
        $this->arm[] = $arm;
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
            if (isset($data['title'])) {
                $this->setTitle($data['title']);
            }
            if (isset($data['protocol'])) {
                if (is_array($data['protocol'])) {
                    foreach($data['protocol'] as $d) {
                        $this->addprotocol($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"protocol" must be array of objects or null, '.gettype($data['protocol']).' seen.'); 
                }
            }
            if (isset($data['partOf'])) {
                if (is_array($data['partOf'])) {
                    foreach($data['partOf'] as $d) {
                        $this->addpartOf($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"partOf" must be array of objects or null, '.gettype($data['partOf']).' seen.'); 
                }
            }
            if (isset($data['status'])) {
                $this->setStatus($data['status']);
            }
            if (isset($data['category'])) {
                if (is_array($data['category'])) {
                    foreach($data['category'] as $d) {
                        $this->addcategory($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"category" must be array of objects or null, '.gettype($data['category']).' seen.'); 
                }
            }
            if (isset($data['focus'])) {
                if (is_array($data['focus'])) {
                    foreach($data['focus'] as $d) {
                        $this->addfocus($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"focus" must be array of objects or null, '.gettype($data['focus']).' seen.'); 
                }
            }
            if (isset($data['contact'])) {
                if (is_array($data['contact'])) {
                    foreach($data['contact'] as $d) {
                        $this->addcontact($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"contact" must be array of objects or null, '.gettype($data['contact']).' seen.'); 
                }
            }
            if (isset($data['relatedArtifact'])) {
                if (is_array($data['relatedArtifact'])) {
                    foreach($data['relatedArtifact'] as $d) {
                        $this->addrelatedArtifact($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"relatedArtifact" must be array of objects or null, '.gettype($data['relatedArtifact']).' seen.'); 
                }
            }
            if (isset($data['keyword'])) {
                if (is_array($data['keyword'])) {
                    foreach($data['keyword'] as $d) {
                        $this->addkeyword($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"keyword" must be array of objects or null, '.gettype($data['keyword']).' seen.'); 
                }
            }
            if (isset($data['jurisdiction'])) {
                if (is_array($data['jurisdiction'])) {
                    foreach($data['jurisdiction'] as $d) {
                        $this->addjurisdiction($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"jurisdiction" must be array of objects or null, '.gettype($data['jurisdiction']).' seen.'); 
                }
            }
            if (isset($data['description'])) {
                $this->setDescription($data['description']);
            }
            if (isset($data['enrollment'])) {
                if (is_array($data['enrollment'])) {
                    foreach($data['enrollment'] as $d) {
                        $this->addenrollment($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"enrollment" must be array of objects or null, '.gettype($data['enrollment']).' seen.'); 
                }
            }
            if (isset($data['period'])) {
                $this->setPeriod($data['period']);
            }
            if (isset($data['sponsor'])) {
                $this->setSponsor($data['sponsor']);
            }
            if (isset($data['principalInvestigator'])) {
                $this->setPrincipalInvestigator($data['principalInvestigator']);
            }
            if (isset($data['site'])) {
                if (is_array($data['site'])) {
                    foreach($data['site'] as $d) {
                        $this->addsite($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"site" must be array of objects or null, '.gettype($data['site']).' seen.'); 
                }
            }
            if (isset($data['reasonStopped'])) {
                $this->setReasonStopped($data['reasonStopped']);
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
            if (isset($data['arm'])) {
                if (is_array($data['arm'])) {
                    foreach($data['arm'] as $d) {
                        $this->addarm($d);
                    }
                } else {
                    throw new \InvalidArgumentException('"arm" must be array of objects or null, '.gettype($data['arm']).' seen.'); 
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
        if (isset($this->title)) $json['title'] = $this->title;
        if (0 < count($this->protocol)) {
            $json['protocol'] = [];
            foreach($this->protocol as $protocol) {
                if (null !== $protocol) $json['protocol'][] = $protocol;
            }
        }
        if (0 < count($this->partOf)) {
            $json['partOf'] = [];
            foreach($this->partOf as $partOf) {
                if (null !== $partOf) $json['partOf'][] = $partOf;
            }
        }
        if (isset($this->status)) $json['status'] = $this->status;
        if (0 < count($this->category)) {
            $json['category'] = [];
            foreach($this->category as $category) {
                if (null !== $category) $json['category'][] = $category;
            }
        }
        if (0 < count($this->focus)) {
            $json['focus'] = [];
            foreach($this->focus as $focus) {
                if (null !== $focus) $json['focus'][] = $focus;
            }
        }
        if (0 < count($this->contact)) {
            $json['contact'] = [];
            foreach($this->contact as $contact) {
                if (null !== $contact) $json['contact'][] = $contact;
            }
        }
        if (0 < count($this->relatedArtifact)) {
            $json['relatedArtifact'] = [];
            foreach($this->relatedArtifact as $relatedArtifact) {
                if (null !== $relatedArtifact) $json['relatedArtifact'][] = $relatedArtifact;
            }
        }
        if (0 < count($this->keyword)) {
            $json['keyword'] = [];
            foreach($this->keyword as $keyword) {
                if (null !== $keyword) $json['keyword'][] = $keyword;
            }
        }
        if (0 < count($this->jurisdiction)) {
            $json['jurisdiction'] = [];
            foreach($this->jurisdiction as $jurisdiction) {
                if (null !== $jurisdiction) $json['jurisdiction'][] = $jurisdiction;
            }
        }
        if (isset($this->description)) $json['description'] = $this->description;
        if (0 < count($this->enrollment)) {
            $json['enrollment'] = [];
            foreach($this->enrollment as $enrollment) {
                if (null !== $enrollment) $json['enrollment'][] = $enrollment;
            }
        }
        if (isset($this->period)) $json['period'] = $this->period;
        if (isset($this->sponsor)) $json['sponsor'] = $this->sponsor;
        if (isset($this->principalInvestigator)) $json['principalInvestigator'] = $this->principalInvestigator;
        if (0 < count($this->site)) {
            $json['site'] = [];
            foreach($this->site as $site) {
                if (null !== $site) $json['site'][] = $site;
            }
        }
        if (isset($this->reasonStopped)) $json['reasonStopped'] = $this->reasonStopped;
        if (0 < count($this->note)) {
            $json['note'] = [];
            foreach($this->note as $note) {
                if (null !== $note) $json['note'][] = $note;
            }
        }
        if (0 < count($this->arm)) {
            $json['arm'] = [];
            foreach($this->arm as $arm) {
                if (null !== $arm) $json['arm'][] = $arm;
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
        if (null === $sxe) $sxe = new \SimpleXMLElement('<ResearchStudy xmlns="http://hl7.org/fhir"></ResearchStudy>');
        parent::xmlSerialize(true, $sxe);
        if (0 < count($this->identifier)) {
            foreach($this->identifier as $identifier) {
                $identifier->xmlSerialize(true, $sxe->addChild('identifier'));
            }
        }
        if (isset($this->title)) $this->title->xmlSerialize(true, $sxe->addChild('title'));
        if (0 < count($this->protocol)) {
            foreach($this->protocol as $protocol) {
                $protocol->xmlSerialize(true, $sxe->addChild('protocol'));
            }
        }
        if (0 < count($this->partOf)) {
            foreach($this->partOf as $partOf) {
                $partOf->xmlSerialize(true, $sxe->addChild('partOf'));
            }
        }
        if (isset($this->status)) $this->status->xmlSerialize(true, $sxe->addChild('status'));
        if (0 < count($this->category)) {
            foreach($this->category as $category) {
                $category->xmlSerialize(true, $sxe->addChild('category'));
            }
        }
        if (0 < count($this->focus)) {
            foreach($this->focus as $focus) {
                $focus->xmlSerialize(true, $sxe->addChild('focus'));
            }
        }
        if (0 < count($this->contact)) {
            foreach($this->contact as $contact) {
                $contact->xmlSerialize(true, $sxe->addChild('contact'));
            }
        }
        if (0 < count($this->relatedArtifact)) {
            foreach($this->relatedArtifact as $relatedArtifact) {
                $relatedArtifact->xmlSerialize(true, $sxe->addChild('relatedArtifact'));
            }
        }
        if (0 < count($this->keyword)) {
            foreach($this->keyword as $keyword) {
                $keyword->xmlSerialize(true, $sxe->addChild('keyword'));
            }
        }
        if (0 < count($this->jurisdiction)) {
            foreach($this->jurisdiction as $jurisdiction) {
                $jurisdiction->xmlSerialize(true, $sxe->addChild('jurisdiction'));
            }
        }
        if (isset($this->description)) $this->description->xmlSerialize(true, $sxe->addChild('description'));
        if (0 < count($this->enrollment)) {
            foreach($this->enrollment as $enrollment) {
                $enrollment->xmlSerialize(true, $sxe->addChild('enrollment'));
            }
        }
        if (isset($this->period)) $this->period->xmlSerialize(true, $sxe->addChild('period'));
        if (isset($this->sponsor)) $this->sponsor->xmlSerialize(true, $sxe->addChild('sponsor'));
        if (isset($this->principalInvestigator)) $this->principalInvestigator->xmlSerialize(true, $sxe->addChild('principalInvestigator'));
        if (0 < count($this->site)) {
            foreach($this->site as $site) {
                $site->xmlSerialize(true, $sxe->addChild('site'));
            }
        }
        if (isset($this->reasonStopped)) $this->reasonStopped->xmlSerialize(true, $sxe->addChild('reasonStopped'));
        if (0 < count($this->note)) {
            foreach($this->note as $note) {
                $note->xmlSerialize(true, $sxe->addChild('note'));
            }
        }
        if (0 < count($this->arm)) {
            foreach($this->arm as $arm) {
                $arm->xmlSerialize(true, $sxe->addChild('arm'));
            }
        }
        if ($returnSXE) return $sxe;
        return $sxe->saveXML();
    }


}