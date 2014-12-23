<?php

class BannersComponentHelper {
   
   public static function saveBanner($name,$width,$height){
        if(!empty($name)&& !empty($width) && !empty($height) ){
            $db = JFactory::getDBO();
            $strSqlStatement = "INSERT INTO #__banner "
                ."VALUES (LAST_INSERT_ID(),'".$name."',".$width.",".$height.")";
            $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
            if(!$db->query()){
                JError::raiseError(100, "Fallo El Query de Inserción");
                return false;
            }
            $strSqlStatement = "SELECT * FROM #__banner";
            $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
            return $db->loadObjectList();
        }
    }
   public static function deleteBanner($intBanner){
        if(!empty($intBanner)){
            $db = JFactory::getDBO();
            $strSqlStatement = "DELETE FROM #__media_banner WHERE id_banner=".$intBanner;
            $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
            if(!$db->query()){
                JError::raiseError(100, "Fallo El Query de Borrado");
                return false;
            }
            $strSqlStatement = "DELETE FROM #__banner WHERE id=".$intBanner;
            $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
            if(!$db->query()){
                JError::raiseError(100, "Fallo El Query de Borrado");
                return false;
            }
            $strSqlStatement = "SELECT * FROM #__banner";
            $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
            return $db->loadObjectList();
        }
    }
   public static function saveBannerItem($int,$file,$ref){
            $db = JFactory::getDBO();
            $strSqlStatement = "INSERT INTO #__media_banner VALUES (LAST_INSERT_ID(),".$int.",'".$file."','".$ref."')";
            $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
            if(!$db->query()){
                return false;
            }
            $strSqlStatement = "SELECT * FROM #__media_banner where id_banner=".$int;
            $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
            return $db->loadObjectList();
    }
    
   public static function deleteBannerItem($int,$id){
        if(!empty($int)){
            $db = JFactory::getDBO();
            $strSqlStatement = "DELETE FROM #__media_banner WHERE id=".$int;
            $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
            if(!$db->query()){
                JError::raiseError(100, "Fallo El Query de Borrado");
                return false;
            }
            $strSqlStatement = "SELECT * FROM #__media_banner where id_banner=".$id;
            $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
            return $db->loadObjectList();
        }
    }
   public static function getBanners(){
        $db = JFactory::getDBO();
        $strSqlStatement = "SELECT * FROM #__banner";
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        return $db->loadObjectList();
    }
   public static function getBannerItems($int){
        if(!empty($int)){
            $db = JFactory::getDBO();
            $strSqlStatement = "SELECT * FROM #__media_banner WHERE id_banner=".$int;
            $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
            return $db->loadObjectList();
        }
    }
}