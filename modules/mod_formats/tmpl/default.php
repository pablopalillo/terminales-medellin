<?php
/**
 * @package	Joomla.Site
 * @subpackage	mod_formats
 * @copyright	Copyright (C) All rights reserved.
 * @license	All rights reserved.
 * @author      diego calle <diego.calle@fuziona.net>
 */

// no direct access
defined('_JEXEC') or die;
JHtml::_('behavior.keepalive');
?>
<a id="formats-a" href="#formats.text">
<?php if('com_english' == JRequest::getVar('option', false)){ ?>
    <img src='images/formats-btn-en.png' />
<?php } else { ?>
    <img src='images/formats-btn.png' />
<?php } ?>
</a>