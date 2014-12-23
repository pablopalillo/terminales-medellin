<?php
/**
 * @package	Joomla.Site
 * @subpackage	mod_reservation
 * @copyright	Copyright (C) All rights reserved.
 * @license	All rights reserved.
 * @author      Juan Carlos Lotero <Juan.Lotero@fuziona.net>
 */

defined('_JEXEC') or die;

class modReservationHelper
{    
    public static function submitReserveData($Answer){
        $db = JFactory::getDBO();
            if($Answer === null) {
                return false;
            }
            $strSqlStatement = "INSERT INTO #__hall_reservation "
                ."VALUES (LAST_INSERT_ID(),'".$Answer."','".date('Y-m-d')."')";
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