<?php
/**
 * @package	Joomla.Site
 * @subpackage	mod_home_news_featured
 * @copyright	Copyright (C) All rights reserved.
 * @license	All rights reserved.
 * @author      diego calle <diego.calle@fuziona.net>
 */

defined('_JEXEC') or die;
require_once dirname(__FILE__).DS.'helper.php';
$arrNews = modHomeNewsFeaturedHelper::getNewsContent();
$arrFeatured = modHomeNewsFeaturedHelper::getFeaturedContent();
require JModuleHelper::getLayoutPath('mod_home_news_featured', $params->get('layout', 'default'));
?>