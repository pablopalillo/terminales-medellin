<?php
defined('_JEXEC') or die;
class PollComponentHelper{
    
    public static function savePoll($strPoll = null, $strStartDate = null, $strFinishDate = null, $intType = null){
        $db = JFactory::getDBO();
        $strSqlStatement = "UPDATE `#__poll` SET `active`=0 WHERE  `active`=1";
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        $db->query();
        
        if(!empty($strPoll) && !empty($strStartDate) && !empty($strFinishDate) && !empty($intType) ){
            $strSqlStatement = "INSERT INTO #__poll ( poll, start_date, finish_date, type, active ) "
                ."VALUES ( '".$strPoll."', '".$strStartDate."', '".$strFinishDate."', '".$intType."', 1) ";
            $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
            if(!$db->query()){
//                JError::raiseError(100, 'FALLÓ EL QUERY DE INSERCIÓN');
            }
        } else {
//            JError::raiseError(100, 'FALTARON PARAMETROS');
        }
        $strSqlStatement = "SELECT * FROM #__poll";
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        $mixResponse = $db->loadObjectList();
        if($mixResponse != null){
            return $mixResponse;
        } else {
//            JError::raiseError(100, 'FALLÓ EL QUERY DE CONSULTA');
            return false;
        }
    }
    
    public static function deletePoll($intPollId){
        $db = JFactory::getDBO();
        if($intPollId){
            $strSqlStatement = "DELETE FROM `#__poll` WHERE  `id`=".$intPollId." LIMIT 1;";
            $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
            if(!$db->query()){
//                JError::raiseError(100, 'FALLÓ EL QUERY DE DELETE');
                return false;
            }
        } else {
//            JError::raiseError(100, 'FALTARON PARAMETROS');
            return false;
        }
        $strSqlStatement = "SELECT * FROM #__poll";
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        $mixResponse = $db->loadObjectList();
        if($mixResponse != null){
            return $mixResponse;
        } else {
//            JError::raiseError(100, 'FALLÓ EL QUERY DE CONSULTA');
            return false;
        }
    }
    
    public static function savePollItem($intPoll, $strPollItem){
        $db = JFactory::getDBO();
        $strSqlStatement = "SELECT #__poll.option FROM #__poll WHERE id=".$intPoll;
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        $arrResult = json_decode($db->loadResult());
        $arrResult[] = $strPollItem;
        $strPollOptions = '[';
        foreach($arrResult AS $strResult){
            $strPollOptions .= '"';
            $strPollOptions .= $strResult;
            $strPollOptions .= '",';
        }
        $strPollOptions = trim($strPollOptions, ',');
        $strPollOptions .= ']';
        if(!empty($strPollItem)){
            $strSqlStatement = "UPDATE `#__poll` SET `option`='".$strPollOptions."' WHERE  `id`=".$intPoll;
            $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
            if(!$db->query()){
//                JError::raiseError(100, 'FALLÓ EL QUERY DE INSERCIÓN');
//                return false;
            }
        } else {
//            JError::raiseError(100, 'FALTARON PARAMETROS');
//            return false;
        }
        $strSqlStatement = "SELECT * FROM #__poll WHERE id = ".$intPoll;
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        $mixResponse = $db->loadObjectList();
        if($mixResponse != null){
            return $mixResponse;
        } else {
//            JError::raiseError(100, 'FALLÓ EL QUERY DE CONSULTA');
            return false;
        }
    }
    
    public static function deletePollItem($intPoll, $intPollItemId){
        $db = JFactory::getDBO();
        $strSqlStatement = "SELECT #__poll.option FROM #__poll WHERE id=".$intPoll;
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        $arrResult = json_decode($db->loadResult());
        $arrNewResult = array();
        for($x=0; $x<count($arrResult); $x++){
            if($x != $intPollItemId){
               $arrNewResult[] = $arrResult[$x]; 
            }
        }
        $strPollOptions = json_encode($arrNewResult);
        $strSqlStatement = "UPDATE `#__poll` SET `option`='".$strPollOptions."' WHERE  `id`=".$intPoll;
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        if(!$db->query()){
//                JError::raiseError(100, 'FALLÓ EL QUERY DE INSERCIÓN');
//                return false;
        } else {
//            JError::raiseError(100, 'FALTARON PARAMETROS');
//            return false;
        }
        $strSqlStatement = "SELECT * FROM #__poll WHERE id=".$intPoll;
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        $mixResponse = $db->loadObjectList();
        if($mixResponse != null){
            return $mixResponse;
        } else {
//            JError::raiseError(100, 'FALLÓ EL QUERY DE CONSULTA');
            return false;
        }
    }
    
    public static function getPoll($intPollId){
        $db = JFactory::getDBO();
        if(!empty($intPollId)){
            $strSqlStatement = "SELECT * FROM #__poll WHERE id = ".$intPollId;
            $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
            $mixResponse = $db->loadObjectList();
            if($mixResponse != null){
                return $mixResponse;
            } else {
//                JError::raiseError(100, 'FALLÓ EL QUERY DE CONSULTA');
                return false;
            }
        } else {
//            JError::raiseError(100, 'FALTAN PARAMETROS');
            return false;
        }
    }
    
    public static function getPolls(){
        $db = JFactory::getDBO();
        $strSqlStatement = "SELECT * FROM #__poll";
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        $mixResponse = $db->loadObjectList();
        if($mixResponse != null){
            return $mixResponse;
        } else {
//            JError::raiseError(100, 'FALLÓ EL QUERY DE CONSULTA');
            return false;
        }
    }
    
    public static function setActivePoll($intPoll = null){
        $db = JFactory::getDBO();
        if(!empty($intPoll)){
            $strSqlStatement = "UPDATE `#__poll` SET `active`=0 WHERE `active`=1";
            $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
            $db->query();

            $strSqlStatement = "UPDATE `#__poll` SET `active`=1 WHERE `id`=".$intPoll;
            $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
            $db->query();
        }
        $strSqlStatement = "SELECT * FROM #__poll ";
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        $mixResponse = $db->loadObjectList();
        if($mixResponse != null){
            return $mixResponse;
        } else {
//            JError::raiseError(100, 'FALLÓ EL QUERY DE CONSULTA');
            return false;
        }
    }
    
     public static function viewAnswer($intPoll = null){
         if(!empty($intPoll)){
            $db = JFactory::getDBO();
            $strSqlStatement = "SELECT * FROM #__answer_poll WHERE id_poll = ".$intPoll;
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
}