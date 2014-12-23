<?php

class PlgVoteHelper {
    public static function getContent($strUrlQuery){
        $db = JFactory::getDBO();
        if('?' == substr($strUrlQuery, 0, 1)){
            $strSqlStatement = "SELECT COUNT(*) AS COUNT, SUM(vote) AS SUM, (SUM(vote)/COUNT(*)) AS PROM  "
            ."FROM #__vote WHERE url_query = '".$strUrlQuery."'";
        } else {
            $strSqlStatement = "SELECT COUNT(*) AS COUNT, SUM(vote) AS SUM, (SUM(vote)/COUNT(*)) AS PROM  "
            ."FROM #__vote WHERE url_query = '?".$strUrlQuery."'";
        }
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        return $db->loadObjectList();
    }
}
?>
