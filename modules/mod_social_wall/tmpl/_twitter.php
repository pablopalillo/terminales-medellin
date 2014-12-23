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

echo "<div id='tab-twitter' class='network'>";

    $boolPrimerTweet = true;
    if (!is_array($objTwitterResponse)){
        echo '<div class="fb-wall-box-first">'.
            '<img class="fb-wall-avatar" src="https://graph.facebook.com//picture?type=square" />'.
            '<div class="fb-wall-data">'.
            '<span class="fb-wall-message"><span class="fb-wall-message-from">Terminales.</span> </br> No ha compartido datos.</span>'.
            '</div>'.
            '</div>';
    }
    else{
        foreach ($objTwitterResponse as $objTwitter){
        $strFechaCreacion = $objTwitter->created_at;
        $strTweetDate = explode('+', $strFechaCreacion);
        $strNombTwetterUser = $objTwitter->user->screen_name;
        $strUserUrl = $objTwitter->user->url;
    //    $idTwetterUser = $objTwitter->user->id;
        $strTweet = $objTwitter->text;
        $strTweetProfileImage = $objTwitter->user->profile_image_url; 

        //Se reemplazan los datos.
        str_ireplace("\/", '/', $strTweetProfileImage);
        str_ireplace("\/", '/', $strUserUrl);

        if ($boolPrimerTweet){
            echo '<div class="fb-wall-box fb-wall-box-first">';
            $boolPrimerTweet = false;
        }
        else{
            echo '<div class="fb-wall-box">';
        }
        echo '<a href="http://www.twitter.com/'.$strNombTwetterUser.'" target="_blank">'.
            '<img class="fb-wall-avatar" src="'.$strTweetProfileImage.'" /></a>'.
                    '<div align="justify" class="fb-wall-data">'.
                        '<span class="fb-wall-message">'.
                        '<a href="'.$strUserUrl.'" class="fb-wall-message-from" target="_blank">'.$strNombTwetterUser.'</a> </br>';
                        echo $strTweet.
                        '</span>'.
                        '<span class="fb-wall-date">'.
                        $strTweetDate[0].'</span>'.
                    '</div>'.
            '</div>'; 
        }
    }
echo "</div>";

?>