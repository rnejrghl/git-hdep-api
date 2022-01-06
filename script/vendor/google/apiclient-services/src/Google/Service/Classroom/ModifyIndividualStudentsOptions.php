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

class Google_Service_Classroom_ModifyIndividualStudentsOptions extends Google_Collection
{
  public $addStudentIds;
  public $removeStudentIds;
  protected $collection_key = 'removeStudentIds';

  public function getAddStudentIds()
  {
    return $this->addStudentIds;
  }

  public function setAddStudentIds($addStudentIds)
  {
    $this->addStudentIds = $addStudentIds;
  }

  public function getRemoveStudentIds()
  {
    return $this->removeStudentIds;
  }

  public function setRemoveStudentIds($removeStudentIds)
  {
    $this->removeStudentIds = $removeStudentIds;
  }
}
