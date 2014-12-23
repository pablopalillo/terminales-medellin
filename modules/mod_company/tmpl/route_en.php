<?php
/**
 * @package	Joomla.Site
 * @subpackage	mod_company
 * @copyright	Copyright (C) All rights reserved.
 * @license	All rights reserved.
 * @author      yesid montoya <yesid.montoya@fuziona.net>
 */

defined('_JEXEC') or die;
JHtml::_('behavior.keepalive');
?> 
<div align="left" class="legend_blu_"><div style="float: left; width:820px;">Travel Destination</div>
<div style="float: left; margin-top: -5px;"><img src="images/route_icon.png" /></div>
</div>
<div id="content-wrap-route">
    <div style="width:885px;"></div>
 <?php
foreach ($arrData as $objData) {
    echo "<div class='company-container'>";
    $arrCompany = $objData->company;
    $arrWays = $objData->ways;
    $arrWaysSuggestnt = $objData->waysSuggestNt;
      
echo  "<table><tbody>";
if(!$objData->featured){
    echo "<tr><td><b>Route: </b></td><td>".$objData->route."<a class='routeStar' ref='".$objData->id."' href='#'><img src='images/star.png' /></a></td></tr>";
} else {
    echo "<tr><td><b>Route: </b></td><td>".$objData->route."</td></tr>";
}

echo"<tr><td style='padding-left:10px;'><b>Suggested Route:<b> </td><td>".$objData->way."</td></tr>"
    ."<tr><td style='padding-left:10px;'><b>Estimated duration of journey:</b></td><td>".$objData->time."</td></tr>"
    ."<tr><td style='padding-left:10px;'><b>Range of ticket price:</b></td><td>".$objData->price."</td></tr>"
    ."</tbody></table></br>";

echo "<div>"
    ."<div align='center' style='width:210px; float:left; font-weight:bold; border: solid 1px #ccc; margin-bottom:2px;'>Company</div>"
    ."<div align='center' style='width:210px; float:left; font-weight:bold; border: solid 1px #ccc; margin-bottom:2px;'>Office</div>"
    ."<div align='center' style='width:210px; float:left; font-weight:bold; border: solid 1px #ccc; margin-bottom:2px;'>Phone</div>"
    ."<div align='center' style='width:210px; float:left; font-weight:bold; border: solid 1px #ccc; margin-bottom:2px;'>Terminal</div>"
    ."</div>";


foreach ($arrCompany as $objCompany){
    $strTerminal = $objCompany->terminal == 'N' ? 'North' : 'South';
    echo "<div>"
        ."<div align='left' style='width:205px; float:left; border: solid 1px #ccc; margin-bottom:2px; padding-left:5px;'>".$objCompany->company."</div>"
        ."<div align='center' style='width:210px; float:left; border: solid 1px #ccc; margin-bottom:2px;'>".$objCompany->office."</div>"
        ."<div align='center' style='width:210px; float:left; border: solid 1px #ccc; margin-bottom:2px;'>".$objCompany->phone."</div>"
        ."<div align='center' style='width:210px; float:left; border: solid 1px #ccc; margin-bottom:2px;'>".$strTerminal."</div>"
        ."</div>";
}
echo "</tbody>";
echo "</table>";
echo "</br>";
foreach ($arrWays as $objWays){
 echo "<table><tbody>"
   ."<tr><td>Road Tolls Quantity:</td><td>".$objWays->toll_number."</td></tr>"
   ."<tr><td>Tolls Approximate Price:</td><td>".$objWays->toll_price."</td></tr>"
   ."<tr><td>Kilometres travelled:</td><td>".$objWays->kms."</td></tr>"
   ."</tbody></table></br>";
}
        echo "<table id='way".$objData->id."' class='hiddenContent'><tbody>";
        foreach ($arrWaysSuggestnt as $objwaysSuggestNt){
         echo "<tr><td><img src='images/star.png' />Suggested Route : </td><td>".$objwaysSuggestNt->way."</td></tr>"
            ."<tr><td>Estimated duration of journey:</td><td>".$objwaysSuggestNt->time."</td></tr>"
           ."<tr><td>Road Tolls Quantity:</td><td>".$objwaysSuggestNt->toll_number."</td></tr>"
           ."<tr><td>Tolls Approximate Price:</td><td>".$objwaysSuggestNt->toll_price."</td></tr>"
           ."<tr><td>Kilometres travelled:</td><td>".$objwaysSuggestNt->kms."</td></tr>"
           ."<tr><td></br></td><td></td></tr>";

        }
        echo "</tbody></table></br>";
        echo "</div>";
    }
?>
</div>