


<?php
defined('_JEXEC') or die;
class AlliesComponentHelper {
    
    /**
     * Método para insertar un nuevo aliado
     * @param type $allyName Nombre del aliado
     * @return boolean
     */
    public static function saveAllies($allyName, $intAllyPosition){
        if($allyName!=""){
            $db = JFactory::getDBO();
            $strSqlStatement = "INSERT INTO #__allies_type ".
            "VALUES (LAST_INSERT_ID(),'".$allyName."', ".$intAllyPosition.");";
            $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
            $resp = $db->query();
            if($resp){
//                JFactory::getApplication()->enqueueMessage('El registro del aliado has sido exitoso.');
                return true;
            }else{
//                JError::raiseError(100, "Problema al registrar el aliado.");
                return false;
            }
        }
        else{
//            JError::raiseError(100, "Debe diligenciar el nombre del aliado.");
            return false;
        }
        
    }
    
    /**
     * Método para obtener el listado de aliados
     * @return type Array de aliados
     */
    public static function getAllies(){
        $db = JFactory::getDBO();
        $strSqlStatement = "SELECT * FROM #__allies_type";
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        return $db->loadObjectList();
    }
    
    /**
     * Método para guardar los items de un aliado
     * @param type $allyId Id del aliado
     * @param type $itemName Nombre del item
     * @param type $itemImage Nombre de la imagen del item
     * @param type $itemUrl Url donde apenta el item
     * @return boolean
     */
    public static function saveItemsAllies($allyId,$itemName,$itemImage,$itemUrl){
        $db = JFactory::getDBO();
        $intOrder = $db->loadResult($db->setQuery(str_replace('#__', $db->getPrefix(), 'SELECT MAX(#__allies.`order`)+1 FROM #__allies')));
        $strSqlStatement = "INSERT INTO #__allies ".
        "VALUES (LAST_INSERT_ID(),'".$itemName."','".$itemImage."','".$itemUrl."',".$intOrder.",".$allyId.");";
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        $resp = $db->query();
        if($resp){
            $db->setQuery(str_replace('#__', $db->getPrefix(), "SELECT a.id, a.name, a.image, a.url, a.order, a.ally_id, ai.name as ally_name ".
                "FROM #__allies as a INNER JOIN #__allies_type as ai ON a.ally_id = ai.id ".
                "WHERE a.ally_id = ".$allyId));
            return $db->loadObjectList();
        }
    }
    
    /**
     * Método para obtener todos los items que se hayan crado
     * @return type Arreglo de objetos que contiene los items de los aliados
     */
    public static function getAlliesItems(){
        $db = JFactory::getDBO();
        $strSqlStatement = "SELECT * FROM #__allies order by ally_id";
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        return $db->loadObjectList();
    }
    
//    public static function getAlliesItems2($idAliado){
//        $db = JFactory::getDBO();
//        $strSqlStatement = "SELECT * FROM #__allies WHERE ally_id = ".$idAliado." order by ally_id";
//        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
//        return $db->loadObjectList();
//    }
    
    public static function getAlliesItems2($idAliado){
        $db = JFactory::getDBO();
        $strSqlStatement = "SELECT a.id, a.name, a.image, a.url, a.order, a.ally_id, ai.name as ally_name ".
                "FROM #__allies as a INNER JOIN #__allies_type as ai ON a.ally_id = ai.id ".
                "WHERE a.ally_id = ".$idAliado;
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        return $db->loadObjectList();
    }
    
    /**
     * Método para obtener el valor proximo de la columna order
     * @return type int
     */
    public static function getMaxOrder(){
        $db = JFactory::getDBO();
        $strSqlStatement = "SELECT MAX(`order`)+1 AS next FROM #__allies;";
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        return $db->loadObject();
    }
    
    /**
     * Método para actualizar el orden de los aliados
     * @param type $arregloOrden Arreglo de datos.
     */
    public static function updateOrderAllies($arregloOrden){
        foreach ($arregloOrden as $objOrden){
            $db = JFactory::getDBO();
            $strSqlStatement = "UPDATE #__allies ".
            "SET `order` = ".$objOrden->value." WHERE id=".$objOrden->allie.";";
            $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
            if(!$db->query()){
                return "false";
            }
        }
        return "true";
    }
    
    
     public static function deleteAllyItem($idElemento){    
        $db = JFactory::getDBO();
        $strSqlStatement = "DELETE FROM #__allies ".
        "WHERE id=".$idElemento.";";
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        $resp = $db->query();   
        if($resp){
//            JFactory::getApplication()->enqueueMessage('Borrado exitoso.');
            return true;
        }else{
//            JError::raiseError(100, "Problema al momento de realizar el borrado.");
            return false;
        }
    }
    
    
    public static function deleteAlly($idElemento){    
        $db = JFactory::getDBO();
        $strSqlStatement = "DELETE FROM #__allies_type ".
        "WHERE id=".$idElemento.";";
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        $resp = $db->query();   
        if($resp){
//            JFactory::getApplication()->enqueueMessage('Borrado exitoso.');
            return true;
        }else{
//            JError::raiseError(100, "Problema al momento de realizar el borrado.");
            return false;
        }
    }
    
}
?>
