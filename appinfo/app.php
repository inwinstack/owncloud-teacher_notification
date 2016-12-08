<?php
/**
 * ownCloud - teacher_notification
 *
 * This file is licensed under the Affero General Public License version 3 or
 * later. See the COPYING file.
 *
 * @author DaubaKao <dauba.k@inwinstack.com>
 * @copyright DaubaKao 2016
 */

namespace OCA\Teacher_Notification\AppInfo;

use OCP\AppFramework\App;
use OCP\Util;

$app = new App('teacher_notification');
$container = $app->getContainer();

Util::addScript('teacher_notification', 'notification');

$config = \OC::$server->getConfig();
$userSession = \OC::$server->getUserSession();
$user = $userSession->getUser();

if($user) {
    $userID = $user->getUID();
}

if (\OCP\App::isEnabled("firstrunwizard") && $userSession->isLoggedIn() && $config->getUserValue($userID, "teacher_notification", "notification", null) === "1" && $config->getUserValue($userID, "firstrunwizard", "show", null) === "0") {
	Util::addScript( 'teacher_notification', 'active');
}
