<?php
/**
 * @package	Joomla.Site
 * @subpackage	mod_home_news_featured
 * @copyright	Copyright (C) All rights reserved.
 * @license	All rights reserved.
 * @author      diego calle <diego.calle@fuziona.net>
 */

defined('_JEXEC') or die;
require_once 'helper.php';
$strCategory = ModProjectsNewsFeaturedHelper::getNewsCategory(JRequest::getInt('Itemid', 112));
$arrArticleContent = ModProjectsNewsFeaturedHelper::getArticleContent(JRequest::getInt('Article', 0));
$arrNews = ModProjectsNewsFeaturedHelper::getNewsContent(JRequest::getVar('Categoryid', false));
if(!empty($arrArticleContent)){
    $arrNewMedia = ModProjectsNewsFeaturedHelper::getNewMedia($arrArticleContent[0]->id);
} else {
    $arrNewMedia = ModProjectsNewsFeaturedHelper::getNewMedia($arrNews[0]->id);
} 
$arrFeatured = ModProjectsNewsFeaturedHelper::getFeaturedContent(JRequest::getInt('Itemid'));
require 'tmpl/default.php';
?>