<?php
/**
 * @package	Joomla.Site
 * @subpackage	mod_social_bar
 * @copyright	Copyright (C) All rights reserved.
 * @license	All rights reserved.
 * @author      Alexander Hinestroza Palacios <alexander.hinestroza@fuziona.net>
 */

// no direct access
defined('_JEXEC') or die;
JHtml::_('behavior.keepalive');

foreach ($arrNetwork as $red){
    $net = $red->network;
    $url = $red->url;
    echo " <a href='".$url."' target='_blank'><img title='".strtoupper($net)." : ".$url."' src='images/".strtolower($net)."-btn.png' /></a> ";
}
echo "<a href='index.php?option=com_rss' target='_blank'><img title='RSS: http://terminalesmedellin.com/index.php?option=com_rss' src='images/rss_logo.png' /></a>";
?>