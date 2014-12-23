<?php
/**
 * @package		Joomla.Site
 * @subpackage	com_content
 * @copyright	Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

jimport('joomla.application.module.helper');
$objModule = $module = JModuleHelper::getModule( 'menu', 'services' );
switch (JRequest::getVar('color', 'green')){
    case 'blue':
        require_once 'tmpl/default_blue.php';
        break;
    case 'orange':
        require_once 'tmpl/default_orange.php';
        break;
    default:
        require_once 'tmpl/default.php';
        break;
}