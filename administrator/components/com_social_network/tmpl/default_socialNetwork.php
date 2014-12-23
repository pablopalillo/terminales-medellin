<?php
defined('_JEXEC') or die;
JToolBarHelper::addNew();
JToolBarHelper::deleteList();
?>
<table style="width: 100%;">
    <thead>
        <tr><th>SELECCIÓN</th><th>ID</th><th>RED</th><th>USUARIO</th><th>URL</th><th>ORDEN</th><th>FECHA ACCESS TOKEN</th></tr>
    </thead>
    <tbody>
<?php
foreach($mixData as $objData){
    echo "<tr>"
        ."<th><input type='checkbox' /></th>"
        ."<th>".$objData->id."</th>"
        ."<th>".$objData->network."</th>"
        ."<th>".$objData->user."</th>"
        ."<th>".$objData->url."</th>"
        ."<th>".$objData->order."</th>"
        ."<th>".$objData->date_access_token."</th>"
        ."</tr>";
}
?>
    </tbody>
</table>
<?php
$doc = JFactory::getDocument();
$doc->addScript(JURI::base().'../templates/terminales_v1/js/jquery-1.9.0.min.js', "text/javascript");
$doc->addScript(JURI::base().'/components/com_social_network/js/social_network.js', "text/javascript");
?>