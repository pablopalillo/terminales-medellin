<?php
/**
 * @package	Joomla.Site
 * @subpackage	mod_directory
 * @copyright	Copyright (C) All rights reserved.
 * @license	All rights reserved.
 * @author      diego calle <diego.calle@fuziona.net>
 */

defined('_JEXEC') or die;

class modDirectoryHelper
{
    static function getContent(
            $strSearchByName = null, 
            $strFilterByLetter = null, 
            $strOrderByName = null, 
            $strOrderByArea = null,
            $strOrder = null,
            $intDirectoryId
    ){
        $db = JFactory::getDBO();
        $strSqlStatement = "SELECT * FROM #__directory ";
        if($strSearchByName != null){
            $strSqlStatement = $strSqlStatement." WHERE name LIKE '%".$strSearchByName."%'";
        }
        if($strFilterByLetter != null){
            $strSqlStatement = $strSqlStatement." WHERE name LIKE '".$strFilterByLetter."%'";
        }
        if($strSearchByName != null || $strFilterByLetter != null){
            $strSqlStatement = $strSqlStatement." AND directory_type = ".$intDirectoryId;
        } else {
            $strSqlStatement = $strSqlStatement." WHERE directory_type = ".$intDirectoryId;
        }
        if($strOrderByName == 'true'){
            $strSqlStatement = $strSqlStatement." ORDER BY name";
        }
        if($strOrderByArea == 'true'){
            $strSqlStatement = $strSqlStatement." ORDER BY area";
        }
        if($strOrder != null && ($strOrderByArea != null || $strOrderByName != null)){
            if('asc'==$strOrder){
                $strSqlStatement = $strSqlStatement." ASC";
            }
            if('desc'==$strOrder){
                $strSqlStatement = $strSqlStatement." DESC";
            }
        }
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        return $db->loadObjectList();
    }
    
    
}