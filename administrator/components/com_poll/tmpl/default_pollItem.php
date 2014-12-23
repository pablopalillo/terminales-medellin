<?php
    defined('_JEXEC') or die;
    JToolBarHelper::addNew();
    JToolBarHelper::deleteList();
    JToolBarHelper::back();
?>
<table class="adminlist">
    <thead>
        <tr><th>SELECCIÓN</th><th>OPCIÓN</th></tr>
    </thead>
    <tbody>
<?php
$strCount = 0;
foreach($mixData as $objData){
    echo "<input refPoll='".$objData->id."' id='pollid' type='hidden' />";
    if(!empty($objData->option)){
        foreach(json_decode($objData->option) as $strOption){
         echo "<tr>"
              ."<td><input refPoll='".$objData->id."' value='".$strCount."' type='checkbox' /></td>"
              ."<td>".$strOption."</td>"
          ."</tr>";
          $strCount++; 
        }  
    }
}
?>
    </tbody>
</table>
<?php
    $doc = JFactory::getDocument();
    $doc->addScript(JURI::base().'../templates/terminales_v1/js/jquery-1.9.0.min.js', "text/javascript");
    $doc->addScript(JURI::base().'/components/com_poll/js/poll_item.js', "text/javascript");
?>