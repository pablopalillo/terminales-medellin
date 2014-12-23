<?php
class DirectoryComponentHelper {
    
    public static function saveDirectory($dir){
        $db = JFactory::getDBO();
        $strSqlStatement = "INSERT INTO #__directory_type "
                ."VALUES (LAST_INSERT_ID(),'".$dir."')";
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        if(!$db->query()){
                JError::raiseError(100, "Fallo El Query de Inserción");
                return false;
            }
        $strSqlStatement = "SELECT * FROM #__directory_type";
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        return $db->loadObjectList();
    }
    public static function deleteDirectory($intDirectory){
        $db = JFactory::getDBO();
        $strSqlStatement = "DELETE FROM #__directory_type WHERE id =".$intDirectory;
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        if(!$db->query()){
                JError::raiseError(100, "Fallo El Query de Borrado");
                return false;
            }
        $strSqlStatement = "SELECT * FROM #__directory_type";
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        return $db->loadObjectList();
    }
    public static function getDirectory(){
        $db = JFactory::getDBO();
        $strSqlStatement = "SELECT * FROM #__directory_type";
            $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
            return $db->loadObjectList();
    }
    public static function saveNewDirectoryItem(){
         
    }
    public static function saveDirectoryItem($dirId, $name, $area, $phone, $mail){
        $db = JFactory::getDBO();
        $strSqlStatement = "INSERT INTO #__directory "
                ."VALUES (LAST_INSERT_ID(),".$dirId.",'".$name."','".$area."','".$phone."','".$mail."')";
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        if(!$db->query()){
                JError::raiseError(100, "Fallo El Query de Inserción");
                return false;
            }
        $strSqlStatement = "SELECT * FROM #__directory where directory_type=".$dirId;
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        return $db->loadObjectList();
    }
    public static function deleteDirectoryItem($intDirectoryItem,$dirId){
        $db = JFactory::getDBO();
        $strSqlStatement = "DELETE FROM #__directory WHERE id =".$intDirectoryItem;
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        if(!$db->query()){
                JError::raiseError(100, "Fallo El Query de Borrado");
                return false;
            }
        $strSqlStatement = "SELECT * FROM #__directory WHERE directory_type=".$dirId;
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        return $db->loadObjectList();
    }
    public static function getDirectoryItem($dir){
      $db = JFactory::getDBO();
        $strSqlStatement = "SELECT * FROM #__directory WHERE directory_type = ".$dir;
            $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
            return $db->loadObjectList();
    }
}
?>