<?php
defined('_JEXEC') or die;
$doc = JFactory::getDocument();
$doc->addScript(JURI::base().'../templates/terminales_v1/js/jquery-1.9.0.min.js', "text/javascript");
$doc->addScript(JURI::base().'components/com_events/js/com_event.js', "text/javascript");
JToolBarHelper::editList();
?>
<table class="adminlist">
    <thead>
        <tr>
            <th>SELECCIÓN</th>
            <th>ID</th>
            <th>CONTENIDO</th>
        </tr>
    </thead>
    <tbody>
<?php
foreach($arrData as $objData){
    echo "<tr>"
        ."<td><input type='checkbox' value='".$objData->id."'/></td>"
        ."<td>".$objData->id."</td>"
        ."<td>".$objData->title."</td>"
        ."</tr>";
}
?>
    </tbody>
</table>