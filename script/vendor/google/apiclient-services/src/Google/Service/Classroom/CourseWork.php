<?php
/*
 * Copyright 2014 Google Inc.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not
 * use this file except in compliance with the License. You may obtain a copy of
 * the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS, WITHOUT
 * WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied. See the
 * License for the specific language governing permissions and limitations under
 * the License.
 */

class Google_Service_Classroom_CourseWork extends Google_Collection
{
  public $alternateLink;
  public $assigneeMode;
  public $associatedWithDeveloper;
  public $courseId;
  public $creationTime;
  public $creatorUserId;
  public $description;
  public $id;
  public $maxPoints;
  public $scheduledTime;
  public $state;
  public $submissionModificationMode;
  public $title;
  public $updateTime;
  public $workType;
  protected $collection_key = 'materials';
  protected $assignmentType = 'Google_Service_Classroom_Assignment';
  protected $assignmentDataType = '';
  protected $dueDateType = 'Google_Service_Classroom_Date';
  protected $dueDateDataType = '';
  protected $dueTimeType = 'Google_Service_Classroom_TimeOfDay';
  protected $dueTimeDataType = '';
  protected $individualStudentsOptionsType = 'Google_Service_Classroom_IndividualStudentsOptions';
  protected $individualStudentsOptionsDataType = '';
  protected $materialsType = 'Google_Service_Classroom_Material';
  protected $materialsDataType = 'array';
  protected $multipleChoiceQuestionType = 'Google_Service_Classroom_MultipleChoiceQuestion';
  protected $multipleChoiceQuestionDataType = '';

  public function getAlternateLink()
  {
    return $this->alternateLink;
  }

  public function setAlternateLink($alternateLink)
  {
    $this->alternateLink = $alternateLink;
  }

  public function getAssigneeMode()
  {
    return $this->assigneeMode;
  }

  public function setAssigneeMode($assigneeMode)
  {
    $this->assigneeMode = $assigneeMode;
  }

  /**
   * @param Google_Service_Classroom_Assignment
   */
  public function setAssignment(Google_Service_Classroom_Assignment $assignment)
  {
    $this->assignment = $assignment;
  }
  /**
   * @return Google_Service_Classroom_Assignment
   */
  public function getAssignment()
  {
    return $this->assignment;
  }

  public function getAssociatedWithDeveloper()
  {
    return $this->associatedWithDeveloper;
  }

  public function setAssociatedWithDeveloper($associatedWithDeveloper)
  {
    $this->associatedWithDeveloper = $associatedWithDeveloper;
  }

  public function getCourseId()
  {
    return $this->courseId;
  }

  public function setCourseId($courseId)
  {
    $this->courseId = $courseId;
  }

  public function getCreationTime()
  {
    return $this->creationTime;
  }

  public function setCreationTime($creationTime)
  {
    $this->creationTime = $creationTime;
  }

  public function getCreatorUserId()
  {
    return $this->creatorUserId;
  }

  public function setCreatorUserId($creatorUserId)
  {
    $this->creatorUserId = $creatorUserId;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function setDescription($description)
  {
    $this->description = $description;
  }

  /**
   * @param Google_Service_Classroom_Date
   */
  public function setDueDate(Google_Service_Classroom_Date $dueDate)
  {
    $this->dueDate = $dueDate;
  }
  /**
   * @return Google_Service_Classroom_Date
   */
  public function getDueDate()
  {
    return $this->dueDate;
  }
  /**
   * @param Google_Service_Classroom_TimeOfDay
   */
  public function setDueTime(Google_Service_Classroom_TimeOfDay $dueTime)
  {
    $this->dueTime = $dueTime;
  }
  /**
   * @return Google_Service_Classroom_TimeOfDay
   */
  public function getDueTime()
  {
    return $this->dueTime;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  /**
   * @param Google_Service_Classroom_IndividualStudentsOptions
   */
  public function setIndividualStudentsOptions(Google_Service_Classroom_IndividualStudentsOptions $individualStudentsOptions)
  {
    $this->individualStudentsOptions = $individualStudentsOptions;
  }
  /**
   * @return Google_Service_Classroom_IndividualStudentsOptions
   */
  public function getIndividualStudentsOptions()
  {
    return $this->individualStudentsOptions;
  }
  /**
   * @param Google_Service_Classroom_Material
   */
  public function setMaterials($materials)
  {
    $this->materials = $materials;
  }
  /**
   * @return Google_Service_Classroom_Material
   */
  public function getMaterials()
  {
    return $this->materials;
  }

  public function getMaxPoints()
  {
    return $this->maxPoints;
  }

  public function setMaxPoints($maxPoints)
  {
    $this->maxPoints = $maxPoints;
  }

  /**
   * @param Google_Service_Classroom_MultipleChoiceQuestion
   */
  public function setMultipleChoiceQuestion(Google_Service_Classroom_MultipleChoiceQuestion $multipleChoiceQuestion)
  {
    $this->multipleChoiceQuestion = $multipleChoiceQuestion;
  }
  /**
   * @return Google_Service_Classroom_MultipleChoiceQuestion
   */
  public function getMultipleChoiceQuestion()
  {
    return $this->multipleChoiceQuestion;
  }

  public function getScheduledTime()
  {
    return $this->scheduledTime;
  }

  public function setScheduledTime($scheduledTime)
  {
    $this->scheduledTime = $scheduledTime;
  }

  public function getState()
  {
    return $this->state;
  }

  public function setState($state)
  {
    $this->state = $state;
  }

  public function getSubmissionModificationMode()
  {
    return $this->submissionModificationMode;
  }

  public function setSubmissionModificationMode($submissionModificationMode)
  {
    $this->submissionModificationMode = $submissionModificationMode;
  }

  public function getTitle()
  {
    return $this->title;
  }

  public function setTitle($title)
  {
    $this->title = $title;
  }

  public function getUpdateTime()
  {
    return $this->updateTime;
  }

  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }

  public function getWorkType()
  {
    return $this->workType;
  }

  public function setWorkType($workType)
  {
    $this->workType = $workType;
  }
}
