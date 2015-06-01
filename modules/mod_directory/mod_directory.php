<?php
/**
 * @package	Joomla.Site
 * @subpackage	mod_directory
 * @copyright	Copyright (C) All rights reserved.
 * @license	All rights reserved.
 * @author      diego calle <diego.calle@fuziona.net>
 */

defined('_JEXEC') or die;
require JModuleHelper::getLayoutPath('mod_directory', $params->get('layout', 'organi'));
if(!defined('DS')) define('DS', DIRECTORY_SEPARATOR);

require_once dirname(__FILE__).DS.'helper.php';
$intPR = (0 == JRequest::getInt('pr')) ? 20 : JRequest::getInt('pr');

$strSearchByName = JRequest::getVar('searchbyname');
$strOrderByName = JRequest::getVar('orderbyname');
$strOrderByArea = JRequest::getVar('orderbyarea');
$strOrder = JRequest::getVar('order');
$strFilterByLetter = JRequest::getVar('filterbyletter');

$arrData = modDirectoryHelper::getContent($strSearchByName, $strFilterByLetter,$strOrderByName,$strOrderByArea,$strOrder, JRequest::getInt('directory', 1));

switch (JRequest::getVar('color','green')){
    case 'blue':
        require JModuleHelper::getLayoutPath('mod_directory', $params->get('layout', 'default_blue'));
        break;
    case 'orange':
        require JModuleHelper::getLayoutPath('mod_directory', $params->get('layout', 'default_orange'));
        break;
    default:
        require JModuleHelper::getLayoutPath('mod_directory', $params->get('layout', 'default'));
        break;
}
