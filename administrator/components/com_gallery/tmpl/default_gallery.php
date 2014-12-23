<?php
    defined('_JEXEC') or die;
    JToolBarHelper::addNew();
    JToolBarHelper::deleteList();
    JToolBarHelper::editList();
?>
<table class="adminlist">
    <thead>
        <tr>
            <th>SELECCIÓN</th>
            <th>ID</th>
            <th>GALERIA</th>
        </tr>
    </thead>
    <tbody>
<?php
foreach($arrData as $objData){
    echo "<tr>"
        ."<th><input class='gallery' type='checkbox' value='".$objData->id."' /></th>"
        ."<th>".$objData->id."</th>"
        ."<th>".$objData->gallery."</th>"
        ."</tr>";
}
?>
    </tbody>
</table>
<?php
    $doc = JFactory::getDocument();
    $doc->addScript(JURI::base().'../templates/terminales_v1/js/jquery-1.9.0.min.js', "text/javascript");
    $doc->addScript(JURI::base().'/components/com_gallery/js/gallery.js', "text/javascript");
?>