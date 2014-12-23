<?php
defined('_JEXEC') or die;
class SocialNetworkComponentHelper{
    
    public static function saveSocialNetwork($strNetwork = null, $strUser = null, $strUrl = null){
        $db = JFactory::getDBO();
        if(!empty($strNetwork) && !empty($strUser) && !empty($strUrl)){
            $strSqlStatement = "";
            $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
            if(!$db->query()){
//                JError::raiseError(100, 'FALLÓ EL QUERY DE INSERCIÓN');
            }
        } else {
//            JError::raiseError(100, 'FALTARON PARAMETROS');
        }
        $strSqlStatement = "SELECT * FROM #__social_network ";
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        $mixResponse = $db->loadObjectList();
        if($mixResponse != null){
            return $mixResponse;
        } else {
//                JError::raiseError(100, 'FALLÓ EL QUERY DE CONSULTA');
            return false;
        }
        
    }
    public static function deleteSocialNetwork($intNetworkId = null){
        if(!empty($intNetworkId)){
            $db = JFactory::getDBO();
            $strSqlStatement = "";
            $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
            if(!$db->query()){
//                JError::raiseError(100, 'FALLÓ EL QUERY DE DELETE');
//                return false;
            }
        } else {
//            JError::raiseError(100, 'FALTARON PARAMETROS');
//            return false;
        }
        $strSqlStatement = "SELECT * FROM #__social_network ";
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        $mixResponse = $db->loadObjectList();
        if($mixResponse != null){
            return $mixResponse;
        } else {
//            JError::raiseError(100, 'FALLÓ EL QUERY DE CONSULTA');
            return false;
        }
    }
    public static function getSocialNetwork(){
        $db = JFactory::getDBO();
        $strSqlStatement = "SELECT * FROM #__social_network";
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        $mixResponse = $db->loadObjectList();
        if($mixResponse != null){
            return $mixResponse;
        } else {
            JError::raiseError(100, 'FALLÓ EL QUERY DE CONSULTA');
            return false;
        } 
    }
}