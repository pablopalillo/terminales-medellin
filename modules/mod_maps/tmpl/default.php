<?php
/**
 * @package	Joomla.Site
 * @subpackage	mod_maps
 * @copyright	Copyright (C) All rights reserved.
 * @license	All rights reserved.
 * @author      Alexander Hinestroza <alexander.hinestroza@fuziona.net>
 */

// no direct access
defined('_JEXEC') or die;
JHtml::_('behavior.keepalive');

?>
<div id="content">
	<?php  
        if($noMap){
            $strNommapa = "Mapa no encontrado";
            echo "<div align='left' class='legend_blu_'>".$strNommapa."</div>";
            echo"<div class='menu'></div>".		
                "<div class='relative'>".
                    "<div class='maps'>".
                       "<img src='images/no_disponible.jpg' class='imgMap' />".
                    "</div>".
                "</div>";
            list($width, $height, $type, $attr) = getimagesize(JURI::base()."images/no_disponible.jpg");
            echo "<script>mapInit(".$width.", ".$height.");</script>";
        }
        else{
            $strNommapa = $arrayMap[0]->type;
            echo "<div align='center' class='legend_blu_'>".$strNommapa."</div>";
            echo"<div class='menu'></div>".		
              "<div class='relative'>".
                  "<div class='maps'>".
                     "<img src='images/map_".$intMapType."_".$intMapType.".jpg' class='imgMap' />";
                    foreach ($arrayMapInfo as $objMapInfo){
            //            $strNombre = $objMapInfo->map;
                        $strRoute = $objMapInfo->route;
                        $strPrice = $objMapInfo->price;
                        $strCoordenate = $objMapInfo->coordenate;
                        $arrayWays = $objMapInfo->way;
                        $boolHayRuta = false;
                        $strCiudad = explode("-", $strRoute);
                                                
                        foreach ($arrayWays as $objWays){
                            if($objWays->suggested){
                                echo "<div class='marker' id = '".$strRoute."' data-coords = '".$strCoordenate."' >".
                                    "<h3>".$strRoute."</h3>".
                                    "<p>"."<B>Ruta Sugerida: </B>".$objWays->way."</br>".
                                    "<B>Kilómetros recorridos: </B>".$objWays->kms." Km</br>".
                                    "<B>Duración aproximada: </B>".$objWays->time." Horas</br>".
                                    "<B>Número de peajes: </B>".$objWays->toll_number."</br>".
                                    "<B>Valor aproximado pajes: </B>".$objWays->toll_price."</p>"; 
                                
                                    if($strNommapa=="Antioquia"){
                                        echo "<p>".$objMapInfo->description."</br>".
                                            "<a href='".$objMapInfo->url."' target='_blank'>".$objMapInfo->url."</a>";
                                    }
                                echo "</div>";  //Div marker
                                $boolHayRuta=true;
                            }
                        }
                        if (!$boolHayRuta){
                            echo "<div class='marker' id = '".$strRoute."' data-coords = '".$strCoordenate."' >".
                                    "<h3>".$strRoute."</h3>".
                                    "<p>"."Ruta: -</br>".
                                    "Kilómetros recorridos: - Km</br>".
                                    "Duración aproximada: - Horas</br>".
                                    "Número de peajes: -</br>".
                                    "Valor aproximado pajes: -</p>";
                                    
                                    if($strNommapa=="Antioquia"){
                                        echo "<p>".$objMapInfo->description."</br>".
                                            "<a href='".$objMapInfo->url."' target='_blank'>".$objMapInfo->url."</a>";
                                    }
                                    
                            echo "</div>";
                                
                        }
                    }
                    echo "</div>";  //Div map
                echo "</div>"; //Div relative   
        }
                                   
 ?>
</div>
<div align='center' class='legend_blu_'>Empresas Transportadoras</div>
<?php
if(!$noMap){
    foreach ($arrayMapInfo as $objMapInfo){
    
    //Mostramos todas las compañias que cubren la ruta
    
    echo "<div id=_".$objMapInfo->route." class='content-wrap' style='background-image:url(\"images/company_wrapp_bck.png\");'>";
        $arrayCompanies = $objMapInfo->company;
        foreach ($arrayCompanies as $objCompanies){
            $strTerminal = $objCompanies->terminal == 'S' ? 'Terminal Sur' : 'Terminal Norte';
            echo "<div class='company-container'>"
                ."<div class='company-title'>".$objCompanies->company."</div>"
                ."<div>Taquilla: ".$objCompanies->office."</div>"
                ."<div>Teléfono: ".$objCompanies->phone."</div>"
                ."<div>".$strTerminal."</div>";
                if(!empty($objCompanies->url)){
                    echo "<div><a target='_blank' href='$objCompanies->url'>".$objCompanies->url."</a><img src='images/world_icon.png'></div>";
                }
                if(!empty($objCompanies->ecommerce)){
                    echo "<div><a target='_blank' href='".$objCompanies->ecommerce."'>".$objCompanies->ecommerce."</a><img src='images/ticket_icon.png'></div>";
                }
            echo "</div>";
        }
    echo "</div>";  
    }
    list($width, $height, $type, $attr) = getimagesize(JURI::base()."images/map_".$intMapType."_".$intMapType.".jpg");
    echo "<script>mapInit(".$width.", ".$height.");</script>";
}

?>