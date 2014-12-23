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
$doc->addScript(JURI::base().'components/com_allies/js/allies_1.js', "text/javascript");
JToolBarHelper::addNew();
JToolBarHelper::editList();
JToolBarHelper::deleteList();

?>
<table class="adminlist">
    <thead>
        <tr>
            <th>Seleccione</th>
            <th>Nombre aliado</th>
            <th>Posición</th>
        </tr>
    </thead>
    <?php
    //Recorremos el arreglo de aliados
    foreach ($arrAllies as $objAllies){
        $strPosition = $objAllies->ally_position == 2 ? "Vertical" : "Horizonal";
        echo "<tr>".
            "<td><input type='checkbox' name='".$objAllies->name."' value='".$objAllies->id."'></td>".
            "<td>".$objAllies->name."</td>".
            "<td>".$strPosition."</td>".
        "</tr>";
    }
    ?>
</table>
