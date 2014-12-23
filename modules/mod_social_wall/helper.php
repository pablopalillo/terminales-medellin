<?php
/**
 * @package	Joomla.Site
 * @subpackage	mod_weather
 * @copyright	Copyright (C) All rights reserved.
 * @license	All rights reserved.
 * @author      Alexander Hinestroza <alexanxer.hinestroza@fuziona.net>
 */

defined('_JEXEC') or die;

class modSocialWallHelper
{    
    public static function getNetworks(){
        $db = JFactory::getDBO();
        $strSqlStatement = "SELECT * FROM #__social_network order by 5";
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        return $db->loadObjectList();
    }
    
    public static function setFacebookAccessToken($strToken){
        date_default_timezone_set ('America/Bogota');
        $db = JFactory::getDBO();
        $strSqlStatement = "UPDATE #__social_network SET acces_token='".$strToken."', date_access_token='".date("Y-m-d H:i:s")."' WHERE  network='facebook'";
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        return $db->query();
    }
    
    public static function getFacebookAccessToken(){
        $db = JFactory::getDBO();
        $strSqlStatement = "SELECT acces_token FROM #__social_network WHERE  network='facebook'";
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        return $db->loadObjectList();
    }
    
    public static function getTwitterUser(){
        $db = JFactory::getDBO();
        $strSqlStatement = "SELECT user FROM #__social_network WHERE network='twitter'";
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        return $db->loadObjectList();
    }
    
    public static function getYoutubeUser(){
        $db = JFactory::getDBO();
        $strSqlStatement = "SELECT user FROM #__social_network WHERE network='youtube'";
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        return $db->loadObjectList();
    }
    public static function getFacebookUser(){
        $db = JFactory::getDBO();
        $strSqlStatement = "SELECT user FROM #__social_network WHERE network='facebook'";
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        return $db->loadObjectList();
    }
    
}   