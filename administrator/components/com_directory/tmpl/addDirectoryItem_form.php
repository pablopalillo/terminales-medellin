<?php
defined('_JEXEC') or die;
$doc = JFactory::getDocument();
$doc->addScript(JURI::base().'../templates/terminales_v1/js/jquery-1.9.0.min.js', "text/javascript");
$doc->addScript(JURI::base().'/components/com_directory/js/directory_item.js', "text/javascript");
JToolBarHelper::save();
JToolBarHelper::cancel();
?>
<form id="addDirI" action ="index.php" method="post" >
    <input type='hidden' name='option' value= 'com_directory'>
    <input type="hidden" name="task" value="savenewdirectoryitem">
    <input type="hidden" name="idDir" value="<?php echo $idDir; ?>">
    Nombre: <input type="text" name="dName">
    Área: <input type="text" name="area">
    Teléfono: <input type="text" name="phone">
    E-mail: <input type="text" name="mail">
</form>
