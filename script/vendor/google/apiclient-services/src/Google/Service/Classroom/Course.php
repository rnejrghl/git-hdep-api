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

class Google_Service_Classroom_Course extends Google_Collection
{
  public $alternateLink;
  public $calendarId;
  public $courseGroupEmail;
  public $courseState;
  public $creationTime;
  public $description;
  public $descriptionHeading;
  public $enrollmentCode;
  public $guardiansEnabled;
  public $id;
  public $name;
  public $ownerId;
  public $room;
  public $section;
  public $teacherGroupEmail;
  public $updateTime;
  protected $collection_key = 'courseMaterialSets';
  protected $courseMaterialSetsType = 'Google_Service_Classroom_CourseMaterialSet';
  protected $courseMaterialSetsDataType = 'array';
  protected $teacherFolderType = 'Google_Service_Classroom_DriveFolder';
  protected $teacherFolderDataType = '';

  public function getAlternateLink()
  {
    return $this->alternateLink;
  }

  public function setAlternateLink($alternateLink)
  {
    $this->alternateLink = $alternateLink;
  }

  public function getCalendarId()
  {
    return $this->calendarId;
  }

  public function setCalendarId($calendarId)
  {
    $this->calendarId = $calendarId;
  }

  public function getCourseGroupEmail()
  {
    return $this->courseGroupEmail;
  }

  public function setCourseGroupEmail($courseGroupEmail)
  {
    $this->courseGroupEmail = $courseGroupEmail;
  }

  /**
   * @param Google_Service_Classroom_CourseMaterialSet
   */
  public function setCourseMaterialSets($courseMaterialSets)
  {
    $this->courseMaterialSets = $courseMaterialSets;
  }
  /**
   * @return Google_Service_Classroom_CourseMaterialSet
   */
  public function getCourseMaterialSets()
  {
    return $this->courseMaterialSets;
  }

  public function getCourseState()
  {
    return $this->courseState;
  }

  public function setCourseState($courseState)
  {
    $this->courseState = $courseState;
  }

  public function getCreationTime()
  {
    return $this->creationTime;
  }

  public function setCreationTime($creationTime)
  {
    $this->creationTime = $creationTime;
  }

  public function getDescription()
  {
    return $this->description;
  }

  public function setDescription($description)
  {
    $this->description = $description;
  }

  public function getDescriptionHeading()
  {
    return $this->descriptionHeading;
  }

  public function setDescriptionHeading($descriptionHeading)
  {
    $this->descriptionHeading = $descriptionHeading;
  }

  public function getEnrollmentCode()
  {
    return $this->enrollmentCode;
  }

  public function setEnrollmentCode($enrollmentCode)
  {
    $this->enrollmentCode = $enrollmentCode;
  }

  public function getGuardiansEnabled()
  {
    return $this->guardiansEnabled;
  }

  public function setGuardiansEnabled($guardiansEnabled)
  {
    $this->guardiansEnabled = $guardiansEnabled;
  }

  public function getId()
  {
    return $this->id;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function getName()
  {
    return $this->name;
  }

  public function setName($name)
  {
    $this->name = $name;
  }

  public function getOwnerId()
  {
    return $this->ownerId;
  }

  public function setOwnerId($ownerId)
  {
    $this->ownerId = $ownerId;
  }

  public function getRoom()
  {
    return $this->room;
  }

  public function setRoom($room)
  {
    $this->room = $room;
  }

  public function getSection()
  {
    return $this->section;
  }

  public function setSection($section)
  {
    $this->section = $section;
  }

  /**
   * @param Google_Service_Classroom_DriveFolder
   */
  public function setTeacherFolder(Google_Service_Classroom_DriveFolder $teacherFolder)
  {
    $this->teacherFolder = $teacherFolder;
  }
  /**
   * @return Google_Service_Classroom_DriveFolder
   */
  public function getTeacherFolder()
  {
    return $this->teacherFolder;
  }

  public function getTeacherGroupEmail()
  {
    return $this->teacherGroupEmail;
  }

  public function setTeacherGroupEmail($teacherGroupEmail)
  {
    $this->teacherGroupEmail = $teacherGroupEmail;
  }

  public function getUpdateTime()
  {
    return $this->updateTime;
  }

  public function setUpdateTime($updateTime)
  {
    $this->updateTime = $updateTime;
  }
}
