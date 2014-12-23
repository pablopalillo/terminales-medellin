<?php
defined('_JEXEC') or die;
$doc = JFactory::getDocument();
JToolBarHelper::save();
JToolBarHelper::cancel();
$doc->addScript(JURI::base().'../templates/terminales_v1/js/jquery-1.9.0.min.js', "text/javascript");
$doc->addScript(JURI::base().'/components/com_banner/js/banner_item.js', "text/javascript");
$doc->addScript(JURI::base().'/components/com_banner/js/banner.js', "text/javascript");
?>
<form id="addBan" action="index.php" method="post" >
    <input type="hidden" name="option" value="com_banner" />
    <input type="hidden" name="task" value="savebanner" /> 
    Nombre del banner: <input type="text" name="name" />
    Ancho: <input type="text" name="width" />
    Alto: <input type="text" name="height" />
</form>