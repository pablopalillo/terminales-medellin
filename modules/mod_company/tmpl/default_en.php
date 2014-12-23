<?php
/**
 * @package	Joomla.Site
 * @subpackage	mod_company
 * @copyright	Copyright (C) All rights reserved.
 * @license	All rights reserved.
 * @author      yesid montoya <yesid.montoya@fuziona.net>
 */

// no direct access
defined('_JEXEC') or die;
JHtml::_('behavior.keepalive');
?>
<div align="left" class="legend_blu_"><div style="float: left; width:820px;">Transportation Companies</div>
<div style="float: left; margin-top: -5px;"><img src="images/company_icon.png" /></div>
</div>
<?php 
$strLang = "en";
$strColor = "blue";
require_once 'default_search.php'; 
?>
<div id="content-wrap-company">
<?php
$count = 0;
foreach ($arrData as $value) {
    $count = $count+1;
    $strTerminal = $value->terminal == 'S' ? 'South Terminal' : 'North Terminal';
    $strContainerClass = ($count > $strPrRequest)? "company-container-hidden" : "company-container";
    echo "<div class='".$strContainerClass."' style='height:130px;'><div style='float:left; width:600px;'>"
        ."<div class='company-title' style='float:left; width:600px;'><a ref='".$value->id."' href='#' class='company-history-tip-a'>".$value->company."</a></div>"
        ."<div id='history-tip-".$value->id."' class='company-history-tip'>"
            ."<div class='company-history-tip-title'><strong>HISTORY</strong></div>"
            ."<div class='company-history-tip-text'>".substr($value->history, 0, 250)."</div>"
        ."</div>"
        ."<div  style='float:left; width:600px;'>Terminal Location: ".$strTerminal."</div>"
        ."<div  style='float:left; width:600px;'>Office: ".$value->office."</div>"
        ."<div  style='float:left; width:600px;'>Phone: ".$value->phone."</div>"
        ."<div  style='float:left; width:600px;'><a target='_blank' href='$value->url'>".$value->url."<img src='images/world_icon.png' /></a></div>";
    if(!empty($value->ecommerce)){
        echo "<div style='float:left; width:600px;'><a target='_blank' href='".$value->ecommerce."'>".$value->ecommerce."<img src='images/ticket_icon.png' /></a></div>";
    }
    echo "</div>";
    if(!empty($value->company_logo)){
        echo "<div style='width:240px; height:120px; margin-top:0px; float:right;'><img style='width:240px;' src='images/".$value->company_logo."'></div>";
    } else {
        echo "<div style='width:240px; height:120px; margin-top:0px; float:right;'><img  style='max-width:240px; max-height:120px;' src='images/logo.png'></div>";
    }
    echo "</div>";
}
require_once 'default_paginator.php'; 
?>
</div>
