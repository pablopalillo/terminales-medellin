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
<div align="left" class="legend_blu_"><div style="float: left; width:820px;">Destinos de Viaje</div>
<div style="float: left; margin-top: -5px;"><img src="images/route_icon.png" /></div>
</div>
<?php
$strLang = "es";
$strColor = "blue";
require_once 'default_search_route.php'; 
?>
<div id="content-wrap-route">
    <div style="width:885px;"></div>
 <?php
$count = 0;
foreach ($arrData as $objData) {
    $count = $count+1;
    $strContainerClass = ($count > $strPrRequest)? "company-container-hidden" : "company-container";
    echo "<div class='".$strContainerClass."'>";
    $arrCompany = $objData->company;
    $arrWays = $objData->ways;
    $arrWaysSuggestnt = $objData->waysSuggestNt;
      
echo  "<table><tbody>";
if($objData->featured){
    echo "<tr><td><b>Trayecto: </b></td><td>Medellín - ".$objData->route."<a class='routeStar' ref='".$objData->id."' href='#'><img src='images/star.png' /></a></td></tr>";
} else {
    echo "<tr><td><b>Trayecto: </b></td><td>Medellín - ".$objData->route."</td></tr>";
}

echo"<tr><td style='padding-left:10px;'><b>Ruta Sugerida:<b> </td><td>".$objData->way."</td></tr>"
    ."<tr><td style='padding-left:10px;'><b>Duración estimada de viaje:</b></td><td>".$objData->time."</td></tr>"
    ."<tr><td style='padding-left:10px;'><b>Rango valor de tiquete:</b></td><td>".$objData->price."</td></tr>"
    ."</tbody></table></br>";

echo "<div>"
    ."<div align='center' style='width:210px; float:left; font-weight:bold; border: solid 1px #ccc; margin-bottom:2px;'>Empresa</div>"
    ."<div align='center' style='width:210px; float:left; font-weight:bold; border: solid 1px #ccc; margin-bottom:2px;'>Taquilla</div>"
    ."<div align='center' style='width:210px; float:left; font-weight:bold; border: solid 1px #ccc; margin-bottom:2px;'>Teléfono</div>"
    ."<div align='center' style='width:210px; float:left; font-weight:bold; border: solid 1px #ccc; margin-bottom:2px;'>Terminal</div>"
    ."</div>";


foreach ($arrCompany as $objCompany){
    $strTerminal = $objCompany->terminal == 'N' ? 'Norte' : 'Sur';
    echo "<div style='height:34px;'>"
        ."<div align='left' style='width:205px; height:32px; float:left; border: solid 1px #ccc; margin-bottom:2px; padding-left:5px;'>".$objCompany->company."</div>"
        ."<div align='center' style='width:210px; height:32px; float:left; border: solid 1px #ccc; margin-bottom:2px;'>".$objCompany->office."</div>"
        ."<div align='center' style='width:210px; height:32px; float:left; border: solid 1px #ccc; margin-bottom:2px;'>".$objCompany->phone."</div>"
        ."<div align='center' style='width:210px; height:32px; float:left; border: solid 1px #ccc; margin-bottom:2px;'>".$strTerminal."</div>"
        ."</div>";
}
echo "</tbody>";
echo "</table>";
echo "</br>";
foreach ($arrWays as $objWays){
 echo "<table><tbody>"
   ."<tr><td>Número de peajes:</td><td>".$objWays->toll_number."</td></tr>"
   ."<tr><td>Valor aproximado peajes:</td><td>".$objWays->toll_price."</td></tr>"
   ."<tr><td>Kilometros recorridos:</td><td>".$objWays->kms."</td></tr>"
   ."</tbody></table></br>";
}
        echo "<table id='way".$objData->id."' class='hiddenContent'><tbody>";
        foreach ($arrWaysSuggestnt as $objwaysSuggestNt){
         echo "<tr><td><img src='images/star.png' />Ruta Sugerida : </td><td>".$objwaysSuggestNt->way."</td></tr>"
            ."<tr><td>Duración estimada de viaje:</td><td>".$objwaysSuggestNt->time."</td></tr>"
           ."<tr><td>Número de peajes:</td><td>".$objwaysSuggestNt->toll_number."</td></tr>"
           ."<tr><td>Valor aproximado peajes:</td><td>".$objwaysSuggestNt->toll_price."</td></tr>"
           ."<tr><td>Kilometros recorridos:</td><td>".$objwaysSuggestNt->kms."</td></tr>"
           ."<tr><td></br></td><td></td></tr>";

        }
        echo "</tbody></table></br>";
        echo "</div>";
    }
    require_once 'default_paginator.php';
?>
</div>