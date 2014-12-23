<?php

class ComRssComponent {
    public static function getContent(){
        $db = JFactory::getDBO();
        $strSqlStatement = "SELECT "
            ."a5u6m_content.title AS title, "
            ."a5u6m_content.`fulltext` AS content, "
            ."a5u6m_content.created AS date, "
//            ."a5u6m_content.`language` AS language, "
            ."a5u6m_users.name AS author, "
            ."a5u6m_categories.title AS category "
        ."FROM a5u6m_content "
        ."INNER JOIN a5u6m_users ON a5u6m_users.id = a5u6m_content.created_by "
        ."INNER JOIN a5u6m_categories ON a5u6m_categories.id = a5u6m_content.catid "
        ."WHERE a5u6m_content.mask <> 1 "
        ."ORDER BY date DESC ";
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        return $db->loadObjectList();
    }
}


?>
