<?php
defined('_JEXEC') or die;
JToolBarHelper::save();
JToolBarHelper::cancel();
?>
<div>
<form id="addCom" action ="index.php" enctype="multipart/form-data" method="post" >
    <input type='hidden' name='option' value= 'com_company'>
    <input type="hidden" name="task" value="savecompany">
    Nombre: <input type="text" name="company">
    Terminal: <select name="term" id="checkboxid">
        <option value ="def"></option>
        <option value ="N">Norte</option>
        <option value ="S">Sur</option>
    </select>
    Oficina: <input type="text" name="off">
    Teléfono: <input type="text" name="phone">
    Historia: <input type="text" name="his">
    URL: <input type="text" name="url">
    E-commerce: <input type="text" name="com">
    Logo: <input type="text" name="file">
    <div style="display:none;">Logo: <input type="file" name="file"></div>
</form>
</div>

<?php
$doc = JFactory::getDocument();
$doc->addScript(JURI::base().'../templates/terminales_v1/js/jquery-1.9.0.min.js', "text/javascript");
$doc->addScript(JURI::base().'/components/com_company/js/company.js', "text/javascript");
?>
