
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
?>
<div style="height:500px;">
<div id="container-slider">
    <div id="container-bck"></div>
</div>
<div id="bus-layer">
    <div id="select-menu">
        <a href="index.php?option=com_childrens&transporte=bus&Itemid=113"><div style="margin-top: 60px; width: 100%; height:80px;"></div></a>
        <a href="index.php?option=com_childrens&transporte=metro&Itemid=113"><div style="margin-top: 0px; width: 100%; height:100px;"></div></a>
        <a href="index.php?option=com_childrens&transporte=taxi&Itemid=113"><div style="margin-top: 0px; width: 100%; height:90px;"></div></a>
        <a href="index.php?option=com_childrens&transporte=pie&Itemid=113"><div style="margin-top: 0px; width: 100%; height:90px;"></div></a>
    </div>
    <a class="left" href="#"><div id="left"></div></a>
    <a class="children-terminal-a" target="_blank" href="index.php?option=com_children_map&Itemid=113"><div style="width: 370px; height: 450px; float:left;"></div></a>
    <a class="right" href="#"><div id="right"></div></a>
    <div id="message-container">
        <div id="message-bus"></div>
    </div>
    <div id="menu-container">
        <div class="menu-item" id="menu-games-button">
            <?php require 'games_menu.php'; ?>
            <a href="#" id="show-games-menu">
                <img src="images/child-menu-item1.png" />
            </a>
        </div>
        <div class="menu-item">
            <a class="armando-form" href="#armando-container.html">
                <img src="images/child-menu-item2.png" />
            </a>
        </div>
    </div>
</div>
</div>
<div id="road">
    <a class="left" href="#"><div id="left_"></div></a>
        <div id="rail">
            <div class="transport" id="bus"></div>
        </div>
    <a class="right" href="#"><div id="right_"></div></a>
</div>
<?php require 'armando_form.php'; ?>