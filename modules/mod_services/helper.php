<?php
/**
 * @package	Joomla.Site
 * @subpackage	mod_weather
 * @copyright	Copyright (C) All rights reserved.
 * @license	All rights reserved.
 */

defined('_JEXEC') or die;

class ServicesModuleHelper {    
    public static function getContent($strMenuType){
        $db = JFactory::getDBO();
        $strSqlStatement = "SELECT * FROM #__menu WHERE menutype = 'services'";
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        return $db->loadObjectList();
    } 
}   