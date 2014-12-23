<?php
$db = JFactory::getDBO();
if(JRequest::getVar('uriquery', false) && JRequest::getInt('rate', false)){
    if(array() == SetRatingComponent::validateClient(JRequest::getVar('uriquery'))){
         if(SetRatingComponent::setRating(
            JRequest::getVar('uriquery'), JRequest::getInt('rate'))){
            JFactory::getURI()->setQuery(JRequest::getVar('uriquery'));
            JPluginHelper::importPlugin('share','vote');
            exit;
        } else {
            echo "false"; exit;
        }
    } else {
        echo "false"; exit;
    }
} else {
    echo "false"; exit;
}

 class SetRatingComponent{
     
     public static function validateClient($strUriQuery){
         $db = JFactory::getDBO();
         $strSqlStatement = "SELECT * FROM #__vote WHERE client_ip = '".$_SERVER['REMOTE_ADDR']
            ."' AND url_query = '".$strUriQuery."'";
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        return $db->loadObjectList();
     }
     public static function setRating($strUriQuery, $intRate){
         $db = JFactory::getDBO();
         $strSqlStatement = "INSERT INTO `a5u6m_vote` (`url_query`, `vote`, `client_ip`) VALUES ('"
            .$strUriQuery."', ".$intRate.", '"
            .$_SERVER['REMOTE_ADDR']."')";
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        return $db->Query();
     }
     public static function getData($strUriQuery){
         $db = JFactory::getDBO();
         $strSqlStatement = "SELECT COUNT(*) AS COUNT, SUM(vote) AS SUM, (SUM(vote)/COUNT(*)) AS PROM  "
            ."FROM #__vote WHERE url_query = '?".$strUriQuery."'";
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        return $db->loadObjectList();
     }
 }
?>
