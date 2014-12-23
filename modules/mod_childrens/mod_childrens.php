<?php
/**
 * @package	Joomla.Site
 * @subpackage	mod_banner
 * @copyright	Copyright (C) All rights reserved.
 * @license	All rights reserved.
 * @author      diego calle <diego.calle@fuziona.net>
 */
defined('_JEXEC') or die;
require_once dirname(__FILE__).DS.'helper.php';
$arrGames = modChildrenHelper::getGames();
switch (JRequest::getString('transporte','metro')){
    case 'bus':
        require JModuleHelper::getLayoutPath('mod_childrens', $params->get('layout', 'transporte_bus'));
        break;
    case 'metro':
        require JModuleHelper::getLayoutPath('mod_childrens', $params->get('layout', 'transporte_metro'));
        break;
    case 'pie':
        require JModuleHelper::getLayoutPath('mod_childrens', $params->get('layout', 'transporte_pie'));
        break;
    case 'taxi':
        require JModuleHelper::getLayoutPath('mod_childrens', $params->get('layout', 'transporte_taxi'));
        break;
}
?>