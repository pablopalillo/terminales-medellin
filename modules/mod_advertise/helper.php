<?php
/**
 * @package	Joomla.Site
 * @subpackage	mod_weather
 * @copyright	Copyright (C) All rights reserved.
 * @license	All rights reserved.
 * @author      Alexander Hinestroza <alexanxer.hinestroza@fuziona.net>
 */

defined('_JEXEC') or die;

class modAdvertise
{    
    public static function getNotificacion(){
        $db = JFactory::getDBO();
        $strSqlStatement = "SELECT * FROM #__social_network order by 5";
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        return $db->loadObjectList();
    } 
}   