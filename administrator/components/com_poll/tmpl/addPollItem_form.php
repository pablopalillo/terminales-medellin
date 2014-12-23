<?php
    defined('_JEXEC') or die;
    JToolBarHelper::save();
    JToolBarHelper::cancel();
?>
<div style="width:500px;">
    <div style="width:500px;"><h2>Nueva Opción de Respuesta</h2></div>
    <div style="width:500px;">
        <form id="addPollItem_form" action="index.php" method="post">
            <input type="hidden" name="option" value="com_poll" />
            <input type="hidden" name="task" value="savepollitem" />
            <input type="hidden" id="pollid" name="pollid" value="<?php echo JRequest::getVar('pollid'); ?>" />
            <div style="width: 250px; height: 30px; float: left;">Opción :</div>
            <div style="width: 200px; height: 30px; float: left;"><input name="pollitem" type="text" /></div>
            <div style="width: 50px; height: 30px; float: left;"></div>
        </form>
    </div>
</div>
<?php
    $doc = JFactory::getDocument();
    $doc->addScript(JURI::base().'../templates/terminales_v1/js/jquery-1.9.0.min.js', "text/javascript");
    $doc->addScript(JURI::base().'/components/com_poll/js/poll_item.js', "text/javascript");
?>