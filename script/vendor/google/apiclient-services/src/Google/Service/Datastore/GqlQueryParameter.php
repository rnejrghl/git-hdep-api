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

class Google_Service_Datastore_GqlQueryParameter extends Google_Model
{
  public $cursor;
  protected $valueType = 'Google_Service_Datastore_Value';
  protected $valueDataType = '';

  public function getCursor()
  {
    return $this->cursor;
  }

  public function setCursor($cursor)
  {
    $this->cursor = $cursor;
  }

  /**
   * @param Google_Service_Datastore_Value
   */
  public function setValue(Google_Service_Datastore_Value $value)
  {
    $this->value = $value;
  }
  /**
   * @return Google_Service_Datastore_Value
   */
  public function getValue()
  {
    return $this->value;
  }
}
