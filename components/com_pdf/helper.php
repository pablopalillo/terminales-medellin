<?php

class PdfComponentHelper{
    
    public static function getContent($intId){
        $db = JFactory::getDbo();
        $strSqlStatement = "SELECT * FROM #__content WHERE id = ".$intId;
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        return $db->loadObjectList();
    }
}
?>
