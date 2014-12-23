<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

defined('_JEXEC') or die;
JHtml::_('behavior.keepalive');
$doc = JFactory::getDocument();
$doc->addScript(JURI::base().'../templates/terminales_v1/js/jquery-1.9.0.min.js', "text/javascript");
$doc->addScript(JURI::base().'/components/com_company/js/company.js', "text/javascript");
JToolBarHelper::addNew();
JToolBarHelper::deleteList();
?>
<table class="adminlist">
    <thead>
    <tr>
        <th>Seleccionar</th>
        <th>ID</th>
        <th>Compañia</th>
        <th>Terminal</th>
        <th>Oficina</th>
        <th>Telefono</th>
        <th>Historia</th>
        <th>URL</th>
        <th>Ecomerce</th>
        <th>Logo</th>
    </tr>
    </thead>
    <?php
       foreach($arrData as $array){
           echo"<tr><td><input type='checkbox' option='idBan' value='".$array->id."'  /><td>".$array->id."</td><td>".$array->company."</td><td>".$array->terminal."</td><td>".$array->office."</td><td>".$array->phone."</td><td>".$array->history."</td><td>".$array->url."</td><td>".$array->ecommerce."</td><td>".$array->company_logo."</td></tr>";
       }
     ?>
</table>
