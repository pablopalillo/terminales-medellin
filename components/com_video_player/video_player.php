<?php
/**
 * @package	Joomla.Site
 * @subpackage	com_video_player
 * @copyright	Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license	GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;

jimport('joomla.application.module.helper');
echo JModuleHelper::renderModule(JModuleHelper::getModule('mod_video_player'));