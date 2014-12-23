<?php
/**
 * @package	Joomla.Site
 * @subpackage	mod_rent
 * @copyright	Copyright (C) All rights reserved.
 * @license	All rights reserved.
 * @author      Alexander Hinestroza <alexander.hinestroza>
 */

// no direct access
defined('_JEXEC') or die;
JHtml::_('behavior.keepalive');

?>
<div>
    <div class="legend_blu_" align="left">Arriendo de Inmuebles</div>
    <div id="content-wrap-company">
        <div style="margin: 10px; margin-bottom: 30px;" class="frm-content"><br>
            <a style="font-size:16px; font-weight: bold; text-shadow: 0.1em 0.1em 0.2em black;">Solicitud de Arriendo de Inmuebles</a>
            <div style="width: 700px; margin-left: auto; margin-right: auto;">
                <form id="formRent" name="formRent" method="post" style="margin-top: 20px;" action="index.php">
                <input type="hidden" name="option" value="com_rent">
                <form name="formRent" method="post" style="margin-top: 20px;">
                <input type="hidden" name="option" value="com_rent">
                <div style="width:200px; float: left; margin-bottom: 5px;">Fecha solicitud :</div>
                <div style="width:200px; float: left; margin-bottom: 5px;"><input type="date" id="fechaSol"/></div>
                <div style="width:300px; float: left; margin-bottom: 5px; height: 23px;padding-top: 5px;"> Campos obligatorios <b style="color: red;">*</b></div>
                <div style="width:200px; float: left;">Nombre empresa solicitante :</div>
                <div style="width:500px; float: left; margin-bottom: 5px;"><b style="color: red;">*</b><input type="text" id="solName" style="width:260px;" maxlength="50"/></div>
                <div style="width:200px; float: left; margin-bottom: 5px;">CC/NIT:</div>
                 <div style="width:500px; float: left; margin-bottom: 5px;"><b style="color: red;">*</b>
                    <select id="tipoDoc">
                        <option value="tipoDocDefault"></option>
                        <option value="Cedula">CC</option>
                        <option value="Nit">NIT</option>                
                    </select>
                </div>
                <div style="width:200px; float: left; margin-bottom: 5px;">Numero de Identificación:</div>
                <div style="width:500px; float: left; margin-bottom: 5px;"><b style="color: red;">*</b><input type="text" id="docNumber" style="width:260px;" maxlength="12" onkeypress="return isNumberKey(event)"/></div>
                <div style="width:200px; float: left; margin-bottom: 5px;">Dirección :</div>
                <div style="width:500px; float: left; margin-bottom: 5px;"><b style="color: red;">*</b><input type="text" id="address" style="width:260px;" maxlength="20"/></div>
                <div style="width:200px; float: left; margin-bottom: 5px;">Teléfono :</div>
                <div style="width:500px; float: left; margin-bottom: 5px;"><b style="color: red;">*</b><input type="text" id="phone" style="width:260px;" maxlength="10" onkeypress="return isNumberKey(event)"/></div>
                <div style="width:200px; float: left; margin-bottom: 5px;">E-mail :</div>
                <div style="width:500px; float: left; margin-bottom: 5px;"><b style="color: red;">*</b><input type="text" id="solMail" style="width:260px;" maxlength="30"/></div>        
                <div style="width:200px; float: left; margin-bottom: 5px; height: 60px;">Ubicación del Local :</div>
                <div style="width:275px; float: left; margin-bottom: 5px; height: 60px;"><b style="color: red;">*</b><textarea rows="2" cols="30" id="placeInfo" onkeypress="return imposeMaxLength(this, 80);"></textarea></div>
                <div style="width:225px; float: left; margin-bottom: 5px; height: 60px; padding-top: 5px;">(Diligencie en cual terminal y el lugar del local que solicita en arriendo.)</div>
                <div style="width:200px; float: left; margin-bottom: 5px; height: 60px; margin-top: -15px;">Destinación del local :</div>
                <div style="width:275px; float: left; margin-bottom: 5px; height: 60px; margin-top: -15px;"><b style="color: red;">*</b><textarea rows="2" cols="30" id="reasonWhy" onkeypress="return imposeMaxLength(this, 80);"></textarea></div>
                <div style="width:225px; float: left; margin-bottom: 5px; height: 60px; margin-top: -15px ;padding-top: 5px;">(Informe resumidamente el servicio o venta a ofrecer en el local que desea tomar en arriendo.)</div>
                    <input class="frmButton" type="reset" name="reset" value="Limpiar" style="margin-left:207px;"/><input class="frmButton" type="button" id="sendRentMail" value="Enviar"/>
            </div>
            </form>
            <p><b>Contacto </b> Técnico Administrador de bienes, Teléfono: 267-70-76/75/74 Extensión 134.Correo electrónico: <a href="mailto:jose.zapata@terminalesmedellin.com">jose.zapata@terminalesmedellin.com</a></p>
            <b style="margin-left: 10px;">Nota: </b><p>El diligenciamiento de este formulario no implica la aprobación de la solicitud de arriendo, la persona encargada del espacio verificará la disponibilidad
            del auditorio, el día y la hora señalada y estará contactándolo para concretar el tema.</p>
            <br>
            <br>
            <a href="#" style="margin-left: 5px;"><image src="images/share_pdf.png"/>Descargar en Pdf</a>
            <br>
        </div>
    </div>