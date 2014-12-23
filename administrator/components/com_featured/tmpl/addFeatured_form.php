<?php
    defined('_JEXEC') or die;
    JToolBarHelper::save();
    JToolBarHelper::cancel();
?>
<div style="width:500px;">
    <div style="width:500px;"><h2>Nuevo Destacado</h2></div>
    <div style="width:300px; margin-left: 30px;">
        <form id="addRoute_form" action="index.php" method="post">
            <input type="hidden" name="option" value="com_featured" />
            <input type="hidden" name="task" value="saveFeatured" />
            <div style="width: 100px; height: 30px; float: left;">Titulo:</div>
            <div style="width: 200px; height: 30px; float: left;">
                <input class="featured_title" name="route" type="text" />
            </div>
            <div style="width: 100px; height: 30px; float: left;">Url:</div>
            <div style="width: 200px; height: 30px; float: left;">
                <input class="featured_url" name="route" type="text" />
            </div>
            <div style="width: 100px; height: 30px; float: left;">Imagen:</div>
            <div style="width: 200px; height: 30px; float: left;">
                <input class="featured_image" name="route" type="text" />
            </div>
        </form>
    </div>
</div>
<?php
    $doc = JFactory::getDocument();
    $doc->addScript(JURI::base().'../templates/terminales_v1/js/jquery-1.9.0.min.js', "text/javascript");
    $doc->addScript(JURI::base().'/components/com_featured/js/featured.js', "text/javascript");
?>