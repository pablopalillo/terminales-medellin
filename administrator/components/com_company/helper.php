<?php
defined('_JEXEC') or die;
class CompanyComponentHelper {
    
    public static function saveCompany($company,$terminal,$office,$phone="",$history="",$url=NULL,$ecom=NULL,$logo=NULL){
        if(!empty($company)){
            $db = JFactory::getDBO();
            $strSqlStatement = "INSERT INTO #__company VALUES (LAST_INSERT_ID(),'".$company."','".$terminal."','".$office."','".$phone."','".$history."','".$url."','".$ecom."','".$logo."')";
//            print_r(str_replace('#__', $db->getPrefix(), $strSqlStatement)); exit;
            $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
            if(!$db->query()){
                return false;
            }
            $strSqlStatement = "SELECT * FROM #__company";
            $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
            $mixResponse = $db->loadObjectList();
            if($mixResponse != null){
                return $mixResponse;
            } else {
                return false;
            }
        }
    }
    public static function deleteCompany($intCompany){
        if(!empty($intCompany)){
            $db = JFactory::getDBO();
            $strSqlStatement = "DELETE FROM #__company WHERE id=".$intCompany;
            $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
            if(!$db->query()){
                return false;
            }
            $strSqlStatement = "SELECT * FROM #__company";
            $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
            $mixResponse = $db->loadObjectList();
            if($mixResponse != null){
                return $mixResponse;
            } else {
                return false;
            }
        }
        
    }
    public static function getCompany(){
        $db = JFactory::getDBO();
        $strSqlStatement = "SELECT * FROM #__company";
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