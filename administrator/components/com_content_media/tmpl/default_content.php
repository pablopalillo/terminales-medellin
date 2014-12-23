<?php
    defined('_JEXEC') or die;
    JToolBarHelper::editList();
?>
<table class="adminlist">
    <thead>
        <tr>
            <th>Selección</th>
            <th>Id</th>
            <th>Titulo</th>
            <th>Categoría</th>
            <th>Fecha</th>
        </tr>
    </thead>
    <tbody>
<?php
foreach($mixData as $objData){
    echo "<tr>"
            ."<td><input value='".$objData->id."' type='checkbox' /></td>"
            ."<td>".$objData->id."</td>"
            ."<td>".$objData->title."</td>"
            ."<td>".$objData->category."</td>"
            ."<td>".$objData->created."</td>"
        ."</tr>";
}
?>
    </tbody>
</table>
<?php
    $doc = JFactory::getDocument();
    $doc->addScript(JURI::base().'../templates/terminales_v1/js/jquery-1.9.0.min.js', "text/javascript");
    $doc->addScript(JURI::base().'/components/com_content_media/js/content_media.js', "text/javascript");
?>