<?php
/**
 * @package	Joomla.Site
 * @subpackage	mod_weather
 * @copyright	Copyright (C) All rights reserved.
 * @license	All rights reserved.
 */

defined('_JEXEC') or die;

class MedellinTravelModuleHelper {    
    public static function getContent($strMenuType, $strLang){
        $db = JFactory::getDBO();
        if($strMenuType == false){
            if('en' == $strLang){
                $strMenuType = 'medTravel-en';
            } else {
                $strMenuType = 'medTravel';
            }
        }
        $strSqlStatement = "SELECT * FROM #__menu WHERE menutype = '".$strMenuType."'";
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        $arrData = $db->loadObjectList();
        $strSqlStatement = "SELECT title FROM #__menu_types WHERE menutype = '".$strMenuType."'";
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        if(array() == $arrData){
            return $arrData;
        }
        if('medTravel' == $strMenuType || 'medTravel-en' == $strMenuType ){
            return $arrData;
        }
        $arrData[0]->menutitle = $db->loadResult();
        return $arrData;
    } 
}   