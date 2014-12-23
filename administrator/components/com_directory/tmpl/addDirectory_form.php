<?php
defined('_JEXEC') or die;
$doc = JFactory::getDocument();
$doc->addScript(JURI::base().'../templates/terminales_v1/js/jquery-1.9.0.min.js', "text/javascript");
$doc->addScript(JURI::base().'/components/com_directory/js/directory.js', "text/javascript");
JToolBarHelper::save();
JToolBarHelper::cancel();
?>
<form id="addDir" action="index.php" method="post" >
    <input type="hidden" name="option" value="com_directory" />
    <input type="hidden" name="task" value="savenewdirectory" /> 
    Nombre del Directorio: <input type="text" name="name" />
</form>