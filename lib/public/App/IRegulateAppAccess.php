<?php
/**
 * @author Sujith Haridasan <sharidasan@owncloud.com>
 *
 * @copyright Copyright (c) 2019, ownCloud GmbH
 * @license AGPL-3.0
 *
 * This code is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Affero General Public License, version 3,
 * as published by the Free Software Foundation.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Affero General Public License for more details.
 *
 * You should have received a copy of the GNU Affero General Public License, version 3,
 * along with this program.  If not, see <http://www.gnu.org/licenses/>
 *
 */

namespace OCP\App;

use OCP\IUser;

/**
 * Interface IRegulateAppAccess
 *
 * @package OCP\App
 * @since 10.3.1
 */
interface IRegulateAppAccess {
	/**
	 * Set the whitelisted apps for user.
	 * This method helps apps to store the information related to apps which can
	 * be accessed by user. The advantage of using this method is it helps core
	 * to grab access to the apps which are accessible to user. This method returns
	 * true if the apps list is set successfully. Else false is returned. Remember
	 * this method can overwrite any existing data. Say for example an app decided
	 * to update the whitelists accessible for user, it would be done.
	 *
	 * @param IUser $user
	 * @param array $apps
	 * @return bool
	 * @since 10.3.1
	 */
	public function setWhitelistedAppsForUser(IUser $user, $apps);

	/**
	 * Get the whitelisted apps for the user
	 * This method returns true if there is data to return. Else false.
	 * It looks into the key uid in the appsAvailableForUsers array and if found
	 * returns an array. So if a user needs to know if it can access any apps, it
	 * could fetch this data and check if the user has access to it.
	 *
	 * @param IUser $user
	 * @return bool|mixed
	 * @since 10.3.1
	 */
	public function getWhitelistedAppsForUser(IUser $user);
}
