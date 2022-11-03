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

namespace FluentMail\Google\Service\Groupssettings\Resource;

use FluentMail\Google\Service\Groupssettings\Groups as GroupsModel;

/**
 * The "groups" collection of methods.
 * Typical usage is:
 *  <code>
 *   $groupssettingsService = new Google\Service\Groupssettings(...);
 *   $groups = $groupssettingsService->groups;
 *  </code>
 */
class Groups extends \Google\Service\Resource
{
  /**
   * Gets one resource by id. (groups.get)
   *
   * @param string $groupUniqueId The group's email address.
   * @param array $optParams Optional parameters.
   * @return GroupsModel
   */
  public function get($groupUniqueId, $optParams = [])
  {
    $params = ['groupUniqueId' => $groupUniqueId];
    $params = array_merge($params, $optParams);
    return $this->call('get', [$params], GroupsModel::class);
  }
  /**
   * Updates an existing resource. This method supports patch semantics.
   * (groups.patch)
   *
   * @param string $groupUniqueId The group's email address.
   * @param GroupsModel $postBody
   * @param array $optParams Optional parameters.
   * @return GroupsModel
   */
  public function patch($groupUniqueId, GroupsModel $postBody, $optParams = [])
  {
    $params = ['groupUniqueId' => $groupUniqueId, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('patch', [$params], GroupsModel::class);
  }
  /**
   * Updates an existing resource. (groups.update)
   *
   * @param string $groupUniqueId The group's email address.
   * @param GroupsModel $postBody
   * @param array $optParams Optional parameters.
   * @return GroupsModel
   */
  public function update($groupUniqueId, GroupsModel $postBody, $optParams = [])
  {
    $params = ['groupUniqueId' => $groupUniqueId, 'postBody' => $postBody];
    $params = array_merge($params, $optParams);
    return $this->call('update', [$params], GroupsModel::class);
  }
}

// Adding a class alias for backwards compatibility with the previous class name.
class_alias(Groups::class, 'Google_Service_Groupssettings_Resource_Groups');