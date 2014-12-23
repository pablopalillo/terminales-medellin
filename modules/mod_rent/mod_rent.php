<?php
/**
 * @package	Joomla.Site
 * @subpackage	mod_rent
 * @copyright	Copyright (C) All rights reserved.
 * @license	All rights reserved.
 * @author      Alexander Hinestroza <alexander.hinestroza>
 */

defined('_JEXEC') or die;
//obtenemos los datos del formulario
$dateSolicitud = JRequest::getVar('fecha');
$strNombreEmpresa = JRequest::getVar('nombre');
$strTipoDoc = JRequest::getVar('tipoDoc');
$strNumDocu = JRequest::getVar('numDocu');
$strDireccion = JRequest::getVar('direccion');
$strTelefono = JRequest::getVar('telefono');
$strCorreo = JRequest::getVar('correo');
$strLugar = JRequest::getVar('lugar');
$strMotivo = JRequest::getVar('motivo');

//validamos los campos
if($dateSolicitud==null || $strNombreEmpresa==null || $strTipoDoc==null || $strNumDocu==null || $strDireccion==null || $strTelefono==null ||$strCorreo==null ||$strLugar==null ||$strMotivo==null){
    $boolCamposValidos = false;
}else{
    $boolCamposValidos = true;
    require_once dirname(__FILE__).DS.'helper.php';
    if($strTipoDoc=="Cedula"){
        $strTipoDoc=1;
    }else{
        $strTipoDoc=2;
    }
    ModRent::insertRentValues($dateSolicitud,$strNombreEmpresa,$strTipoDoc,$strNumDocu,$strDireccion,$strTelefono,$strCorreo,$strLugar,$strMotivo);
}
require JModuleHelper::getLayoutPath('mod_rent', $params->get('layout', 'default'));
?>