<?php
/**
 * @package	Joomla.Site
 * @subpackage	mod_banner
 * @copyright	Copyright (C) All rights reserved.
 * @license	All rights reserved.
 * @author      diego calle <diego.calle@fuziona.net>
 */
defined('_JEXEC') or die;

if(!defined('DS')) define('DS', DIRECTORY_SEPARATOR);

require_once dirname(__FILE__).DS.'helper.php';
$arrContent = modBannerHelper::getContent($params->get('banner', 0));
require JModuleHelper::getLayoutPath('mod_banner', $params->get('layout', 'default'));
?>
