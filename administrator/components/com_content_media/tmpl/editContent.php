<?php
    defined('_JEXEC') or die;
    JToolBarHelper::addNew();
    JToolBarHelper::deleteList();
    JToolBarHelper::cancel();
?>
<input type="hidden" class="contentid" value="<?php echo JRequest::getVar('contentid'); ?>" />
<table class="adminlist">
    <thead>
        <tr>
            <th>Selección</th>
            <th>Tipo</th>
            <th>Titulo</th>
            <th>Descripción</th>
            <th>Miniatura</th>
            <th>Archivo</th>
            <th>Fecha</th>
        </tr>
    </thead>
    <tbody>
<?php
foreach($mixData as $objData){
    if($objData->id_type == 1){$strType = "Imágen";}
    if($objData->id_type == 2){$strType = "Audio";}
    if($objData->id_type == 3){$strType = "Video";}
    if($objData->id_type == 4){$strType = "YouTube";}
    echo "<tr>"
        ."<td><input value='".$objData->id."' type='checkbox' /></td>"
        ."<td>".$strType."</td>"
        ."<td>".$objData->title."</td>"
        ."<td>".$objData->description."</td>"
        ."<td>".$objData->thumb."</td>"
        ."<td>".$objData->file_alias."</td>"
        ."<td>".$objData->date."</td>"
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