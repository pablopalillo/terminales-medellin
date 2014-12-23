<?php
/**
 * @package	Joomla.Site
 * @subpackage	mod_content
 * @copyright	Copyright (C) All rights reserved.
 * @license	All rights reserved.
 * @author      Juan Lotero <Juan.lotero@fuziona.net>
 */

defined('_JEXEC') or die;
JHtml::_('behavior.keepalive'); 
            echo "<div align='left' class='legend_blu_'>".$arrayMap[0]->type."</div><input type='hidden' id='Itemid' value='".JRequest::getInt('Itemid')."' />";
//            echo"<h1>".$arrayMap[0]->type."</h1> ";  
            echo "<div id='tabst'>".
                    "<ul>";
                    $arryIdMapTabs = array();
                    $primerMap = true;
                    $idTab;
                    $nombMap;
                    $tabWidth;
                    
                    $arrayZise = count($arrayMap2);
                    //Definimos el ancho de los tabs
                    switch ($arrayZise){
                        case 1:
                            $tabWidth = 99;
                            break;
                        case 2:
                            $tabWidth = 48;
                            break;
                        case 3:
                            $tabWidth = 32.7;
                            break;
                        case 4:
                            $tabWidth = 24;
                            break;
                        default :
                            $tabWidth = 15;
                            break;
                    }
                    foreach ($arrayMap2 as $objMapT){
                        $map = $objMapT -> map;
                        array_push($arryIdMapTabs,$objMapT-> id,$objMapT-> map);                       
                        if($intSubMapType==null){
                            if ($primerMap){
                                $idTab = $objMapT-> id;
                                $nombMap = $map;
                                $primerMap = false;
                            }
                        }else{
                            $idTab = $intSubMapType;
                            $nombMap = $map;
                        }  
                        switch (strtolower($map)){
                            case strtolower($map):
                                echo "<li style='width:".$tabWidth."%'><a id='tab".strtolower($map)."' href='#network-".strtolower($map)."'>".$map."</a></li>";
                                break;
                        }
                    }
                    
                    echo "</ul>";
                    
//                    for($i=0;$i<sizeof($arryIdMapTabs);$i=$i+2){
                        echo"<div id='network-".$nombMap."'>";
                            echo"<div class='relative'>".
                                    "<div class='maps' id='network-".$nombMap."' >";
//                                    "<div class='network-".strtolower($arryIdMapTabs[$i+1])."' >".
                                    $esONoes = file_exists("images/map_".$intMapType."_".$idTab.".jpg");
                                    if($esONoes){
                                        echo "<img src='images/map_".$intMapType."_".$idTab.".jpg' class='imgMap' />";
                                    }
                                    else{
                                        echo "<img src='images/no_disponible.jpg' class='imgMap' />";
                                    }   
                                    foreach ($arrayTerInfo as $objMapInfo){
                                        if($idTab==$objMapInfo->id_map){
                                            $strPlace = $objMapInfo->place;
                                        $strPicture = $objMapInfo->picture;
                                        $strCoordenate = $objMapInfo->coordenate;
                                        $strDesc = $objMapInfo->description;

                                        echo "<div class='marker' id = '".$strPlace."' data-coords = '".$strCoordenate."' >".
                                                "<h3>".$strPlace."</h3>".
                                                "<p>".$strPicture."</p>".
                                                "<p>".$strDesc."</p>".
                                            "</div>";
                                        }
                                    }

                                echo "</div>".
                            "</div>". 
                        "</div>";
                        
//                    }  
                    if($esONoes){
                        list($width, $height, $type, $attr) = getimagesize(JURI::base()."images/map_".$intMapType."_".$idTab.".jpg");
                    }else{
                        list($width, $height, $type, $attr) = getimagesize(JURI::base()."images/no_disponible.jpg");
                    }                                    
//                        list($width, $height, $type, $attr) = getimagesize(JURI::base()."images/map_".$intMapType."_".$idTab.".jpg");
                        echo "<script>mapInit(".$width.",".$height.");</script>";                       
            echo"</div>";
            
?>

