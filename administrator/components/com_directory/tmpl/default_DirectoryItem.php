<?php


defined('_JEXEC') or die;
JHtml::_('behavior.keepalive');
$doc = JFactory::getDocument();
$doc->addScript(JURI::base().'../templates/terminales_v1/js/jquery-1.9.0.min.js', "text/javascript");
$doc->addScript(JURI::base().'/components/com_directory/js/directory_item.js', "text/javascript");
JToolBarHelper::addNew();
JToolBarHelper::deleteList();
JToolBarHelper::cancel();
?>
<input type='hidden' id='idDir' value='<?php echo JRequest::getInt('idDir'); ?>'  />
<table class="adminlist">
    <thead>
        <tr>
            <th>Seleccionar</th>
            <th>Directorio</th>
            <th>Nombre</th>
            <th>Area</th>
            <th>Telefono</th>
            <th>E-Mail</th>
        </tr>
    </thead>
    <?php
       foreach($arrData as $array){
           echo"<tr><td><input type='checkbox' name='".$array->id."' value='".$array->id."'  /></td><td>".$array->directory_type."</td><td>".$array->name."</td><td>".$array->area."</td><td>".$array->phone."</td><td>".$array->email."</td></tr>";
       }
     ?>
</table>
