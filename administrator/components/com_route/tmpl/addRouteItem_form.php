<?php
    defined('_JEXEC') or die;
    JToolBarHelper::save();
    JToolBarHelper::cancel();
?>

<div style="width:500px;">
    <div style="width:500px;"><h2>Nuevo Trayecto en Destino de Viaje</h2></div>
    <div style="width:300px; margin-left: 30px;">
        <form id="addRoute_form" action="index.php" method="post">
            <input type="hidden" name="option" value="com_route" >
            <input type="hidden" name="task" value="saveRouteItem" >
            <input type="hidden" name="routeId" value="<?php echo JRequest::getVar('routeId'); ?>" >
            <div style="width: 100px; height: 30px; float: left;">Trayecto:</div>
            <div style="width: 200px; height: 30px; float: left;">
                <input class="way" name="way" type="text" />
            </div>
            <div style="width: 100px; height: 30px; float: left;">Numero de Peajes:</div>
            <div style="width: 200px; height: 30px; float: left;">
                <input class="toll_number" name="toll_number" type="text" />
            </div>
            <div style="width: 100px; height: 30px; float: left;">Costo de Peajes:</div>
            <div style="width: 200px; height: 30px; float: left;">
                <input class="toll_price" name="toll_price" type="text" />
            </div>
            <div style="width: 100px; height: 30px; float: left;">Kilometros Recorrido:</div>
            <div style="width: 200px; height: 30px; float: left;">
                <input class="kms" name="kms" type="text" />
            </div>
            <div style="width: 100px; height: 30px; float: left;">Duración Recorrido:</div>
            <div style="width: 200px; height: 30px; float: left;">
                <input class="time" name="time" type="text" />
            </div>
        </form>
    </div>
</div>
<?php
    $doc = JFactory::getDocument();
    $doc->addScript(JURI::base().'../templates/terminales_v1/js/jquery-1.9.0.min.js', "text/javascript");
    $doc->addScript(JURI::base().'/components/com_route/js/route.js', "text/javascript");
?>