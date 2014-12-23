<?php
/**
 * @package	Joomla.Site
 * @subpackage	mod_intranet
 * @copyright	Copyright (C) All rights reserved.
 * @license	All rights reserved.
 * @author      diego calle <diego.calle@fuziona.net>
 */

defined('_JEXEC') or die;

class ModProjectsNewsFeaturedHelper
{
    public static function getNewsContent($intArticleId){
        $db = JFactory::getDBO();
        $strSqlStatement = "SELECT #__content.id , #__content.title, #__content.introtext, a5u6m_content.fulltext, #__content_media.file_alias, #__media_type.type "
            ."FROM  #__content "
            ."LEFT JOIN #__content_media ON #__content_media.id_content = #__content.id "
            ."LEFT JOIN #__media_type ON #__content_media.id_type = #__media_type.id "
            ."WHERE #__content.catid = 23 AND mask <> 1 ";
                if($intArticleId != 0){
                    $strSqlStatement .= "AND #__content.id = ".$intArticleId." ";
                }
            $strSqlStatement .= "AND #__content.state <> -2 AND (#__media_type.type = 'Imagen' OR #__media_type.type is null) "
            ."GROUP BY #__content.id "
            ."ORDER BY #__content.created DESC LIMIT 7";
//        print_r(str_replace('#__', $db->getPrefix(), $strSqlStatement)); exit;
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        return $db->loadObjectList();
    }
    
    public static function getLastestNewsContent($intArticleId){
        $db = JFactory::getDBO();
        $strSqlStatement = "SELECT #__content.id , #__content.title, #__content.introtext, a5u6m_content.fulltext, #__content_media.file_alias, #__media_type.type "
            ."FROM  #__content "
            ."LEFT JOIN #__content_media ON #__content_media.id_content = #__content.id "
            ."LEFT JOIN #__media_type ON #__content_media.id_type = #__media_type.id "
            ."WHERE #__content.catid = 23 AND mask <> 1 "
            ."AND #__content.state <> -2 "
            ."AND (#__media_type.type = 'Imagen' OR #__media_type.type is null) "
            ."GROUP BY #__content.id "
            ."ORDER BY #__content.created DESC LIMIT 7";
//        print_r(str_replace('#__', $db->getPrefix(), $strSqlStatement)); exit;
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        return $db->loadObjectList();
    }
    
    public static function getFeaturedContent($intCategoryId){
        $db = JFactory::getDBO();
        $strSqlStatement = "SELECT * FROM #__menu WHERE #__menu.menutype = 'transportadores-menu' AND #__menu.published = 1";
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        return $db->loadObjectList();
    }
    
    public static function getNewsCategory($intItemId){
        $db = JFactory::getDBO();
        $strSqlStatement = "SELECT title FROM a5u6m_menu WHERE id = ".$intItemId;
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        return $db->loadResult();
    }
    
    public static function getNewMedia($intItemId){
        $db = JFactory::getDBO();
        $strSqlStatement = "SELECT "
                ."a5u6m_content_media.author, "
                ."a5u6m_content_media.title, "
                ."a5u6m_content_media.thumb, "
                ."a5u6m_content_media.file_alias, "
                ."a5u6m_content_media.description, "
                ."a5u6m_content_media.date, "
                ."a5u6m_media_type.`type` "
            ."FROM "
                ."a5u6m_content_media "
            ."INNER JOIN a5u6m_media_type ON a5u6m_content_media.id_type = a5u6m_media_type.id "
            ."WHERE a5u6m_content_media.id_content = ".$intItemId;
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        return $db->loadObjectList();
    }
    
    public static function getArticleContent($intItemId){
        $db = JFactory::getDBO();
        $strSqlStatement = "SELECT * FROM a5u6m_content WHERE id = ".$intItemId;
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        return $db->loadObjectList();
    }
}