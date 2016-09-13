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

/**
 * Create your routes in here. The name is the lowercase name of the controller
 * without the controller part, the stuff after the hash is the method.
 * e.g. page#index -> OCA\Teacher_Notification\Controller\PageController->index()
 *
 * The controller class has to be registered in the application.php file since
 * it's instantiated in there
 */
$this->create('teacher_notification', 'notification.php')
	->actionInclude('teacher_notification/notification.php');

return [
    'routes' => [
        ['name' => 'notification#setValue', 'url' => '/set', 'verb' => 'POST']
    ]
];
