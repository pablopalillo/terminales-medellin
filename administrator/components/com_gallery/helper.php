<?php
defined('_JEXEC') or die;
class GalleryComponentHelper {
    
    public static function saveGallery($strGallery){
        if(!empty($strGallery)){
            $db = JFactory::getDBO();
            $strSqlStatement = "INSERT INTO `#__gallery` (`gallery`) VALUES ('".$strGallery."');";
            $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
            if(!$db->query()){
                return false;
            }
            $strSqlStatement = "SELECT * FROM #__gallery";
            $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
            $mixResponse = $db->loadObjectList();
            if($mixResponse != null){
                return $mixResponse;
            } else {
                JError::raiseError(100, 'FALLÓ EL QUERY DE CONSULTA');
                return false;
            }
        } else {
            JError::raiseError(100, 'FALTARON PARAMETROS');
            return false;
        }
    }
    public static function deleteGallery($intGallery){
        if(!empty($intGallery)){
            $db = JFactory::getDBO();
            $strSqlStatement = "DELETE FROM `#__gallery` WHERE  `id`=".$intGallery." LIMIT 1;";
            $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
            if(!$db->query()){
                return false;
            }
            $strSqlStatement = "SELECT * FROM #__gallery";
            $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
            $mixResponse = $db->loadObjectList();
            if($mixResponse != null){
                return $mixResponse;
            } else {
                return false;
            }
        } else {
            return false;
        }
    }
    public static function saveGelleryItem(
            $intGallery = null,
            $intType = null,
            $strThumb = null,
            $strFile = null,
            $strTitle = null,
            $strDescription = null,
            $strAuthor = null,
            $strDate = null
    ){
        if(!empty($intGallery) && !empty($intType) && !empty($strFile) && !empty($strTitle) && !empty($strDescription) && !empty($strAuthor) && !empty($strDate)){
            $db = JFactory::getDBO();
            $strSqlStatement = "INSERT INTO `a5u6m_media_gallery` "
                ."(`id_gallery`, `id_type`, `thumb`, `file_alias`, `title`, `description`, `author` , `date`) "
                ."VALUES (".$intGallery.", ".$intType.", '".$strThumb."', '".$strFile."', '".$strTitle."', '".$strDescription."', '".$strAuthor."', '".$strDate."');";
            $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
            $db->query();
//            $strSqlStatement = "SELECT * FROM #__media_gallery WHERE id_gallery = ".$intGallery;
            $strSqlStatement = "SELECT #__media_gallery.id, #__media_gallery.id_gallery, #__media_type.`type`, #__media_gallery.thumb, #__media_gallery.file_alias, #__media_gallery.title, #__media_gallery.description, #__media_gallery.author, #__media_gallery.date FROM #__media_gallery INNER JOIN #__media_type ON #__media_type.id = #__media_gallery.id_type WHERE id_gallery = ".$intGallery;
            $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
            return $db->loadObjectList();
        } 
    }
    public static function deleteGalleryItem($intGalleryItem = null, $intGalleryId = null){
        if(!empty($intGalleryItem) && !empty($intGalleryId)){
            $db = JFactory::getDBO();
            $strSqlStatement = "DELETE FROM `#__media_gallery` WHERE  `id`=".$intGalleryItem." LIMIT 1;";
            $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
            $db->query();
//            $strSqlStatement = "SELECT * FROM #__media_gallery WHERE id_gallery = ".$intGalleryId;
            $strSqlStatement = "SELECT #__media_gallery.id, #__media_gallery.id_gallery, #__media_type.`type`, #__media_gallery.thumb, #__media_gallery.file_alias, #__media_gallery.title, #__media_gallery.description, #__media_gallery.author, #__media_gallery.date FROM #__media_gallery INNER JOIN #__media_type ON #__media_type.id = #__media_gallery.id_type WHERE id_gallery = ".$intGalleryId;
            $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
            return $db->loadObjectList();
        } else {
            return false;
        }
    }
    public static function getGallerys(){
            $db = JFactory::getDBO();
            $strSqlStatement = "SELECT * FROM #__gallery";
            $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
            $mixResponse = $db->loadObjectList();
            if($mixResponse != null){
                return $mixResponse;
            } else {
                return false;
            }
    }
    public static function getGallery($intGallery){
        if(!empty($intGallery)){
            $db = JFactory::getDBO();
            $strSqlStatement = "SELECT #__media_gallery.id, #__media_gallery.id_gallery, #__media_type.`type`, #__media_gallery.thumb, #__media_gallery.file_alias, #__media_gallery.title, #__media_gallery.description, #__media_gallery.author, #__media_gallery.date FROM #__media_gallery INNER JOIN #__media_type ON #__media_type.id = #__media_gallery.id_type WHERE id_gallery = ".$intGallery;
            $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
            $mixResponse = $db->loadObjectList();
            return $mixResponse;
        }else{
            return false;
        }
    }
}

?>
