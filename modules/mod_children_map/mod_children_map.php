<?php
/**
 * @package	Joomla.Site
 * @subpackage	mod_content
 * @copyright	Copyright (C) All rights reserved.
 * @license	All rights reserved.
 * @author      Alexander Hinestroza <alexander.hinestroza@fuziona.net>
 */
defined('_JEXEC') or die;
JHtml::_('behavior.keepalive');
require_once dirname(__FILE__).'/helper.php';
$arrChildMapPlace = modChildMapsHelper::getPlaces();
require JModuleHelper::getLayoutPath('mod_children_map', $params->get('layout', 'default'));

?>
