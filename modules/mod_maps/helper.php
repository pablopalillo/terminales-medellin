<?php
/**
 * @package	Joomla.Site
 * @subpackage	mod_content
 * @copyright	Copyright (C) All rights reserved.
 * @license	All rights reserved.
 * @author      Juan Lotero <Juan.lotero@fuziona.net>
 */

defined('_JEXEC') or die;
class modMapsHelper
{
    static function getMaps($intId){
        $db = JFactory::getDBO();
        $strSqlStatement = "SELECT * FROM #__map_type WHERE id = ".$intId;
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        $arrData = $db->loadObjectList();
        return $arrData;
    }
    
    static function getMaps2($intId){
        $db = JFactory::getDBO();
        $strSqlStatement = "SELECT * FROM #__map WHERE id_type = ".$intId;
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        $arrData = $db->loadObjectList();
        return $arrData;
    }
    
    static function getMapsInfo($intId){
        $db = JFactory::getDBO();
        $strSqlStatement = "SELECT * ".
                "FROM #__map as m INNER JOIN #__route as r ON m.id_type = r.id_map ".
                "WHERE m.id_type = ".$intId;
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        $arrDataInfo = $db->loadObjectList();
        return $arrDataInfo;   
    }
    
    static function getCompaniesVsRoutes($intIdRoute){
        $db = JFactory::getDBO();
        $strSqlStatement = "SELECT * ".
                "FROM #__company_route as cr INNER JOIN #__company as c ON c.id = cr.id_company ".
                "WHERE cr.id_route = ".$intIdRoute;
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        $arrDataCompanies = $db->loadObjectList();
        return $arrDataCompanies;   
    }
    
    static function getCompanyWays($intIdRoute){
        $db = JFactory::getDBO();
        $strSqlStatement = "SELECT * ".
                "FROM #__way ".
                "WHERE id_route = ".$intIdRoute;
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        $arrDataWays = $db->loadObjectList();
        return $arrDataWays;   
    }
    
    static function getTerminalData($intIdmap){
        $db = JFactory::getDBO();
        $strSqlStatement = "SELECT * ".
                "FROM #__map ".
                "INNER JOIN #__map_places on #__map.id = #__map_places.id_map ".
                "WHERE id_type =".$intIdmap;
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        $arrDataWays = $db->loadObjectList();
        return $arrDataWays;   
    }
}

?>
