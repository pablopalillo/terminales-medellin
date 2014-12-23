<div id="strategic_allies_container_vertical"><div id="strategic_allies_prev_vertical"></div>
    <div id="strategic_allies_content_vertical">
<?php
defined('_JEXEC') or die;
JHtml::_('behavior.keepalive');
 
if(array() != $arrData){
    $intWidthSildeAllies = 76*count($arrData);
    echo "<div id='strategic_allies_slide' style='height:".$intWidthSildeAllies."px; padding-top:5px;'>";
    foreach ($arrData as $objData) {
        echo "<div align='center' class='strategic_allies_item_vertical'>";
        echo "<a target='_blank' href='".$objData->url."'>";
        echo "<img src='images/banners/".$objData->image."'/>";
        echo "</a></div>";                
    }
    echo "</div>";
}?>
</div><div id="strategic_allies_next_vertical"></div></div>
