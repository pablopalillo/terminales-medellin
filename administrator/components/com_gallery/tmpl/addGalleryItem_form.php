<?php
defined('_JEXEC') or die;
JHtml::_('behavior.keepalive');

$doc = JFactory::getDocument();
$doc->addScript(JURI::base().'../templates/terminales_v1/js/jquery-1.9.0.min.js', "text/javascript");
$doc->addScript(JURI::base().'/components/com_gallery/js/addgalleryItem.js', "text/javascript");
$doc->addStyleSheet(JURI::base().'../external/css/datepicker.css', $type = 'text/css', $media = 'screen,projection');
$doc->addScript(JURI::base().'../external/js/datepicker.js', "text/javascript");
JToolBarHelper::save();
JToolBarHelper::cancel();
?>

<form name="addAllies_form" id="addGalleryItem_form" action="index.php" method="post">
    <input type="hidden" name="option" value="com_gallery"/>
    <input type="hidden" name="task" value="savegalleryitem"/>
    <input type="hidden" name="galleryId" value="<?php echo JRequest::getVar('galleryId'); ?>"/>
    <div style="width:150px; float: left;">Tipo : </div><div style="width:150px; float: left;"><select class="id_type" name="id_type" style="width:260px;"><option value="1">Imágen</option><option value="2">Audio</option><option value="3">Video</option><option value="4">YouTube</option></select></div><br /><br />
    <div style="width:150px; float: left;">Miniatura : </div><div style="width:150px; float: left;"><input type="text" class="thumb" name="thumb" style="width:260px;"/></div><br /><br />
    <div style="width:150px; float: left;">Archivo : </div><div style="width:150px; float: left;"><input type="text" class="file_alias" name="file_alias" style="width:260px;"/></div><br /><br />
    <div style="width:150px; float: left;">Titulo : </div><div style="width:150px; float: left;"><input type="text" class="title" name="title" style="width:260px;"/></div><br /><br />
    <div style="width:150px; float: left;">Descripción : </div><div style="width:150px; float: left;"><input type="text" class="description" name="description" style="width:260px;"/></div><br /><br />
    <div style="width:150px; float: left;">Autor : </div><div style="width:150px; float: left;"><input type="text" class="author" name="author" style="width:260px;"/></div><br /><br />
    <div style="width:150px; float: left;">Fecha : </div><div style="width:150px; float: left;"><input type="text" class="date" name="date" style="width:260px;"/></div><br /><br />
</form>
    