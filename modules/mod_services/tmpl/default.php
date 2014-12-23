<?php
/**
 * @package	Joomla.Site
 * @subpackage	mod_rent
 * @copyright	Copyright (C) All rights reserved.
 * @license	All rights reserved.
 * @author      Alexander Hinestroza <alexander.hinestroza>
 */

// no direct access
defined('_JEXEC') or die;
JHtml::_('behavior.keepalive');
?>
<div align="left" class="legend_green_"><div style="width:820px; float: left;">Tramites y Servicios</div>
<div style="float: left; margin-top: -5px;"><img src="images/services_icon.png" /></div></div>
<div class="content-wrap-green">
    <div class="content-wrap-green-container">
        <?php if(array() != $arrData) : ?>
        <div style="width:710px; height: 53px; padding-top: 27px; padding-left: 90px; background: url('images/med_travel_header.png'); margin-left: 25px;">
            <div style="font-size: 18px;"><?php echo (isset($arrData[0]->menutitle)) ? $arrData[0]->menutitle : 'Guía Turística'; ?></div>
        </div>
        <div style="width:530px; float:left; margin-left: 40px;">
            <?php
                foreach($arrData as $objData){
                    echo "<a href='".$objData->link."' style='color:#8AC440; text-decoration:none; "
                        ."font-weight:bold; font-size:15px;'><div style='width:500px; "
                        ."height:20px; padding-top:6px; "
                        ."padding-left:40px;'>"
                        .$objData->title
                        ."</div></a>";
                }
            ?>
        </div>
        <?php endif; ?>
    </div>
</div>