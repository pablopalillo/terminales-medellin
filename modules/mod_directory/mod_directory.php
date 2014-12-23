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
require_once dirname(__FILE__).DS.'helper.php';
$intPR = (0 == jrequest::getInt('pr')) ? 20 : jrequest::getInt('pr');

$strSearchByName = jrequest::getVar('searchbyname');
$strOrderByName = jrequest::getVar('orderbyname');
$strOrderByArea = jrequest::getVar('orderbyarea');
$strOrder = jrequest::getVar('order');
$strFilterByLetter = jrequest::getVar('filterbyletter');

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