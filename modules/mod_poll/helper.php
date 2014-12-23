<?php
/**
 * @package	Joomla.Site
 * @subpackage	mod_poll
 * @copyright	Copyright (C) All rights reserved.
 * @license	All rights reserved.
 * @author      yesid montoya <yesid.montoya@fuziona.net>
 */

defined('_JEXEC') or die;

class modPollHelper
{
    static function getContent () {
        $db = JFactory::getDBO();
        $strSqlStatement = "SELECT * FROM #__poll WHERE active = '1'";
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        return $db->loadObjectList();
   }
   static function getResult($intId){
        $db = JFactory::getDBO();
        $strSqlStatement = "SELECT * FROM #__answer_poll WHERE id_poll = '".$intId."'";
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        return $db->loadObjectList();
   }
   static function setContent ($intIdPoll, $strAnswer){
       if(!empty($strAnswer)){
//            $db = JFactory::getDBO();
            $strDate = date('Y-m-d H:i:s');
            $strIpClient = $_SERVER['REMOTE_ADDR'];
//            $strSqlStatement = "SELECT * FROM #__answer_poll WHERE id_poll = "
//                .$intIdPoll." AND ip_client = '".$strIpClient."'";
//            $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
//            $arr = $db->loadObjectList();
//           if(!isset($arr[0]->id)){
                $db = JFactory::getDBO();
                $strSqlStatement = "INSERT INTO #__answer_poll (id_poll, ip_client,
                 answer, date) VALUES ('".$intIdPoll."','".$strIpClient."','".$strAnswer."', '".$strDate."')";
                $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
                return $db->query();
//        }
      }
      return false;
   }
}
