<?php
namespace OCA\Teacher_Notification;

use OCP\Template;
use OCP\User;

// Check if we are a user
User::checkLoggedIn();

$tmpl = new Template('teacher_notification', 'notification', '');
$tmpl->printPage();
