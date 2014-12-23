<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

defined('_JEXEC') or die;
JHtml::_('behavior.keepalive');
$doc = JFactory::getDocument();
$doc->addScript(JURI::base().'../templates/terminales_v1/js/jquery-1.9.0.min.js', "text/javascript");
$doc->addScript(JURI::base().'/components/com_banner/js/banner_item.js', "text/javascript");
JToolBarHelper::addNew();
JToolBarHelper::deleteList();
JToolBarHelper::cancel();
echo "<input type='hidden' id='idBan' value='";
if(isset($arrData[0]->id_banner)){
    echo $arrData[0]->id_banner;
}else {
    echo JRequest::getVar('id_banner');
}
        echo "'  />";
?>
<table border="1" style="width: 100%; ">
    <table class="adminlist">
        <thead>
            <tr><th>Seleccionar</th><th>Banner</th><th>Imagen</th><th>Vínculo</th></tr>
        </thead>
    <?php
       foreach($arrData as $array){
           echo"<tr><td><input type='checkbox' option='idBanI' value='".$array->id."'  />"
                ."<td>".$array->id_banner
                ."</td><td>".$array->file_alias
                ."</td><td>".$array->href."</td></tr>";
       }
     ?>
</table>
