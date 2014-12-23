<?php
/**
 * @package	Joomla.Site
 * @subpackage	mod_counter
 * @copyright	Copyright (C) All rights reserved.
 * @license	All rights reserved.
 * @author      diego calle <diego.calle@fuziona.net>
 */

// no direct access
defined('_JEXEC') or die;
JHtml::_('behavior.keepalive');
echo "<p>".JTEXT::_('JCOUNTER').": ".$arrData[0]->count."</p>";