<?php
defined('_JEXEC') or die;
$doc = JFactory::getDocument();
$doc->addScript(JURI::base().'../templates/terminales_v1/js/jquery-1.9.0.min.js', "text/javascript");
$doc->addScript(JURI::base().'/components/com_banner/js/banner_item.js', "text/javascript");
JToolBarHelper::save();
JToolBarHelper::cancel();
?>
<form id="addBanI" action="index.php" enctype="multipart/form-data" method="post" >
    <input type="hidden" name="option" value="com_banner" />
    <input type="hidden" name="task" value="savebanneritem" /> 
    <input type="hidden" name="id" value="<?php echo jrequest::getvar('id_banner'); ?>" /> 
    Imagen: <input type="text" name="banner" />
    vinculo: <input type="text" name="ref" />
</form>