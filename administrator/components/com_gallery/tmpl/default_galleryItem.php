<?php
    defined('_JEXEC') or die;
    JToolBarHelper::addNew();
    JToolBarHelper::deleteList();
    JToolBarHelper::cancel();
?>
<input type="hidden" class="galleryId" name="galleryId" value="<?php echo JRequest::getInt('galleryId'); ?>" />
<table class="adminlist">
    <thead>
        <tr>
            <th>Selección</th>
            <th>Id Galería</th>
            <th>Id Item</th>
            <th>Tipo</th>
            <th>Miniatura</th>
            <th>Archivo</th>
            <th>Titulo</th>
            <th>Descripción</th>
            <th>Autor</th>
            <th>Fecha</th>
        </tr>
    </thead>
    <tbody>
<?php
foreach($arrData as $objData){
    echo "<tr>"
        ."<td><input type='checkbox' value='".$objData->id."' /></td>"
        ."<td>".$objData->id_gallery."</td>"
        ."<td>".$objData->id."</td>"
        ."<td>".$objData->type."</td>"
        ."<td>".$objData->thumb."</td>"
        ."<td>".$objData->file_alias."</td>"
        ."<td>".$objData->title."</td>"
        ."<td>".$objData->description."</td>"
        ."<td>".$objData->author."</td>"
        ."<td>".$objData->date."</td>"
        ."</tr>";
}
?>
    </tbody>
</table>
<?php
    $doc = JFactory::getDocument();
    $doc->addScript(JURI::base().'../templates/terminales_v1/js/jquery-1.9.0.min.js', "text/javascript");
    $doc->addScript(JURI::base().'/components/com_gallery/js/galleryItem.js', "text/javascript");
?>