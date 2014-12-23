
<?php
/**
 * @package	Joomla.Site
 * @subpackage	mod_multimediagallery
 * @copyright	Copyright (C) All rights reserved.
 * @license	All rights reserved.
 * @author      diego calle <diego.calle@fuziona.net>
 */

// no direct access
defined('_JEXEC') or die;
JHtml::_('behavior.keepalive');

?>
<div align="left" class="legend_blu_"><div style="width:820px; float: left;"><?php echo $strGalleryName; ?></div>
<div style="float: left; margin-top: -5px;"><img src="images/gallery_icon.png" /></div></div>
<div class="content-wrap-blu">
    <div class="content-wrap-blu-container">
<?php
$intPages = ceil(count($arrData) / $intPR);
$intPRSum = $intPR;
$intPRInit = 0;
include dirname(__FILE__).DS.'_filterForm.php';

for ($x = 0; $x < $intPages; $x++) {
    $strClass = "showContentTable";
    echo "<table ref='multimedia_table' id='multimedia_table_".$x."'class='".$strClass."' style='width:100%' border='1''><tbody>"
        ."<tr><td align='center'>";
    for ($i = $intPRInit; $i < $intPRSum; $i++) {
        if (isset($arrData[$i])) {
            switch ($arrData[$i]->id_type){
                case 1:
                    echo "<div align='center' style='float:left; margin-bottom:10px;'>";
                    
                    if($strClass == 'hiddenContent'){
                        echo "<div class='gallery-item-blu'><a size='".round((filesize(JPATH_BASE."/multimedia/".$arrData[$i]->file_alias)/1000), 0)."' description='".$arrData[$i]->description."' author='".$arrData[$i]->author."' title='".$arrData[$i]->title."' href='multimedia/".$arrData[$i]->file_alias."'><img ref=".$arrData[$i]->thumb." src='' style='width:200px;' /></a></div>";
//                        echo "<div class='gallery-item'><a href='multimedia/".$arrData[$i]->file_alias."'><img ref=".$arrData[$i]->thumb." src='' style='width:200px;' /></a></div>";
                        break;
                    } 
                    echo "<div class='gallery-item-blu'><a size='".round((filesize(JPATH_BASE."/multimedia/".$arrData[$i]->file_alias)/1000), 0)."' description='".$arrData[$i]->description."' author='".$arrData[$i]->author."' title='".$arrData[$i]->title."' href='multimedia/".$arrData[$i]->file_alias."'><img ref=".$arrData[$i]->thumb." src='multimedia/".$arrData[$i]->thumb."' style='width:190px; height:134px;' /></a></div>";
//                    echo "<div class='gallery-item-blu'><a href='multimedia/".$arrData[$i]->file_alias."'><img ref=".$arrData[$i]->thumb." src='multimedia/".$arrData[$i]->thumb."' style='width:190px; height:134px;' /></a></div>";
                    echo "<div class='gallery-item-title-blu'>".$arrData[$i]->title."</div>";
                    echo "</div>";
                    break;
                case 2:
                    echo "<div align='center' style='float:left; margin-bottom:10px;'>";
                    echo "<div class='gallery-item-blu'><div class='galery-audio-item'></div>";
                    
                    include '_mp3Player.php';
                    echo "</div>";
                    echo "<div class='gallery-item-title-blu'>".$arrData[$i]->title."</div>";
                    echo "</div>";
                    break;
                case 3:
                    echo "<div align='center' style='float:left; margin-bottom:10px;'>";
                    echo "<div class='gallery-video-item-blu'><a size='".round((filesize(JPATH_BASE."/multimedia/".$arrData[$i]->file_alias)/1000), 0)."' description='".$arrData[$i]->description."' author='".$arrData[$i]->author."' title='".$arrData[$i]->title."' href='multimedia/".$arrData[$i]->file_alias."'><img ref='".$arrData[$i]->thumb."' src='multimedia/".$arrData[$i]->thumb."' style='width:190px; height:134px;' /></a></div>";
                    echo "<div class='gallery-item-title-blu'>".$arrData[$i]->title."</div>";
                    echo "</div>";
                    break;
                case 4:
                    echo "<div align='center' style='float:left; margin-bottom:10px;'>";
                    echo "<div class='gallery-video-item-blu'>";
                    include '_youtubePlayer.php';
                    echo "</div><div class='gallery-item-title-blu'>".$arrData[$i]->title."</div>";
                    echo "</div>";
                    break;
            }
        }
    }
    echo "</td></tr>"
        ."</tbody></table>";
    $intPRSum += $intPR;
    $intPRInit += $intPR;
}
?>
</div>
<?php
include dirname(__FILE__).DS.'_searchForm.php';
include dirname(__FILE__).DS.'_paginator_blue.php';
?>

</div>