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

namespace OCA\Teacher_Notification\Controller;

use OCP\IRequest;
use OCP\AppFramework\Controller;
use OCP\AppFramework\Http\JSONResponse;

class NotificationController extends Controller {

    private $AppName;

    private $config;

	private $userId;

	public function __construct($AppName, IRequest $request, $UserId){
		parent::__construct($AppName, $request);
        $this->AppName = $AppName;
		$this->userId = $UserId;
        $this->config = \OC::$server->getConfig();
	}

    /**
     * set user value 15gb
     *
     * @NoAdminRequired
     * @return JSONresponse
     */
    public function setValue($value)
    {
        if(empty($value)) {
            return;
        }

        $result = array();
        $value = $value == "false" ? 0 : 1;

        $this->config->setUserValue($this->userId, $this->AppName, "notification", $value);
        $result["success"] = $this->config->getUserValue($this->userId, $this->appName, "notification") == $value ? true : false;
        return new JSONResponse($result);
    }
    
}
