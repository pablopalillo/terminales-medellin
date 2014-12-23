<?php
/**
 * @package	Joomla.Site
 * @subpackage	mod_StrategicAllies
 * @copyright	Copyright (C) All rights reserved.
 * @license	All rights reserved.
 * @author      yesid montoya <yesid.montoya@fuziona.net>
 */

defined('_JEXEC') or die;
require_once dirname(__FILE__).DS.'helper.php';


$arrData = modStrategicAlliesHelper::getContent($params->get('allies_type', 1));
if($arrData[0]->ally_position == 2){
    require JModuleHelper::getLayoutPath('mod_strategic_allies', $params->get('layout', 'defaultVertical'));
} else {
    require JModuleHelper::getLayoutPath('mod_strategic_allies', $params->get('layout', 'default'));
}


