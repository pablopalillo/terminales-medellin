<?php
/**
 * @package	Joomla.Site
 * @subpackage	mod_advertise
 * @copyright	Copyright (C) All rights reserved.
 * @license	All rights reserved.
 * @author      Juan Carlos Lotero <Juan.Lotero@fuziona.net>
 */

// no direct access
defined('_JEXEC') or die;
JHtml::_('behavior.keepalive');
?>
<div class="legend_blu_" align="left" >&nbsp;&nbsp;Paute Aquí</div>
<div id="content-wrap-company">
    <div style="margin: 10px;" class="frm-content"><br>
        <a style="font-size:16px; font-weight: bold; text-shadow: 0.1em 0.1em 0.2em black;">Solicitud de Pauta Publicitaria</a><div><h2 style="font-weight: bold;" align="right"><a style="color: red;">*</a> Campos Obligatorios</h2></div>
<div style=" width:450px; margin-left: auto; margin-right: auto; margin-top: 50px;">  
     
        <div style="height:35px;">
            <div style="width:150px; float: left; margin-bottom: 5px; font-weight: bold;">Nombre / Empresa Solicitante :</div>
            <div style="width:300px; float: left; margin-bottom: 5px;"><a style="color: red;">*</a><input type="text" id="strNombre" maxlength='50' style="width:260px;"/></div>
        </div>
        <div style="width:150px; float: left; margin-bottom: 5px; font-weight: bold;">CC/NIT:</div>
         <div style="width:300px; float: left; margin-bottom: 5px;">
            <a style="color: red;">*</a><select id="strTipId">
                <option value="">Seleccione...</option>
                <option value="Cedula">CC</option>
                <option value="Nit">NIT</option>                
            </select>
        </div>
        <div style="width:150px; float: left; margin-bottom: 5px; font-weight: bold;">Numero de Documento:</div>
        <div style="width:300px; float: left; margin-bottom: 5px;"><a style="color: red;">*</a><input type="text" id="strNit" id="txtChar" onkeypress="return isNumberKey(event)" maxlength='10' style="width:260px;"/></div>
        <div style="width:150px; float: left; margin-bottom: 5px; font-weight: bold;">Nombre Contacto:</div>
        <div style="width:300px; float: left; margin-bottom: 5px;"><a style="color: red;">*</a><input type="text" id="strNomCont" maxlength='50' style="width:260px;"/></div>
        <div style="width:150px; float: left; margin-bottom: 5px; font-weight: bold;">Teléfono Contacto:</div>
        <div style="width:300px; float: left; margin-bottom: 5px;"><a style="color: red;">*</a><input type="text" id="strPhone" id="txtChar" onkeypress="return isNumberKey(event)" maxlength='7' style="width:260px;"/></div>
        <div style="width:150px; float: left; margin-bottom: 5px; font-weight: bold;">Celular Contacto:</div>
        <div style="width:300px; float: left; margin-bottom: 5px;"><a style="color: red;">*</a><input type="text" id="strCell" id="txtChar" onkeypress="return isNumberKey(event)" maxlength='10' style="width:260px;"/></div>
        <div style="width:150px; float: left; margin-bottom: 5px; font-weight: bold;">E-mail Contacto:</div>
        <div style="width:300px; float: left; margin-bottom: 5px;"><a style="color: red;">*</a><input type="text" id="strMail" maxlength='50' style="width:260px;"/></div>
        <div style="width:300px; float: left; margin-bottom: 5px;">
            <div style="width:150px; float: left; margin-bottom: 5px; font-weight: bold;">Tipo de Pauta</div>
             <a style="color: red;">*</a><select id="strAdv">
                 <option value="">Seleccione...</option>
                 <option value="Video">Video</option>
                 <option value="Audio">Audio</option>
                 <option value="Imagen">Imagen</option>
                 <option value="Texto">Texto</option>
             </select>
        </div>
        <div style="float:left; height: 35px;">
            <div style="width:150px; float: left; margin-bottom: 5px; font-weight: bold;">Frecuencia en que se requiere la pauta:</div>
            <div style="width:300px; float: left; margin-bottom: 5px;"><a style="color: red;">*</a><input type="text" id="strFreq" maxlength='50' style="width:260px;"/></div>
        </div>
        <div style="float:left; height: 35px;">
            <div style="width:150px; float: left; margin-bottom: 5px; font-weight: bold;">Tiempo en el cual la pauta estará en el medio:</div>
            <div style="width:300px; float: left; margin-bottom: 5px;"><a style="color: red;">*</a><input type="text" id="strTime" maxlength='50' style="width:260px;"/></div>
        </div>
        <div style="width:150px; float: left; margin-bottom: 5px; font-weight: bold;">Descripción de la Pauta:</div>
        <div style="width:300px; float: left; margin-bottom: 5px;"><a style="color: red;">*</a><textarea COLS=20 ROWS=6 id='strDescription' maxlength='100' style="width:260px;"></textarea></div>
        
            <input class="frmButton" type="reset" name="reset" value="Limpiar" style="margin-left: 150px;"/><input class="frmButton" type="button" id="sendAdvertiseMail" value="Enviar" />  
        </div>   

<p><b>Nota :</b>El diligenciamiento de este formulario no implica la aprobación de la solicitud de Pauta Publicitaria, Terminales Medellín se reserva el derecho de publicar o no un pauta publicitaria. La persona encargada estará contactándolo para concretar la solicitud.</p>
</div>
    </div>
