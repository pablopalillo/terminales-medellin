<?php
    defined('_JEXEC') or die;
    JToolBarHelper::back();
?>
<table class="adminlist">
    <thead>
        <tr>
            <th>ID</th>
            <th>IP REMOTA</th>
            <th>RESPUESTA</th>
            <th>FECHA</th>
        </tr>
    </thead>
    <tbody>
<?php
if(!empty($mixData)){
    foreach($mixData as $objData){
        echo "<tr>"
            ."<td>".$objData->id."</td>"
            ."<td>".$objData->ip_client."</td>"
            ."<td>".$objData->answer."</td>"
            ."<td>".$objData->date."</td>"
            ."</tr>";
    }
}
?>
    </tbody>
</table>
<?php
    $doc = JFactory::getDocument();
    $doc->addScript(JURI::base().'../templates/terminales_v1/js/jquery-1.9.0.min.js', "text/javascript");
    $doc->addScript(JURI::base().'/components/com_poll/js/poll.js', "text/javascript");
?>