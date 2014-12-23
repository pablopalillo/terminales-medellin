<?php
/**
 * @package	Joomla.Site
 * @subpackage	mod_render_menu
 * @copyright	Copyright (C) All rights reserved.
 * @license	All rights reserved.
 */
defined('_JEXEC') or die;
JHtml::_('behavior.keepalive');
require_once dirname(__FILE__).'/helper.php';
$arrData = modRenderMenuHelper::getContent($params->get('menu', 0));
require JModuleHelper::getLayoutPath('mod_render_menu', $params->get('layout', 'default'));
?>
