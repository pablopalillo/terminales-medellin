<div align="left" class="legend_green_">Transportadores</div>
<div style="background: url('images/<?php echo JRequest::getInt('Itemid').".jpg"; ?>'); width:900px; margin-top:-12px; padding-top:10px; padding-bottom:0px; float:left;">
    <div style="width: 167px; height: 350px; float: left; background-image: url('images/virgen-transportadores.jpg');">
    </div>
    <div style="background: url('images/transportadores-bck.jpg'); border: 2px #D1DEE3 solid; width: 485px; padding: 10px; float: left;">
        <?php require '_selectedNew.php'; ?>
    </div>
    <div id="home_featured_container" style="height: 375px; width: 222px; float: right;">
        <?php require '_featured.php'; ?>
    </div>
</div>
<div style="width:140px; min-height: 100px; float:left;">
    <?php 
    $objModule = JModuleHelper::getModule('mod_strategic_allies');
    $objModule->params = 'allies_type=14';
    echo JModuleHelper::renderModule($objModule); 
    ?>
</div>
<div style="width:740px; float:right;">
    <?php require '_latestNew.php'; ?>
</div>
