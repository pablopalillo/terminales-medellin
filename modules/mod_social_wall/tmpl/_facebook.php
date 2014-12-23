<?php
/**
 * @package	Joomla.Site
 * @subpackage	mod_weather
 * @copyright	Copyright (C) All rights reserved.
 * @license	All rights reserved.
 * @author      Alexander Hinestroza Palacios <alexander.hinestroza@fuziona.net>
 */

// no direct access
defined('_JEXEC') or die;
JHtml::_('behavior.keepalive');

$boolPrimero = true;
$strGraphURL = "https://graph.facebook.com/";
//foreach ($objFacebookResponse as $objFacebook){
    
echo "<div id='tab-facebook' class='network'>";

    $objFacebook = $objFacebookResponse->data;
    $numTamano = sizeof($objFacebook);
    
    if ($numTamano == 0){
        echo '<div class="fb-wall-box-first">'.
            '<img class="fb-wall-avatar" src="'.$strGraphURL.'/picture?type=square" />'.
            '<div class="fb-wall-data">'.
            '<span class="fb-wall-message"><span class="fb-wall-message-from">Terminales.</span> </br> No ha compartido información.</span>'.
            '</div>'.
            '</div>';
    }
    else{
        for($numCont =0; $numCont< $numTamano; $numCont++){
            if(!empty($objFacebook[$numCont]->message)){
                if(!property_exists($objFacebook[$numCont], "previous")){
                    $strIdUsuario = $objFacebook[$numCont]->from->id;
                    $strNomUsuario = $objFacebook[$numCont]->from->name;
                    if($boolPrimero){
                        echo '<div class="fb-wall-box fb-wall-box-first">';
                        $boolPrimero = false;
                    }else{
                        echo '<div class="fb-wall-box">';
                    }
                    echo '<a href="http://www.facebook.com/profile.php?id='.$strIdUsuario.'" target="_blank">'
                            .'<img class="fb-wall-avatar" src="'.$strGraphURL.$strIdUsuario.'/picture?type=square" /></a>'
                            .'<div class="fb-wall-data" align="justify">'
                            .'<span class="fb-wall-message">'
                            .'<a href="http://www.facebook.com/profile.php?id='.$strIdUsuario.'" class="fb-wall-message-from" target="_blank">'.$strNomUsuario.'</a> ';
                    if(property_exists($objFacebook[$numCont], "message")){
                        echo '</br>'.$objFacebook[$numCont]->message;
                    }
                    echo'</span></div><div class="fb-wall-clean"></div></div>';
                }
            }
        }
    }
echo "</div>";
?>