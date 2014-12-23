<?php
    defined('_JEXEC') or die;
    JToolBarHelper::editList();
?>
<table style="width: 100%;">
    <thead>
        <tr><th>SELECCIÓN</th><th>ID</th><th>TIPO</th><th>TITULO</th><th>DESCRIPCIÓN</th><th>AUTOR</th><th>ARCHIVO</th><th>FECHA</th></tr>
    </thead>
    <tbody>
<?php
foreach($mixData as $objData){
    echo "<tr>"
        ."<th><input type='checkbox' /></th>"
        ."<th>".$objData->id."</th>"
        ."<th>".$objData->id_type."</th>"
        ."<th>".$objData->title."</th>"
        ."<th>".$objData->description."</th>"
        ."<th>".$objData->author."</th>"
        ."<th>".$objData->file_alias."</th>"
        ."<th>".$objData->date."</th>"
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