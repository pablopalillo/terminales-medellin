<?php
/**
 * @package	Joomla.Site
 * @subpackage	mod_reservation
 * @copyright	Copyright (C) All rights reserved.
 * @license	All rights reserved.
 * @author      Juan Lotero <Juan.Lotero@fuziona.net>
 */

defined('_JEXEC') or die;

$answer = JRequest::getVar('answer');
if(!$answer == null){
    require_once dirname(__FILE__).DS.'helper.php';
    modReservationHelper::submitReserveData($answer);   
}
require JModuleHelper::getLayoutPath('mod_reservation', $params->get('layout', 'default'));
?>