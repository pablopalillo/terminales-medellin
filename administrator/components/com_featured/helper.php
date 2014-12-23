<?php
defined('_JEXEC') or die;
class FeaturedComponentHelper{
    
    public static function getFeatureds(){
        $db = JFactory::getDBO();
        $strSqlStatement = "SELECT * FROM #__featured";
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        return $db->loadObjectList();
    }
    public static function saveFeatured(
            $strFeaturedTitle = null, 
            $strFeaturedUrl = null, 
            $strFeaturedImage = null
    ){
        $db = JFactory::getDBO();
        $strSqlStatement = "SELECT MAX(#__featured.`order`)+1 FROM #__featured";
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        $intOrder = $db->loadResult();
        if(!empty($strFeaturedTitle) && !empty($strFeaturedUrl) && !empty($strFeaturedImage)){
            $strSqlStatement = "INSERT INTO `#__featured` (`title`, `url`, `image`, `order`) VALUES "
                ."('".$strFeaturedTitle."', '".base64_decode($strFeaturedUrl)."', '".$strFeaturedImage."', ".$intOrder.");";
            $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
            $db->query();
        }        
        $strSqlStatement = "SELECT * FROM #__featured";
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        return $db->loadObjectList();
    }
    public static function deleteFeatured($intFeaturedId = null){
        $db = JFactory::getDBO();
        if(!empty($intFeaturedId)){
            $strSqlStatement = "DELETE FROM `#__featured` WHERE `id`=".$intFeaturedId." LIMIT 1";
            $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
            $db->query();
        }
        $strSqlStatement = "SELECT * FROM #__featured";
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        return $db->loadObjectList();
    }
    public static function saveFeaturedOrder($arrFeaturedId = null, $arrFeaturedOrder = null){
        $db = JFactory::getDBO();
        if(!empty($arrFeaturedId) && !empty($arrFeaturedOrder)){
            for($x=0; $x<count($arrFeaturedId); $x++){
                $strSqlStatement = "UPDATE `a5u6m_featured` SET `order`=".$arrFeaturedOrder[$x]." WHERE  `id`=".$arrFeaturedId[$x]." LIMIT 1;";
                $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
                $db->query();
            }
            return "Se actualizó el orden de los destacados";
        } else {
            return "No se encontraron destacados para actualizar";
        }
    }
}