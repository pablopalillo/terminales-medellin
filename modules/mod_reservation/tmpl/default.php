<?php
/**
 * @package	Joomla.Site
 * @subpackage	mod_content
 * @copyright	Copyright (C) All rights reserved.
 * @license	All rights reserved.
 * @author      Juan Lotero <Juan.lotero@fuziona.net>
 */

// no direct access
defined('_JEXEC') or die;
JHtml::_('behavior.keepalive');
?>
<div class="legend_blu_" align="left" >&nbsp;&nbsp;Reserva de Auditorio</div>
<div id="content-wrap-company">
    <div style="margin: 10px;" class="frm-content"><br>
        <a style="font-size:16px; font-weight: bold; text-shadow: 0.1em 0.1em 0.2em black;">Solicitud reserva de auditorio</a><div><h2 style="font-weight: bold;" align="right"><a style="color: red;">*</a> Campos obligatorios</h2></div>
<div style=" width:450px; margin-left: auto; margin-right: auto; margin-top: 50px;">  
     
        <div style="width:150px; float: left; margin-bottom: 5px; font-weight: bold; height: 30px;">Nombre/Empresa solicitante :</div>
        <div style="width:300px; float: left; margin-bottom: 5px;  height: 30px;"><a style="color: red;">*</a><input type="text" id="rsvName" maxlength='50' style="width:260px;"/></div>
        <div style="width:150px; float: left; margin-bottom: 5px; font-weight: bold;">CC/NIT:</div>
         <div style="width:300px; float: left; margin-bottom: 5px;">
            <a style="color: red;">*</a><select id="tRsv">
                <option value="">Seleccione...</option>
                <option value="Cedula">CC</option>
                <option value="Nit">NIT</option>                
            </select>
        </div>
        <div style="width:150px; float: left; margin-bottom: 5px; font-weight: bold;">Número de identificación:</div>
        <div style="width:300px; float: left; margin-bottom: 5px;"><a style="color: red;">*</a><input type="text" id="rsvId" maxlength='20' style="width:260px;"/></div>
        <div style="width:150px; float: left; margin-bottom: 5px; font-weight: bold;">Nombre del responsable:</div>
        <div style="width:300px; float: left; margin-bottom: 5px;"><a style="color: red;">*</a><input type="text" id="rsvResp" maxlength='50' style="width:260px;"/></div>
        <div style="width:150px; float: left; margin-bottom: 5px; font-weight: bold;">Teléfono del responsable:</div>
        <div style="width:300px; float: left; margin-bottom: 5px;"><a style="color: red;">*</a><input type="text" id="rsvPhone" maxlength='7' style="width:260px;"/></div>
        <div style="width:150px; float: left; margin-bottom: 5px; font-weight: bold;">Celular del responsable:</div>
        <div style="width:300px; float: left; margin-bottom: 5px;"><a style="color: red;">*</a><input type="text" id="rsvCell" maxlength='10' style="width:260px;"/></div>
        <div style="width:150px; float: left; margin-bottom: 5px; font-weight: bold;">E-mail del responsable:</div>
        <div style="width:300px; float: left; margin-bottom: 5px;"><a style="color: red;">*</a><input type="text" id="rsvMail" maxlength='50' style="width:260px;"/></div>
        <div style="width:150px; float: left; margin-bottom: 5px; font-weight: bold;">Tipo de evento</div>
        <div style="width:300px; float: left; margin-bottom: 5px;">
             <a style="color: red;">*</a><select id="tRsvEvent">
                 <option value="">Seleccione...</option>
                 <option value="Capacitación">Capacitación</option>
                 <option value="Conferencia">Conferencia</option>
                 <option value="Otros">Otros</option>
             </select>
        </div>        
        <div style="width:150px; float: left; margin-bottom: 5px; font-weight: bold;">Fecha del evento:</div>
        <div style="width:300px; float: left; margin-bottom: 5px;"><a style="color: red;">*</a><input type="date" id="rsvDate"/></div>
        <div style="width:150px; float: left; margin-bottom: 5px; font-weight: bold;">Horario de alquiler:</div>
        <div style="width:300px; float: left; margin-bottom: 5px;"><a style="color: red;">*</a><input type="text" id="rsvHoraInicio" style="width:50px;"/>&nbsp; A &nbsp;<input type="text" id="rsvHoraFin" style="width:50px;"/></div>
        <div style="width:150px; float: left; margin-bottom: 5px; font-weight: bold;">Número de asistentes:</div>
        <div style="width:300px; float: left; margin-bottom: 5px;"><a style="color: red;">*</a><input type="text" id="rsvAsist" maxlength='3' style="width:50px;"/></div>
        <div style="width:150px; float: left; margin-bottom: 5px; font-weight: bold;">Ayudas audiovisuales:</div>
        <div style="width:150px; float: left; margin-bottom: 5px; "><input type="checkbox" id="beam" />Video Beam</div>
        <div style="width:150px; margin-left: 150px; margin-bottom: 5px;"><br /><input type="checkbox" id="sound" />Sonido</div>
            <input class="frmButton" type="reset" name="reset" value="Limpiar" style="margin-left: 150px;"/><input class="frmButton" type="button" name="submit" id="sendSrvMail" value="Enviar" />  
        </div>   
<p><b>Nota :</b>El diligenciamiento de este formulario no implica la aprobación de la solicitud de arriendo, la persona encargada del espacio verificará la disponibilidad del auditorio, el día y la hora señalada y estará contactándolo para concretar el tema.</p>
</div>
    </div>