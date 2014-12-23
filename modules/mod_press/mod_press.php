<?php
/**
 * @package	Joomla.Site
 * @subpackage	mod_Press
 * @copyright	Copyright (C) All rights reserved.
 * @license	All rights reserved.
 * @author      diego calle <diego.calle@fuziona.net>
 */

defined('_JEXEC') or die;
require_once dirname(__FILE__).'/helper.php';
$arrData = modPollHelper::getContent();
require JModuleHelper::getLayoutPath('mod_press', $params->get('layout', 'default'));