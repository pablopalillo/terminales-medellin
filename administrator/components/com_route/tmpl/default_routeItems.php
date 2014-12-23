<?php
    defined('_JEXEC') or die;
    JToolBarHelper::addNew();
    JToolBarHelper::deleteList();
    JToolBarHelper::cancel();
?>
<input type="hidden" class="routeId" value="<?php echo JRequest::getVar('routeId'); ?>">
<table class="adminlist">
    <thead>
        <tr>
            <th>Selección</th>
            <th>Ruta</th>
            <th>id</th>
            <th>Trayecto</th>
            <th>Peajes</th>
            <th>Costo Peajes Aprox.</th>
            <th>Kilometros Recorridos</th>
            <th>Tiempo Recorrido</th>
            <th>Sugerido<a href="#" class="saveorder"></a></th>
        </tr>
    </thead>
    <tbody>
<?php
foreach($mixData as $objData){
    echo "<tr>"
            ."<td><input value='".$objData->id."' type='checkbox' /></td>"
            ."<td>".$objData->id_route."</td>"
            ."<td>".$objData->id."</td>"
            ."<td>".$objData->way."</td>"
            ."<td>".$objData->toll_number."</td>"
            ."<td>".$objData->toll_price."</td>"
            ."<td>".$objData->kms."</td>"
            ."<td>".$objData->time."</td>"
            ."<td><input class='suggested' ref='".$objData->id."' type='text' value='".$objData->suggested."'></td>"
        ."</tr>";
}
?>
    </tbody>
</table>
<?php
    $doc = JFactory::getDocument();
    $doc->addScript(JURI::base().'../templates/terminales_v1/js/jquery-1.9.0.min.js', "text/javascript");
    $doc->addScript(JURI::base().'/components/com_route/js/routeItems.js', "text/javascript");
?>