<?php
defined('_JEXEC') or die;
class ContestComponentHelper{
    
    public static function saveContestItem(
            $intContestId = null,
            $strQuestion = null,
            $strType = null, 
            $strOptions= null
    ){
        $db = JFactory::getDBO();
        if(!empty($intContestId) && !empty($strQuestion) && !empty($strType)){
            $strSqlStatement = "INSERT INTO `#__quest_contest` (`id_content`, `id_type`, `question`, `option`) VALUES "
                ."(".$intContestId.", ".$strType.", '".$strQuestion."', '".json_encode(explode(',', $strOptions))."')";
            $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
            $db->query();
        }
        $strSqlStatement = "SELECT #__quest_contest.id, #__content.title, "
                ."#__quest_contest.question, #__quest_contest.`option`, #__quest_contest.id_type "
                ."FROM #__quest_contest "
                ."INNER JOIN #__content ON #__content.id = #__quest_contest.id_content "
                ."WHERE id_content = ".$intContestId;
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        return $db->loadObjectList();
        
    }
    public static function deleteContestItem($intContestItemId = null, $intContestId = null){
        if(!empty($intContestItemId)){
            $db = JFactory::getDBO();
            $strSqlStatement = "DELETE FROM `#__quest_contest` WHERE  `id`=".$intContestItemId." LIMIT 1;";
            $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
            $db->query();
        }
        $strSqlStatement = "SELECT #__quest_contest.id, #__content.title, "
                ."#__quest_contest.question, #__quest_contest.`option`, #__quest_contest.id_type "
                ."FROM #__quest_contest "
                ."INNER JOIN #__content ON #__content.id = #__quest_contest.id_content "
                ."WHERE id_content = ".$intContestId;
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        return $db->loadObjectList();
    }
    public static function getContest(){
        $db = JFactory::getDBO();
        $strSqlStatement = "SELECT * FROM #__content WHERE catid = 9 AND mask <> 1";
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        $mixResponse = $db->loadObjectList();
        if($mixResponse != null){
            return $mixResponse;
        }
        return false;
    }
    public static function getContestItems($intContestId){
        if(!empty($intContestId)){
            $db = JFactory::getDBO();
            $strSqlStatement = "SELECT #__quest_contest.id, #__content.title, "
                ."#__quest_contest.question, #__quest_contest.`option`, #__quest_contest.id_type "
                ."FROM #__quest_contest "
                ."INNER JOIN #__content ON #__content.id = #__quest_contest.id_content "
                ."WHERE id_content = ".$intContestId;
            $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
            return $db->loadObjectList();
        }
    }
    public static function getContestAnswer($intContestId){
        $db = JFactory::getDBO();
        $strSqlStatement = "SELECT "
            ."a5u6m_users.username, "
            ."GROUP_CONCAT(a5u6m_quest_contest.question) AS question, "
            ."a5u6m_answer_contest.answer, "
            ."a5u6m_answer_contest.date_answer "
            ."FROM a5u6m_answer_contest "
            ."INNER JOIN a5u6m_users ON a5u6m_answer_contest.id_user = a5u6m_users.id "
            ."INNER JOIN a5u6m_content ON a5u6m_content.id = a5u6m_answer_contest.id_content "
            ."INNER JOIN a5u6m_quest_contest ON a5u6m_quest_contest.id_content = a5u6m_content.id "
            ."WHERE a5u6m_quest_contest.id_content = ".$intContestId
            ." GROUP BY a5u6m_users.username";
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        return $db->loadObjectList();
    }
    
}
