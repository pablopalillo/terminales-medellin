<?php
defined('_JEXEC') or die;

class ComLocationsHelper {
    public static function getLocations($strType, $intParam){
        if(empty($strType) || empty($intParam)){
            return array();
        }
        switch ($strType){
            case 'country' :
                if('170' != $intParam){
                    return array();
                }
                $strSqlStatement = " SELECT * FROM #__register_state WHERE country_code = ".$intParam;
                break;
            case 'state' :
                $strSqlStatement = "SELECT * FROM #__register_city WHERE state_code = ".$intParam;
                break;
            default : 
                return array();
        }
        $db = JFactory::getDbo();
        $db->setQuery(str_replace("#__", $db->getPrefix(), $strSqlStatement));
        return $db->loadObjectList();
    }
}
