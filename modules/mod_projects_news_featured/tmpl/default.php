<div align="left" class="legend_organe_"><?php echo $strCategory; ?></div>
<div style="background: url('images/<?php echo JRequest::getInt('Itemid').".jpg"; ?>'); width:890px; margin-top:-3px; padding-top:10px; padding-left:10px; float:left;">
    <div style="background: url('images/project_opacity_bck.png'); width: 600px; padding: 10px; -webkit-border-radius: 25px; -moz-border-radius: 25px; border-radius: 25px; float: left;">
        <?php require '_selectedNew.php'; ?>
    </div>
    <div id="home_featured_container" style="height: 295px; width: 265px; float: right; overflow-y: hidden; overflow-x: hidden">
        <?php require '_featured.php'; ?>
    </div>
    <div style="height: 32px; width: 265px; float: right;"><a id="more_featured_a" href="#"><img src="images/more_featured_projects.png"></a></div>
</div>
<div style="width:900px; float:left;">
    <?php require '_latestNew.php'; ?>
</div>
