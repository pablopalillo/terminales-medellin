<?php
if($strColor == "blue"){
    $strPaginatorClass = "paginator_blu";
}else{
    $strPaginatorClass = "paginator_green";
}
?>
<input type="hidden" id="pgeQty" value="<?php echo $intPageQty ?>">
<?php
$intNextValue = ($intPageQty == 1)? 0 : 2;
$intEndValue = ($intPageQty == 1)? 0 : $intPageQty;
?>
<div align="center" class="<?php echo $strPaginatorClass; ?>">
    <div style="margin-left: auto; margin-right: auto; width: 220px;">
        <a class="pag_start_a" href="#" ref="0">
            <div style="float:left; width:13px; height: 20px; margin-right: 10px;" class="pag_start"></div>
        </a>
        <a class="pag_prev_a" href="#" ref="0">
            <div style="float:left; width:10px; height: 20px;" class="pag_prev"></div>
        </a>
        
        <div style="float:left; padding-top: 3px; margin-left: 10px; margin-right: 2px;"><?php echo $strPage; ?></div>
        <div align="center" style="float:left; padding-top: 3px; width:40px; margin-left: 2px; margin-right: 2px; height: 15px; background: #fff; border: 1px solid #000;" class="pag_container">1</div>
        <div style="float:left; padding-top: 3px; margin-left: 2px; margin-right: 10px;"> <?php echo $strOf ?> <?php echo $intPageQty; ?></div>
                <a class="pag_next_a" href="#" ref="<?php echo $intNextValue; ?>">
            <div style="float:left; width:10px; height: 20px;" class="pag_next"></div>
        </a>
                <a class="pag_end_a" href="#" ref="<?php echo $intEndValue ?>">
            <div style="float:left; width:13px; height: 20px; margin-left: 10px;" class="pag_end"></div>
        </a>
    </div>
</div>