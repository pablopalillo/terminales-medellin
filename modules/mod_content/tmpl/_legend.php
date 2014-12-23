<?php
if($arrData[0]->catid == "8"){
    $strLegendClass = "legend_organe_";
}else{
    if($arrData[0]->catid == "10" || $arrData[0]->catid == "9" || $arrData[0]->catid == "12"){
        $strLegendClass = "legend_black_";
    } else {
        $strLegendClass = "legend_blu_";
    }
}
if(JRequest::getVar('color') == 'green'){
    $strLegendClass = "legend_green_";
}
?>
<div align="left" class="<?php echo $strLegendClass; ?>"><div style="float: left; width:820px;"><?php echo $arrData[0]->catTitle ?></div>
<div style="float: left; margin-top: -5px;">
    <?php
        if($arrData[0]->catid == "10"){ ?>
            <img src="images/events_icon.png" style="margin-top: 7px;" >
        <?php } else { 
            if($arrData[0]->catid == "9"){ ?>
                <img src="images/services_icon.png" style="margin-top: 4px;" >
            <?php } else {
                if($arrData[0]->catid == "12"){ ?>
                    <img src="images/clasified_icon.png" style="margin-top: 2px; margin-left: 30px;" >
                <?php }
            }
        }
    ?>
</div>
</div>
<?php if($strLegendClass == "legend_black_"){ ?>
    <div id="black-wrap-company">
        <div class="black-container">
<?php } ?>
