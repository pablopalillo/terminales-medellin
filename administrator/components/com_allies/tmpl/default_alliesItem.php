<?php
/**
 * @package	Joomla.Site
 * @subpackage	mod_content
 * @copyright	Copyright (C) All rights reserved.
 * @license	All rights reserved.
 * @author      Alexander Hinestroza <alexander.hinestroza@fuziona.net>
 */
$doc = JFactory::getDocument();
$doc->addScript(JURI::base().'../templates/terminales_v1/js/jquery-1.9.0.min.js', "text/javascript");
$doc->addScript(JURI::base().'/components/com_allies/js/allies.js', "text/javascript");
JToolBarHelper::addNew();
JToolBarHelper::deleteList();
JToolBarHelper::cancel();
?>
<table class="adminlist">
    <thead>
        <tr>
            <th>Seleccionar</th>
            <th>Aliado</th>
            <th>Nombre Item</th>
            <th>Nombre Imagen</th>
            <th>Url</th>
            <th>Orden<a id="orderUpdate" class="saveorder" href="#"></a></th>
        </tr>
    </thead>
    <?php
    //Guardamos el tama�o del arreglo
    $arraySize = sizeof($arrAlliesItems);
    echo "<input type='hidden' value='".$arraySize."' id='arraySize'>";
    //Recorremos el arreglo de aliados
    $cont = 0;
    $idAliado=JRequest::getVar('allyId');
    foreach ($arrAlliesItems as $objItems){
        $idAliado = $objItems->ally_id;
        echo "<tr>".
            "<td ><input type='checkbox' name='".$objItems->name."' value='".$objItems->id."'></td>".
            "<td >".$objItems->ally_name."</td>".
            "<td >".$objItems->name."</td>".
            "<td >".$objItems->image."</td>".
            "<td >".$objItems->url."</td>".
            "<td ><input type='text' id='order_".$cont."' name='order' value='".$objItems->order."'></td>".
            "<input type='hidden' id='item_".$cont."' value='".$objItems->id."'>".
        "</tr>";
        $cont++;
    }
    echo "<input type='hidden' value='".$idAliado."' id='id_ally'>";
    ?>
</table>
