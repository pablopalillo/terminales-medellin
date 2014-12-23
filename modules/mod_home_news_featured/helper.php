<?php
/**
 * @package	Joomla.Site
 * @subpackage	mod_home_news_featured
 * @copyright	Copyright (C) All rights reserved.
 * @license	All rights reserved.
 * @author      diego calle <diego.calle@fuziona.net>
 */

defined('_JEXEC') or die;

class modHomeNewsFeaturedHelper
{
    static function getNewsContent(){
        $db = JFactory::getDBO();
        $strSqlStatement = "SELECT #__content.id , #__content.title, #__content.introtext, #__content_media.file_alias, #__media_type.type "
            ."FROM  #__content "
            ."LEFT JOIN #__content_media ON #__content_media.id_content = #__content.id "
            ."INNER JOIN #__media_type ON #__content_media.id_type = #__media_type.id "
            ."WHERE #__content.catid = 8 AND mask <> 1 "
            ."AND #__media_type.type = 'Imagen' "
            ."GROUP BY a5u6m_content.id "
            ."ORDER BY #__content.created DESC LIMIT 7";
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        return $db->loadObjectList();
    }
    
    static function getFeaturedContent(){
        $db = JFactory::getDBO();
        $strSqlStatement = "SELECT * FROM #__featured "
            ."ORDER BY #__featured.order ASC";
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        return $db->loadObjectList();
    }
}