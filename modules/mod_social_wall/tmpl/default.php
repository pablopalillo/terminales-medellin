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

echo "<div id='tabs'>".
            "<ul>";
            foreach ($arrNetwork as $objNetwork){
                $net = $objNetwork->network;  
                switch (strtolower($net)){
                  case strtolower($net):
                      echo "<li><a id='tab".strtolower($net)."' href='#tab-".strtolower($net)."'><img src='images/".strtolower($net).".png'/></a></li>";
                    break;
                }
            }
	echo "</ul>";
                
        //Creamos el contenido de las tab 
        foreach ($arrNetwork as $objNetwork){
                    require '_'.strtolower($objNetwork->network).'.php';
        }
echo "</div>";

?>