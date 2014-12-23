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
    echo"<div class='menu'></div>".		
      "<div class='relative'>".
          "<div class='maps' style='width:1000px; height:700px'>".
             "<img src='images/terminal_child.jpg' class='imgMap' />";
             if(sizeof($arrChildMapPlace)>0){
                foreach ($arrChildMapPlace as $objPlace){
                    echo "<div class='marker' id = '".$objPlace->id."' data-coords = '".$objPlace->coordenates."' >".
                            "<h3>".$objPlace->title."</h3>".
                            "<p>".$objPlace->message."</p>"; 
                    echo "</div>";  //Div marker
                }
            }
                echo "</div>";  //Div map
            echo "</div>"; //Div relative 
    list($width, $height, $type, $attr) = getimagesize(JURI::base()."images/terminal_child.jpg");
    echo "<script>mapInit(".$width.", ".$height.");</script>";
 ?>
</div>