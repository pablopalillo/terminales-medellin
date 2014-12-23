<?php
    defined('_JEXEC') or die;
    JToolBarHelper::addNew();
    JToolBarHelper::deleteList();
    JToolBarHelper::editList();
    JToolBarHelper::checkin();
?>
<table class="adminlist">
    <thead>
        <tr>
            <th>SELECCIÓN</th>
            <th>ENCUESTA</th>
            <th>FECHA INICIAL</th>
            <th>FECHA FINAL</th>
            <th>TIPO</th>
            <th>ACTIVO <a class="saveorder"></a></th>
            <th>ID</th>
        </tr>
    </thead>
    <tbody>
<?php
foreach($mixData as $objData){
    if($objData->type == 1){
        $strPollType = "Única Respuesta";
    }
    if($objData->type == 2){
        $strPollType = "Múltiple Respuesta";
    }
    if($objData->type == 3){
        $strPollType = "Respuesta Libre";
    }
    echo "<tr>"
        ."<td><input refType='".$objData->type."' value='".$objData->id."' type='checkbox' /></td>"
        ."<td>".$objData->poll."</td>"
        ."<td>".$objData->start_date."</td>"
        ."<td>".$objData->finish_date."</td>"
        ."<td>".$strPollType."</td>"
        ."<td><input refpoll='".$objData->id."' align='center' type='text' value='".$objData->active."' class='active_container' style='width:20px;' /></td>"
            ."<td>".$objData->id."</td>"
        ."</tr>";
}
?>
    </tbody>
</table>
<?php
    $doc = JFactory::getDocument();
    $doc->addScript(JURI::base().'../templates/terminales_v1/js/jquery-1.9.0.min.js', "text/javascript");
    $doc->addScript(JURI::base().'/components/com_poll/js/poll.js', "text/javascript");
?>