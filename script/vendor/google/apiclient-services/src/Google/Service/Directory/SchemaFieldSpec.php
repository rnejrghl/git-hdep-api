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

class Google_Service_Directory_SchemaFieldSpec extends Google_Model
{
  public $displayName;
  public $etag;
  public $fieldId;
  public $fieldName;
  public $fieldType;
  public $indexed;
  public $kind;
  public $multiValued;
  public $readAccessType;
  protected $numericIndexingSpecType = 'Google_Service_Directory_SchemaFieldSpecNumericIndexingSpec';
  protected $numericIndexingSpecDataType = '';

  public function getDisplayName()
  {
    return $this->displayName;
  }

  public function setDisplayName($displayName)
  {
    $this->displayName = $displayName;
  }

  public function getEtag()
  {
    return $this->etag;
  }

  public function setEtag($etag)
  {
    $this->etag = $etag;
  }

  public function getFieldId()
  {
    return $this->fieldId;
  }

  public function setFieldId($fieldId)
  {
    $this->fieldId = $fieldId;
  }

  public function getFieldName()
  {
    return $this->fieldName;
  }

  public function setFieldName($fieldName)
  {
    $this->fieldName = $fieldName;
  }

  public function getFieldType()
  {
    return $this->fieldType;
  }

  public function setFieldType($fieldType)
  {
    $this->fieldType = $fieldType;
  }

  public function getIndexed()
  {
    return $this->indexed;
  }

  public function setIndexed($indexed)
  {
    $this->indexed = $indexed;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  public function getMultiValued()
  {
    return $this->multiValued;
  }

  public function setMultiValued($multiValued)
  {
    $this->multiValued = $multiValued;
  }

  /**
   * @param Google_Service_Directory_SchemaFieldSpecNumericIndexingSpec
   */
  public function setNumericIndexingSpec(Google_Service_Directory_SchemaFieldSpecNumericIndexingSpec $numericIndexingSpec)
  {
    $this->numericIndexingSpec = $numericIndexingSpec;
  }
  /**
   * @return Google_Service_Directory_SchemaFieldSpecNumericIndexingSpec
   */
  public function getNumericIndexingSpec()
  {
    return $this->numericIndexingSpec;
  }

  public function getReadAccessType()
  {
    return $this->readAccessType;
  }

  public function setReadAccessType($readAccessType)
  {
    $this->readAccessType = $readAccessType;
  }
}
