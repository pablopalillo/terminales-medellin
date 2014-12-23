<?php
/**
 * @package	Joomla.Site
 * @subpackage	mod_weather
 * @copyright	Copyright (C) All rights reserved.
 * @license	All rights reserved.
 * @author      diego calle <diego.calle@fuziona.net>
 */

defined('_JEXEC') or die;
require_once dirname(__FILE__).DS.'helper.php';

require_once dirname(__FILE__).DS.'mod_social_wall_facebook.php';
//require_once dirname(__FILE__).DS.'mod_social_wall_twitter.php';
//require_once dirname(__FILE__).DS.'mod_social_wall_youtube.php';

$arrNetwork = modSocialWallHelper::getNetworks();
require JModuleHelper::getLayoutPath('mod_social_wall', $params->get('layout', 'default'));

