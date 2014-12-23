<?php
/**
 * @package	Joomla.Site
 * @subpackage	mod_poll
 * @copyright	Copyright (C) All rights reserved.
 * @license	All rights reserved.
 * @author      yesid montoya <yesid.montoya@fuziona.net>
 */
defined('_JEXEC') or die;
JHtml::_('behavior.keepalive');
?>
<div align="left" class="legend_blu_"><div style="float: left; width:820px;">Sala de Prensa</div>
<div style="float: left; margin-top: -5px;"><img src="images/press_icon.png" /></div>
</div>
<div style="width:900px; height:250px; background-image: url('images/press_bck.png'); margin-top: 40px; padding-top: 10px;">
    <div style="width:830px; height:230px; margin-left: 32px; border: 3px solid #129AD6; background-color: #fff;-webkit-border-radius: 6px;
    -moz-border-radius: 6px;
    border-radius: 6px;">
        <div align="center" style="width: 100%; margin-top: 70px;">
<?php
foreach($arrData AS $objData){
    echo "<a href='".$objData->link."'><img style='margin-left:20px;' src='images/".$objData->id.".png' /></a>";
}
?>
        </div>
    </div>

</div>