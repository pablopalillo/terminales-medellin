<?php
    defined('_JEXEC') or die;
    JToolBarHelper::save();
    JToolBarHelper::cancel();
?>
<div style="width:500px;">
    <div style="width:500px;"><h2>Nuevo Destino de Viaje</h2></div>
    <div style="width:300px; margin-left: 30px;">
        <form id="addRoute_form" action="index.php" method="post">
            <input type="hidden" name="option" value="com_route" />
            <input type="hidden" name="task" value="saveRoute" />
            <div style="width: 100px; height: 30px; float: left;">Destino de Viaje:</div>
            <div style="width: 200px; height: 30px; float: left;">
                <input class="route" name="route" type="text" />
            </div>
            <div style="width: 100px; height: 30px; float: left;">Precio:</div>
            <div style="width: 200px; height: 30px; float: left;">
                <input class="price" name="price" type="text" />
            </div>
            <div style="width: 100px; height: 30px; float: left;">Coordenadas:</div>
            <div style="width: 200px; height: 30px; float: left;">
                <input class="coordenate" name="coordenate" type="text" />
            </div>
            <div style="width: 100px; height: 30px; float: left;">Mapa:</div>
            <div style="width: 200px; height: 30px; float: left;">
                <select class="map" name="map" style="width:110px;">
                    <option value="1">Nacional</option>
                    <option value="2">Departamental</option>
                </select>
            </div>
            <div style="width: 100px; height: 30px; float: left;">Descripción:</div>
            <div style="width: 200px; height: 30px; float: left;">
                <input class="description" name="description" type="text" />
            </div>
            <div style="width: 100px; height: 30px; float: left;">URL:</div>
            <div style="width: 200px; height: 30px; float: left;">
                <input class="url" name="url" type="text" />
            </div>
        </form>
    </div>
</div>
<?php
    $doc = JFactory::getDocument();
    $doc->addScript(JURI::base().'../templates/terminales_v1/js/jquery-1.9.0.min.js', "text/javascript");
    $doc->addScript(JURI::base().'/components/com_route/js/route.js', "text/javascript");
?>