<div align="left" class="legend_blu_">Empleados</div>
<div style="background: url('images/<?php echo JRequest::getInt('Itemid').".jpg"; ?>'); width:890px; margin-top:-3px; padding-top:10px; padding-left:10px; float:left;">
    <div style="background: url('images/intranet-bck.png'); border: 2px #D1DEE3 solid; width: 640px; padding: 10px; -webkit-border-radius: 25px; -moz-border-radius: 25px; border-radius: 25px; float: left;">
        <?php require '_selectedNew.php'; ?>
    </div>
    <div style="height: 440px; width: 222px; float: right;">
        <?php require '_featured.php'; ?>
    </div>
</div>
<div style="width:900px; float:left;">
    <?php require '_latestNew.php'; ?>
</div>
