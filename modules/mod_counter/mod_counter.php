<?php
/**
 * @package	Joomla.Site
 * @subpackage	mod_company
 * @copyright	Copyright (C) All rights reserved.
 * @license	All rights reserved.
 * @author      diego calle <diego.calle@fuziona.net>
 */

defined('_JEXEC') or die;
require_once dirname(__FILE__).'/helper.php';
modCounterHelper::setCounter();
$arrData = modCounterHelper::getContent();
require JModuleHelper::getLayoutPath('mod_counter', $params->get('layout', 'default'));