<?php
/**
 * @package	Joomla.Site
 * @subpackage	mod_rent
 * @copyright	Copyright (C) All rights reserved.
 * @license	All rights reserved.
 */

defined('_JEXEC') or die;
require_once 'helper.php';
$strLang = JRequest::getVar('lang', 'es');
$arrData = MedellinTravelModuleHelper::getContent(JRequest::getVar('menutype',false), $strLang);
if('en' == $strLang){
    require_once 'tmpl/default_en.php';
}else{
    require_once 'tmpl/default.php';
}
