<?php
defined('_JEXEC') or die;
JHtml::_('behavior.keepalive');

$doc = JFactory::getDocument();
$doc->addScript(JURI::base().'../templates/terminales_v1/js/jquery-1.9.0.min.js', "text/javascript");
$doc->addScript(JURI::base().'/components/com_gallery/js/addgallery.js', "text/javascript");
JToolBarHelper::save();
JToolBarHelper::cancel();
?>

<form name="addAllies_form" id="addGallery_form" action="index.php" method="post">
    <input type="hidden" name="option" value="com_gallery"/>
    <input type="hidden" name="task" value="savegallery"/>
    Galería : <input type="text" class="name" name="gallery" style="width:260px;"/>
</form>
    