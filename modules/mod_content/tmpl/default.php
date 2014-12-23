<?php
/**
 * @package	Joomla.Site
 * @subpackage	mod_content
 * @copyright	Copyright (C) All rights reserved.
 * @license	All rights reserved.
 * @author      Juan Lotero <Juan.lotero@fuziona.net>
 */

// no direct access
defined('_JEXEC') or die;
JHtml::_('behavior.keepalive');

if (isset($arrData) && count($arrData)>= 1) {?>
    <?php if($arrData[0]->catid == "8"){ ?>
       <table style="width: 100%; border: none; background-image: url('images/orange_background.jpg')">
    <?php } else { ?>
        <table style="width: 100%; border: none;">
    <?php } ?>
<?php
    echo "<tr style='border:none;'><td style='border:none;'><h1>"
        .$arrData[0]->title."</h1></td></tr>"
        ."<tr style='border:none;'><td style='border:none;'><div style='margin-left:10px; font-size:10px;'>Fecha de publicación: "
        .$arrData[0]->created."</div></td></tr>"
        ."<tr style='border:none;'><td style='border:none;'><div style='margin-left:10px; font-size:10px;'>Autor: "
        .$arrData[0]->user."</div></td></tr>"
        ."<tr style='border:none;'><td style='border:none;'><div style='float:left; width:550px;'>"
        .$arrData[0]->fulltext."</div>";
        include '_media.php';    
    echo "</td></tr>";
       
} ?>
</table>