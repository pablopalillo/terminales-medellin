<?php
/**
 * @package	Joomla.Site
 * @subpackage	mod_rent
 * @copyright	Copyright (C) All rights reserved.
 * @license	All rights reserved.
 */

defined('_JEXEC') or die;
require_once 'helper.php';
$arrData = ServicesModuleHelper::getContent(JRequest::getVar('menutype',false));
require_once 'tmpl/default.php';