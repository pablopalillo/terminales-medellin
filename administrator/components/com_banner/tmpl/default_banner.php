<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

defined('_JEXEC') or die;
JHtml::_('behavior.keepalive');
$doc = JFactory::getDocument();
$doc->addScript(JURI::base().'../templates/terminales_v1/js/jquery-1.9.0.min.js', "text/javascript");
$doc->addScript(JURI::base().'/components/com_banner/js/banner.js', "text/javascript");
JToolBarHelper::addNew();
JToolBarHelper::editList();
JToolBarHelper::deleteList();
?>
<table class="adminlist">
    <thead>
        <tr><th>Seleccionar</th><th>ID</th><th>Banner</th><th>Ancho</th><th>Largo</th></tr>
    </thead>
    <?php
       foreach($arrData as $array){
           echo"<tr><td><input type='checkbox' option='idBan' value='".$array->id."'  /><td>".$array->id."</td><td>".$array->banner."</td><td>".$array->width."</td><td>".$array->height."</td></tr>";
       }
     ?>
</table>