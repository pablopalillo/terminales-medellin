<div id="strategic_allies_container"><div id="strategic_allies_prev"></div>
    <div id="strategic_allies_content">
        
<?php
defined('_JEXEC') or die;
JHtml::_('behavior.keepalive');
 
if(array() != $arrData){
    $intWidthSildeAllies = 103*count($arrData);
    echo "<div id='strategic_allies_slide' style='width:".$intWidthSildeAllies."px;'>";
    foreach ($arrData as $objData) {
        echo "<div align='center' class='strategic_allies_item'>";
        echo "<a target='_blank' href='".$objData->url."'>";
        echo "<img src='images/banners/".$objData->image."'/>";
        echo "</a></div>";                
    }
    echo "</div>";
}?>
</div><div id="strategic_allies_next"></div></div>
