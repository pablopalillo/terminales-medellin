<?php
    defined('_JEXEC') or die;
    JToolBarHelper::addNew();
    JToolBarHelper::deleteList();
?>
<table class="adminlist">
    <thead>
        <tr>
            <th>Selección</th>
            <th>Titulo</th>
            <th>Url</th>
            <th>Imágen</th>
            <th>Orden <a href="#" class="saveorder" id="orderUpdate"></a></th>
        </tr>
    </thead>
    <tbody>
<?php
foreach($mixData as $objData){
    echo "<tr>"
        ."<td><input value='".$objData->id."' type='checkbox' /></td>"
        ."<td>".$objData->title."</td>"
        ."<td>".$objData->url."</td>"
        ."<td>".$objData->image."</td>"
        ."<td><input class='featured_order' ref='".$objData->id."' type='text' value='".$objData->order."'></td>"
        ."</tr>";
}
?>
    </tbody>
</table>
<?php
    $doc = JFactory::getDocument();
    $doc->addScript(JURI::base().'../templates/terminales_v1/js/jquery-1.9.0.min.js', "text/javascript");
    $doc->addScript(JURI::base().'/components/com_featured/js/featured.js', "text/javascript");
?>