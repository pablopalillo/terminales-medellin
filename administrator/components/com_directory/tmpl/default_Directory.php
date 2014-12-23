<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

defined('_JEXEC') or die;
JHtml::_('behavior.keepalive');
$doc = JFactory::getDocument();
$doc->addScript(JURI::base().'../templates/terminales_v1/js/jquery-1.9.0.min.js', "text/javascript");
$doc->addScript(JURI::base().'/components/com_directory/js/directory.js', "text/javascript");
JToolBarHelper::addNew();
JToolBarHelper::editList();
JToolBarHelper::deleteList();
?>
<table class="adminlist">
    <thead>
        <tr>
            <th>Seleccionar</th>
            <th>ID</th>
            <th>Directorio</th>
        </tr>
    </thead>
    <?php
       foreach($arrData as $array){
           echo"<tr><td><input type='checkbox' option='idDir' value='".$array->id."'  /><td>".$array->id."</td><td>".$array->directory."</td></tr>";
       }
     ?>
</table>