<?php
    defined('_JEXEC') or die;
    JToolBarHelper::addNew();
    JToolBarHelper::deleteList();
    JToolBarHelper::editList();
    JToolBarHelper::assign();
?>
<table class="adminlist">
    <thead>
        <tr>
            <th>Selección</th>
            <th>Ruta</th>
            <th>Rango de Precio</th>
            <th>Mapa</th>
            <th>Coordenadas</th>
            <th>Descripción</th>
            <th>Url</th>
            <th>Id</th>
        </tr>
    </thead>
    <tbody>
<?php
foreach($mixData as $objData){
    if($objData->id_map == 1){ $strMap = "Colombia"; }
    if($objData->id_map == 2){ $strMap = "Antioquia"; }
    echo "<tr>"
        ."<td><input value='".$objData->id."' type='checkbox' /></td>"
        ."<td>".$objData->route."</td>"
        ."<td>".$objData->price."</td>"
        ."<td>".$strMap."</td>"
        ."<td>".$objData->coordenate."</td>"
        ."<td>".$objData->description."</td>"
        ."<td>".$objData->url."</td>"
        ."<td>".$objData->id."</td>"
        ."</tr>";
}
?>
    </tbody>
</table>
<?php
    $doc = JFactory::getDocument();
    $doc->addScript(JURI::base().'../templates/terminales_v1/js/jquery-1.9.0.min.js', "text/javascript");
    $doc->addScript(JURI::base().'/components/com_route/js/route.js', "text/javascript");
?>