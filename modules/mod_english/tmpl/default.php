<div align="left" class="legend_blu_">English News</div>
<div style="background: url('images/<?php echo JRequest::getInt('Itemid').".jpg"; ?>'); width:900px; margin-top:-12px; padding-top:10px; padding-bottom:0px; float:left;">
    <div style="background: url('images/ingles-bck.jpg'); border: 2px #D1DEE3 solid; width: 636px; padding: 10px; float: left; margin-left: 3px;">
        <?php require '_selectedNew.php'; ?>
    </div>
    <div style="height: 330px; width: 235px; float: right;">
        <?php require '_featured.php'; ?>
    </div>
</div>
<div style="width:900px; float:left;">
    <?php require '_latestNew.php'; ?>
</div>
