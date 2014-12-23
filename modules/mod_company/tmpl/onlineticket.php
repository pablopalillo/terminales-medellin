<?php
/**
 * @package	Joomla.Site
 * @subpackage	mod_company
 * @copyright	Copyright (C) All rights reserved.
 * @license	All rights reserved.
 * @author      yesid montoya <yesid.montoya@fuziona.net>
 */

defined('_JEXEC') or die;
JHtml::_('behavior.keepalive');
?>
<div align="left" class="legend_blu_"><div style="float: left; width:820px;">Tiquete en Línea</div>
</div>
<?php
$strLang = "es";
$strColor = "blue";
require_once 'default_search.php'; 
?>
<div id="content-wrap">
<?php
$count = 0;
foreach ($arrData as $value) {
    $strTerminal = $value->terminal == 'S' ? 'Terminal Sur' : 'Terminal Norte';
    $count = $count+1;
    $strContainerClass = ($count > $strPrRequest)? "company-container-hidden" : "company-container";
    echo "<div class='".$strContainerClass."'>"
    ."<div class='company-title'>".$value->company."</div>"
    ."<div>Taquilla: ".$value->office."</div>"
    ."<div>Teléfono: ".$value->phone."</div>"
    ."<div>".$strTerminal."</div>"
    ."<div><a target='_blank' href='$value->url'>".$value->url."<img src='images/world_icon.png' /></a></div>";
    if(!empty($value->ecommerce)){
        echo "<div><a target='_blank' href='.$value->ecommerce'>".$value->ecommerce."<img src='images/ticket_icon.png' /></a></div>";
    }
    echo "</div>";
}
require_once 'default_paginator.php';
?>
</div>

