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

class Google_Service_PlusDomains_Comment extends Google_Collection
{
  public $etag;
  public $id;
  public $kind;
  public $published;
  public $selfLink;
  public $updated;
  public $verb;
  protected $collection_key = 'inReplyTo';
  protected $actorType = 'Google_Service_PlusDomains_CommentActor';
  protected $actorDataType = '';
  protected $inReplyToType = 'Google_Service_PlusDomains_CommentInReplyTo';
  protected $inReplyToDataType = 'array';
  protected $objectType = 'Google_Service_PlusDomains_CommentObject';
  protected $objectDataType = '';
  protected $plusonersType = 'Google_Service_PlusDomains_CommentPlusoners';
  protected $plusonersDataType = '';

  /**
   * @param Google_Service_PlusDomains_CommentActor
   */
  public function setActor(Google_Service_PlusDomains_CommentActor $actor)
  {
    $this->actor = $actor;
  }
  /**
   * @return Google_Service_PlusDomains_CommentActor
   */
  public function getActor()
  {
    return $this->actor;
  }

  public function getEtag()
  {
    return $this->etag;
  }

  public function setEtag($etag)
  {
    $this->etag = $etag;
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
   * @param Google_Service_PlusDomains_CommentInReplyTo
   */
  public function setInReplyTo($inReplyTo)
  {
    $this->inReplyTo = $inReplyTo;
  }
  /**
   * @return Google_Service_PlusDomains_CommentInReplyTo
   */
  public function getInReplyTo()
  {
    return $this->inReplyTo;
  }

  public function getKind()
  {
    return $this->kind;
  }

  public function setKind($kind)
  {
    $this->kind = $kind;
  }

  /**
   * @param Google_Service_PlusDomains_CommentObject
   */
  public function setObject(Google_Service_PlusDomains_CommentObject $object)
  {
    $this->object = $object;
  }
  /**
   * @return Google_Service_PlusDomains_CommentObject
   */
  public function getObject()
  {
    return $this->object;
  }
  /**
   * @param Google_Service_PlusDomains_CommentPlusoners
   */
  public function setPlusoners(Google_Service_PlusDomains_CommentPlusoners $plusoners)
  {
    $this->plusoners = $plusoners;
  }
  /**
   * @return Google_Service_PlusDomains_CommentPlusoners
   */
  public function getPlusoners()
  {
    return $this->plusoners;
  }

  public function getPublished()
  {
    return $this->published;
  }

  public function setPublished($published)
  {
    $this->published = $published;
  }

  public function getSelfLink()
  {
    return $this->selfLink;
  }

  public function setSelfLink($selfLink)
  {
    $this->selfLink = $selfLink;
  }

  public function getUpdated()
  {
    return $this->updated;
  }

  public function setUpdated($updated)
  {
    $this->updated = $updated;
  }

  public function getVerb()
  {
    return $this->verb;
  }

  public function setVerb($verb)
  {
    $this->verb = $verb;
  }
}
