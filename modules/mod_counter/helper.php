<?php
/**
 * @package	Joomla.Site
 * @subpackage	mod_counter
 * @copyright	Copyright (C) All rights reserved.
 * @license	All rights reserved.
 * @author      diego calle <diego.calle@fuziona.net>
 */

defined('_JEXEC') or die;

class modCounterHelper
{
    public static function setCounter(){
        $db = JFactory::getDBO();
        $strSqlStatement = "INSERT INTO `#__counter` "
            ."(`ip_client`, `date`) VALUES ('"
            .$_SERVER['REMOTE_ADDR']."', '"
            .date('Y-m-d H:i:s')."')";
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        $db->query();
    }

    public static function getContent(){
        $db = JFactory::getDBO();
        $strSqlStatement = "SELECT COUNT(*) AS count FROM #__counter";
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        return $db->loadObjectList();
    }
}