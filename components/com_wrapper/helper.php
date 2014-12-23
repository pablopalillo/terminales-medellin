<?php

class HelperWrapperComponent {
    
    public static function getContentName($ItemId){
        if(false != $ItemId){
            $strQuery = "SELECT title FROM #__menu WHERE id = ".$ItemId;
            $db = JFactory::getDbo();
            $db->setQuery(str_replace('#__', $db->getPrefix(), $strQuery));
            return $db->loadResult();
        } else {
            return '';
        }
    }
}