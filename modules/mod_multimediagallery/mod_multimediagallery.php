<?php
/**
 * @package	Joomla.Site
 * @subpackage	mod_multimediagallery
 * @copyright	Copyright (C) All rights reserved.
 * @license	All rights reserved.
 * @author      yesid montoya <yesid.montoya@fuziona.net>
 */

defined('_JEXEC') or die;
require_once dirname(__FILE__).DS.'helper.php';
$intPR = (0 == JRequest::getInt('pr')) ? 12 : JRequest::getInt('pr');
$strSearchByName = JRequest::getVar('searchbyname');
$strSearchByFtype = JRequest::getInt('ftype');
$strSearchByDate = JRequest::getVar('searchbydate');
$intGalleryId = JRequest::getInt('gallery', false);
$intProjectId = JRequest::getInt('project', false);;
$strGalleryName = JRequest::getInt('gallery', false) != false ? modMultimediaGalleryHelper::getGalleryCategory(JRequest::getInt('gallery')) : "Galería Multimedia";
$arrData = modMultimediaGalleryHelper::getContent(null, $strSearchByName,$strSearchByFtype,$strSearchByDate, $intGalleryId, $intProjectId);
$strColor = JRequest::getVar('color','blue');
switch ($strColor){
    case 'blue':
        require JModuleHelper::getLayoutPath('mod_multimediagallery', $params->get('layout', 'default_blue'));
        break;
    case 'green':
        require JModuleHelper::getLayoutPath('mod_multimediagallery', $params->get('layout', 'default_green'));
        break;
    case 'orange':
        require JModuleHelper::getLayoutPath('mod_multimediagallery', $params->get('layout', 'default_orange'));
        break;
}
?>