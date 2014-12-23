<?php
/**
 * @package	Joomla.Site
 * @subpackage	mod_content
 * @copyright	Copyright (C) All rights reserved.
 * @license	All rights reserved.
 * @author      Juan Lotero <Juan.lotero@fuziona.net>
 */

defined('_JEXEC') or die;

jimport('joomla.application.module.helper');
echo JModuleHelper::renderModule(JModuleHelper::getModule('mod_reservation'));