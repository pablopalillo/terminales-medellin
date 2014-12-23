<?php
defined('_JEXEC') or die;
class ContentMediaComponentHelper {
    
    public static function saveMediaContent(
        $intContentId = null,
        $intMediaType = null,
        $strMediaTitle = null,
        $strMediaDescription = null,
        $strMediaAuthor = null,
        $strMediaThumb = null,
        $strMediaFile = null,
        $strMediaDate = null
    ){
        $db = JFactory::getDBO();
        $strSqlStatement = "INSERT INTO `#__content_media` "
            ."(`id_type`, `id_content`, `author`, `title`, `thumb`, `file_alias`, `description`, `date`) VALUES "
            ."(".$intMediaType.", ".$intContentId.", '".$strMediaAuthor."', '"
                .$strMediaTitle."', '".$strMediaThumb."', '".$strMediaFile."', '"
                .$strMediaDescription."', '".$strMediaDate."');";
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        $db->query();
        
        $strSqlStatement = "SELECT * FROM #__content_media WHERE id_content = ".$intContentId;
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        return $db->loadObjectList();
    }
    public static function deleteMediaContent($intMediaId, $intContentId){
        $db = JFactory::getDBO();
        $strSqlStatement = "DELETE FROM `#__content_media` WHERE  `id`=".$intMediaId." LIMIT 1";
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        $db->query();
        
        $strSqlStatement = "SELECT * FROM #__content_media WHERE id_content = ".$intContentId;
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        return $db->loadObjectList();
    }
    public static function getMediaContent($intContentId = null){
        $db = JFactory::getDBO();
        $strSqlStatement = "SELECT * FROM #__content_media WHERE id_content = ".$intContentId;
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        return $db->loadObjectList();
    }
    public static function getContent(){
        $db = JFactory::getDBO();
        $strSqlStatement = "SELECT #__categories.title as category, #__content.id, #__content.title, #__content.created FROM #__content INNER JOIN #__categories ON #__content.catid = #__categories.id WHERE mask != 1";
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        return $db->loadObjectList();
    }
}
?>
