<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

defined('_JEXEC') or die;
$doc = JFactory::getDocument();
$doc->addScript(JURI::base().'../templates/terminales_v1/js/jquery-1.9.0.min.js', "text/javascript");
$doc->addScript(JURI::base().'components/com_events/js/com_event.js', "text/javascript");
$doc->addStyleSheet(JURI::base().'../external/css/datepicker.css', $type = 'text/css', $media = 'screen,projection');
$doc->addScript(JURI::base().'../external/js/datepicker.js', "text/javascript");
JToolBarHelper::save();
JToolBarHelper::cancel();

//Verificamos si el arreglo viene vacío
if(sizeof($arrEvento) == 0){
    echo "<form name='saveEvent_form' id='saveEvent_form' action='index.php' method='post'>".
            "<input type='hidden' name='option' value='com_events'/>".
            "<input type='hidden' id='task' name='task' value='saveeventitems'/>".
            "<input type='hidden' id='contentId' name='contentId' value='".JRequest::getVar('contentId')."'/>".
            "<table>".
                "<tr>".
                    "<td>Tipo de Evento:   </td>".
                    "<td><input type='text' id='type' name='type'/></td>".
                "</tr>".
                "<tr>".
                    "<td>Lugar:   </td>".
                    "<td><input type='text' id='place' name='place' /></td>".
                "</tr>".
                "<tr>".
                    "<td>Publico:   </td>".
                    "<td><input type='text' id='public' name='public'/></td>".
                "</tr>".
                "<tr>".
                    "<td>Encargado del evento:   </td>".
                    "<td><input type='text' id='manager' name='manager'/></td>".
                "</tr>".
                "<tr>".
                    "<td>Número de contacto:   </td>".
                    "<td><input type='text' id='contac' name='contac' /></td>".
                "</tr>".
                "<tr>".
                    "<td>Precio:   </td>".
                    "<td><input type='text' id='price' name='price'/></td>".
                "</tr>".
                "<tr>".
                    "<td>Fecha inicial:   </td>".
                    "<td><input type='text' id='start_date' name='start_date' readonly/></td>".
                "</tr>".
                "<tr>".
                    "<td>Fecha final:   </td>".
                    "<td><input type='text' id='finish_date' name='finish_date' readonly/></td>".
                "</tr>".
            "</table>".
        "</form>";
}
else{
    echo "<form name='editEvent_form' id='editEvent_form' action='index.php' method='post'>".
            "<input type='hidden' name='option' value='com_events'/>".
            "<input type='hidden' name='task' value='updateeventitem'/>".
            "<input type='hidden' id='contentId' name='contentId' value='".JRequest::getVar('contentId')."'/>".
            "<table>";
    foreach ($arrEvento as $objEvent){
            echo "<tr>".
                    "<td>Tipo de Evento:   </td>".
                    "<td><input type='text' id='type' name='type' value='".$objEvent->type."'/></td>".
                "</tr>".
                "<tr>".
                    "<td>Lugar:   </td>".
                    "<td><input type='text' id='place' name='place' value='".$objEvent->place."' /></td>".
                "</tr>".
                "<tr>".
                    "<td>Publico:   </td>".
                    "<td><input type='text' id='public' name='public' value='".$objEvent->public."'/></td>".
                "</tr>".
                "<tr>".
                    "<td>Encargado del evento:   </td>".
                    "<td><input type='text' id='manager' name='manager' value='".$objEvent->manager."' /></td>".
                "</tr>".
                "<tr>".
                    "<td>Número de contacto:   </td>".
                    "<td><input type='text' id='contac' name='contac' value='".$objEvent->contact."'/></td>".
                "</tr>".
                "<tr>".
                    "<td>Precio:   </td>".
                    "<td><input type='text' id='price' name='price' value='".$objEvent->price."' /></td>".
                "</tr>".
                "<tr>".
                    "<td>Fecha inicial:   </td>".
                    "<td><input type='text' id='start_date' name='start_date' value='".$objEvent->start_date."' /></td>".
                "</tr>".
                "<tr>".
                    "<td>Fecha final:   </td>".
                    "<td><input type='text' id='finish_date' name='finish_date' value='".$objEvent->finish_date."'/></td>".
                "</tr>".
            "</table>".
        "</form>";
    }
}
?>