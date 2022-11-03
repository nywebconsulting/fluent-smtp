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

namespace FluentMail\Google\Service\Contentwarehouse;

class AnchorsRedundantAnchorInfo extends \Google\Model
{
  /**
   * @var string
   */
  public $anchorsDropped;
  /**
   * @var string
   */
  public $domain;
  /**
   * @var string
   */
  public $text;

  /**
   * @param string
   */
  public function setAnchorsDropped($anchorsDropped)
  {
    $this->anchorsDropped = $anchorsDropped;
  }
  /**
   * @return string
   */
  public function getAnchorsDropped()
  {
    return $this->anchorsDropped;
  }
  /**
   * @param string
   */
  public function setDomain($domain)
  {
    $this->domain = $domain;
  }
  /**
   * @return string
   */
  public function getDomain()
  {
    return $this->domain;
  }
  /**
   * @param string
   */
  public function setText($text)
  {
    $this->text = $text;
  }
  /**
   * @return string
   */
  public function getText()
  {
    return $this->text;
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(AnchorsRedundantAnchorInfo::class, 'Google_Service_Contentwarehouse_AnchorsRedundantAnchorInfo');