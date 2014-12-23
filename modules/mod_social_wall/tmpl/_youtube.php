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

echo "<div id='tab-youtube' class='network'>";

    $strPrimerTube = true;
    if ($objYoutubeResponse==null){
        echo '<div class="fb-wall-box-first">'.
            '<img class="fb-wall-avatar" src="https://graph.facebook.com//picture?type=square" />'.
            '<div class="fb-wall-data">'.
            '<span class="fb-wall-message"><span class="fb-wall-message-from">Terminales.</span> </br> No ha compartido datos.</span>'.
            '</div>'.
            '</div>';
    }
    else{
        foreach ($objYoutubeResponse->feed->entry as $objYoutubeFeeds){
        
        //Definicion de variables internas
        $t = '$t';
        $strMediaDescription= 'media$description';
        $strMediaGroup = 'media$group';
        $strMediaPlayer ='media$player';
        $strMediaThunmbnail = 'media$thumbnail';
        
        //Obtencion de datos
        $strPublishedDateTime = $objYoutubeFeeds->published->$t;
        $strPublishedDate  = explode('T',$strPublishedDateTime);
        $strPublishedTime = explode('.',$strPublishedDate[1]);
        $strVideoTitle = $objYoutubeFeeds->title->$t;
        $strMediaImagen = $objYoutubeFeeds->$strMediaGroup->$strMediaThunmbnail;
        $strVideoImageUrl = $strMediaImagen[0]->url;
        $strVideoDescription = $objYoutubeFeeds->$strMediaGroup->$strMediaDescription->$t;
        $strMediaPlay = $objYoutubeFeeds->$strMediaGroup->$strMediaPlayer;
        $strVideoUrl = $strMediaPlay[0]->url;
        
        if ($strPrimerTube){
            echo '<div class="fb-wall-box fb-wall-box-first">';
            $strPrimerTube = false;
        }
        else{
            echo '<div class="fb-wall-box">';
        }
        echo '<a href="'.$strVideoUrl.'" target="_blank">'.
            '<img class="fb-wall-avatar" src="'.$strVideoImageUrl.'" height="50px" width="50px" /></a>'.
                    '<div align="justify" class="fb-wall-data">'.
                        '<span class="fb-wall-message">'.
                        '<a href="'.$strVideoUrl.'" class="fb-wall-message-from" target="_blank">'.$strVideoTitle.'</a> </br>';
                        echo $strVideoDescription.
                        '</span>'.
                        '<span class="fb-wall-date">'.
                        $strPublishedDate[0]."  ".$strPublishedTime[0].'</span>'.
                    '</div>'.
            '</div>'; 
        }
    }  
echo "</div>";

?>