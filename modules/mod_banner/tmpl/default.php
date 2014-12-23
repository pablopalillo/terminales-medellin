
<?php
/**
 * @package	Joomla.Site
 * @subpackage	mod_banner
 * @copyright	Copyright (C) All rights reserved.
 * @license	All rights reserved.
 * @author      diego calle <diego.calle@fuziona.net>
 */

// no direct access
defined('_JEXEC') or die;
JHtml::_('behavior.keepalive');
if(array() != $arrContent){
    echo "<div style='width:".$arrContent[0]->width."px; height:".$arrContent[0]->height."px; opacity:1;' class='banner-item-container'>";
        for ($x = 0; $x<count($arrContent); $x++){
            $intZIndex = -$x+10;
            echo "<div order='".$x."' total='".count($arrContent)."' id='banner-item-".  rand(10000000, 99999999)."' style='position:absolute; z-index:".$intZIndex.";'>"
                ."<a href='".$arrContent[$x]->href."'><img style='width:".$arrContent[$x]->width."px; height:"
                .$arrContent[$x]->height."px;' src='images/banners/"
                .$arrContent[$x]->file_alias."' /></div></a>";
        }
    echo "</div>";
}
?>