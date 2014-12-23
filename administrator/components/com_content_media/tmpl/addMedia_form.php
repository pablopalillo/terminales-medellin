<?php
    defined('_JEXEC') or die;
    JToolBarHelper::save();
    JToolBarHelper::cancel();
?>

<form id="addMedia_form" action="index.php" method="POST">
    <input type="hidden" name="option" value="com_content_media">
    <input type="hidden" name="task" value="savemedia">
    <input type="hidden" name="contentid" value="<?php echo JRequest::getVar('contentid'); ?>">
<div>
    <div style="width:400px; height: 35px;">
        <div style="width:100px; height: 30px; float:left;">Tipo</div>
        <div style="width:300px; height: 30px; float:left;">
            <select name="media_type">
                <option value="1">Imágen</option>
                <option value="2">Audio</option>
                <option value="3">Video</option>
                <option value="4">Youtube</option>
            </select>
        </div>
        <div style="width:100px; height: 30px; float:left;">Title</div>
        <div style="width:300px; height: 30px; float:left;"><input name="media_title" type="text"></div>
        <div style="width:100px; height: 30px; float:left;">Descripción</div>
        <div style="width:300px; height: 30px; float:left;"><input name="media_description" type="text"></div>
        <div style="width:100px; height: 30px; float:left;">Author</div>
        <div style="width:300px; height: 30px; float:left;"><input name="media_author" type="text"></div>
        <div style="width:100px; height: 30px; float:left;">Miniatura</div>
        <div style="width:300px; height: 30px; float:left;"><input name="media_thumb" type="text"></div>
        <div style="width:100px; height: 30px; float:left;">Archivo</div>
        <div style="width:300px; height: 30px; float:left;"><input name="media_file" type="text"></div>
        <div style="width:100px; height: 30px; float:left;">Fecha</div>
        <div style="width:300px; height: 30px; float:left;"><input name="media_date" class="media_date" type="text"></div>
    </div>
</div>
</form>
<?php
    $doc = JFactory::getDocument();
    $doc->addStyleSheet(JURI::base().'../external/css/datepicker.css', $type = 'text/css', $media = 'screen,projection');
    $doc->addScript(JURI::base().'../templates/terminales_v1/js/jquery-1.9.0.min.js', "text/javascript");
    $doc->addScript(JURI::base().'../external/js/datepicker.js', "text/javascript");
    $doc->addScript(JURI::base().'/components/com_content_media/js/content_media.js', "text/javascript");
?>