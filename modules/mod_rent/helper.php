<?php
/**
 * @package	Joomla.Site
 * @subpackage	mod_weather
 * @copyright	Copyright (C) All rights reserved.
 * @license	All rights reserved.
 * @author      Alexander Hinestroza <alexanxer.hinestroza@fuziona.net>
 */

defined('_JEXEC') or die;

class ModRent
{    
    public static function insertRentValues($date_solicitud,$strNombre_empresa,$numTipo_doc,$num_docu,$str_direccion,$str_telefono,$str_correo,$str_lugar,$str_motivo){
        $db = JFactory::getDBO();
        $strSqlStatement = "INSERT INTO #__rent ".
            "VALUES (LAST_INSERT_ID(),'".$date_solicitud."','".$strNombre_empresa."',".$numTipo_doc.",".$num_docu.",'".$str_direccion."',".$str_telefono.",'".$str_correo."','".$str_lugar."','".$str_motivo."');";
                $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
                $resp = $db->query();
                if($resp){
                    JFactory::getApplication()->enqueueMessage('El registro de su solicitud de alquiler has sido exitoso.');
                    return true;
                }else{
                    return false;
                    JError::raiseError(100, "Problema al registrar la solicitud.");
                }
    } 
}   