<?php
/**
 * @package	Joomla.Site
 * @subpackage	mod_intranet
 * @copyright	Copyright (C) All rights reserved.
 * @license	All rights reserved.
 * @author      diego calle <diego.calle@fuziona.net>
 */

defined('_JEXEC') or die;
require_once 'helper.php';
$arrNews = ModProjectsNewsFeaturedHelper::getNewsContent(JRequest::getInt('Article', 0));
$arrLatestNews = ModProjectsNewsFeaturedHelper::getLastestNewsContent(JRequest::getInt('Article', 0));
$arrNewMedia = ModProjectsNewsFeaturedHelper::getNewMedia($arrNews[0]->id);
$arrFeatured = ModProjectsNewsFeaturedHelper::getFeaturedContent(JRequest::getInt('Itemid'));
require 'tmpl/default.php';
?>