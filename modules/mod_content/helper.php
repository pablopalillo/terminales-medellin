<?php
/**
 * @package	Joomla.Site
 * @subpackage	mod_content
 * @copyright	Copyright (C) All rights reserved.
 * @license	All rights reserved.
 * @author      Juan Lotero <Juan.lotero@fuziona.net>
 */

defined('_JEXEC') or die;

class modContentHelper
{
    public static function getContent($intId){
        if(empty($intId)){
            return array(); 
        }
        $db = JFactory::getDBO();
        $strSqlStatement = "SELECT "
                    ."#__content.mask, "
                    ."#__content.id, "
                    ."#__content.catid, "
                    ."#__content.title, "
                    ."#__content.introtext, "
                    ."#__content.fulltext, "
                    ."#__content.created, "
                    ."#__users.name AS user, "
                    ."#__categories.title AS catTitle "
                ."FROM #__content "
                ."INNER JOIN #__categories ON #__content.catid = #__categories.id "
                ."INNER JOIN #__users ON #__content.created_by = #__users.id "
                ."WHERE #__content.id = ".$intId." "
                ."AND #__content.state = 1 ";
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        $arrData = $db->loadObjectList();
        
        if($arrData[0]->mask == 1){
            $strSqlStatement = "SELECT "
                    ."#__content.mask, "
                    ."#__content.id, "
                    ."#__content.catid, "
                    ."#__content.title, "
                    ."#__content.introtext, "
                    ."#__content.fulltext, "
                    ."#__content.created, "
                    ."#__users.name AS user, "
                    ."#__categories.title AS catTitle "
                ."FROM #__content "
                ."INNER JOIN #__categories ON #__content.catid = #__categories.id "
                ."INNER JOIN #__users ON #__content.created_by = #__users.id "
                ."WHERE catid = ".$arrData[0]->catid." "
                ."AND #__content.id <> ".$intId." "
                ."AND #__content.state = 1 "
                ."ORDER BY created DESC ";
            $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
            return $db->loadObjectList();
        } else {
            $strSqlStatement = "SELECT "
                    ."#__content.mask, "
                    ."#__content.id, "
                    ."#__content.catid, "
                    ."#__content.title, "
                    ."#__content.introtext, "
                    ."#__content.fulltext, "
                    ."#__content.created, "
                    ."#__users.name AS user, "
                    ."#__categories.title AS catTitle "
                ."FROM #__content "
                ."INNER JOIN #__categories ON #__content.catid = #__categories.id "
                ."INNER JOIN #__users ON #__content.created_by = #__users.id "
                ."WHERE catid = ".$arrData[0]->catid." "
                ."AND #__content.id <> ".$intId . " AND mask <> 1 "
                ."AND #__content.state = 1 "
                ."ORDER BY created DESC";
            $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
            $arrData2 = $db->loadObjectList();
            return array_merge($arrData, $arrData2);
        }
    }
    
    public static function getContentByCategory($intCategoryId){
        $db = JFactory::getDBO();
        $strSqlStatement = "SELECT "
                    ."#__content.mask, "
                    ."#__content.id, "
                    ."#__content.catid, "
                    ."#__content.title, "
                    ."#__content.introtext, "
                    ."#__content.fulltext, "
                    ."#__content.created, "
                    ."#__users.name AS user, "
                    ."#__categories.title AS catTitle "
                ."FROM #__content "
                ."INNER JOIN #__categories ON #__content.catid = #__categories.id "
                ."INNER JOIN #__users ON #__content.created_by = #__users.id "
                ."WHERE #__content.catid = ".$intCategoryId." "
                ."AND #__content.state = 1 ";
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
//        print_r(str_replace('#__', $db->getPrefix(), $strSqlStatement)); exit;
        return $db->loadObjectList();
    }
    
    public static function getMedia($intId){
        $db = JFactory::getDBO();
        $strSqlStatement = "SELECT #__content_media.file_alias, "
                                ."#__content_media.description, "
                                ."#__content_media.author, "
                                ."#__content_media.title, "
                                ."#__content_media.thumb, "
                                ."#__content_media.date, "
                                ."#__media_type.type "
                            ."FROM #__content_media "
                            ."INNER JOIN #__media_type ON #__media_type.id = #__content_media.id_type "
                            ."WHERE id_content = ".$intId;
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        return $db->loadObjectList();
    }


    public static function getContest($intId){
        
        $db = JFactory::getDBO();
        $strSqlStatement = "SELECT * FROM #__quest_contest WHERE id_content = ".$intId;
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        return $db->loadObjectList();
    }
    public static function getEvent($intId){
        $db = JFactory::getDBO();
        $strSqlStatement = "SELECT * FROM #__event WHERE id_content = ".$intId;
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        return $db->loadObjectList();
    }
    public static function getEventT(){
        $db = JFactory::getDBO();
        $strSqlStatement = "SELECT * FROM #__event";
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        return $db->loadObjectList();
    }
    public static function submitContestData($strJsonAnswer, $intId){
            $db = JFactory::getDBO();
            if(json_decode($strJsonAnswer) === null) {
                return false;
            }
            $objUser =& JFactory::getUser();
            $intUserId = $objUser->get( 'id' );
            $strSqlStatement = "INSERT INTO #__answer_contest "
                ."(id_content, id_user, answer, date_answer) "
                ."VALUES (".$intId.",".$intUserId.",'".$strJsonAnswer."','".date('Y-m-d H:i:s')."')";
            $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
            return $db->query();
    }
    public static function validateGuestUser(){
        $objUser = JFactory::getUser();
        return $objUser->guest;
    }
    public static function validateUserContest($intId){
        $db = JFactory::getDBO();
        $strSqlStatement = "SELECT * FROM #__answer_contest";
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        $arrData3 = $db->loadObjectList();
        $user=JUSER::getInstance()->id;
        foreach($arrData3 as $objetData3){
            if($objetData3->id_user ==$user && $objetData3-> id_content==$intId){
                return False;
                break;
            }
        }
        return True;
    }
    
//    
}