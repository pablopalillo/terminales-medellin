<?php
    defined('_JEXEC') or die;
    JToolBarHelper::save();
    JToolBarHelper::cancel();
?>
<div style="width:500px;">
    <div style="width:500px;"><h2>Nueva Encuesta</h2></div>
    <div style="width:300px; margin-left: 30px;">
        <form id="addPoll_form" action="index.php" method="post">
            <input type="hidden" name="option" value="com_poll" />
            <input type="hidden" name="task" value="savepoll" />
            <div style="width: 100px; height: 30px; float: left;">Encuesta:</div>
            <div style="width: 200px; height: 30px; float: left;"><input name="poll" type="text" /></div>
            <div style="width: 100px; height: 30px; float: left;">Tipo de Encuesta:</div>
            <div style="width: 200px; height: 30px; float: left;">
                <select name="polltype" >
                    <option value="1">Única Respuesta</option>
                    <option value="2">Múltiple Respuesta</option>
                    <option value="3">Respuesta Libre</option>
                </select>
            </div>
            <div style="width: 100px; height: 30px; float: left;">Fecha de Inicio:</div>
            <div style="width: 200px; height: 30px; float: left;"><input id="pollstartdate" name="pollstartdate" type="text" /></div>
            <div style="width: 100px; height: 30px; float: left;">Fecha Final:</div>
            <div style="width: 200px; height: 30px; float: left;"><input id="pollfinishdate" name="pollfinishdate" type="text" /></div>
        </form>
    </div>
</div>
<?php
    $doc = JFactory::getDocument();
    $doc->addScript(JURI::base().'../templates/terminales_v1/js/jquery-1.9.0.min.js', "text/javascript");
    $doc->addScript(JURI::base().'../external/js/datepicker.js', "text/javascript");
    $doc->addScript(JURI::base().'/components/com_poll/js/poll.js', "text/javascript");
    $doc->addScript(JURI::base().'/components/com_poll/js/poll_form.js', "text/javascript");
    $doc->addStyleSheet(JURI::base().'../external/css/datepicker.css', $type = 'text/css', $media = 'screen,projection');
?>