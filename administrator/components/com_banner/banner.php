<?php
defined('_JEXEC') or die;
JToolbarHelper::title("Administración Banners");
require_once 'helper.php';
switch (JRequest::getVar('task')){
    case 'addbanner':
        require_once 'tmpl/addBanner_form.php';
        break;
    
    case 'savebanner':
        $arrData = BannersComponentHelper::saveBanner(JRequest::getVar('name'),JRequest::getVar('width'),JRequest::getVar('height'));
        require_once 'tmpl/default_banner.php';
        break;
    
    case 'deletebanner':
        $arrData = BannersComponentHelper::deleteBanner(JRequest::getVar('id_banner'));
        require_once 'tmpl/default_banner.php';
        break;
    
    case 'addbanneritem':
        require_once 'tmpl/addBannerItem_form.php';
        break;
    
    case 'savebanneritem':
       $arrData = BannersComponentHelper::saveBannerItem(JRequest::getVar('id'),JRequest::getVar('banner'),JRequest::getVar('ref'));
       require_once 'tmpl/default_bannerItem.php';
       break;
    
    case 'deletebanneritem':
        $arrData = BannersComponentHelper::deleteBannerItem(JRequest::getVar('id_bannerI'),JRequest::getVar('id_banner'));
        require_once 'tmpl/default_bannerItem.php';
        break;
    
    case 'viewbanneritem':
        $idDir=JRequest::getVar('idDir');
        $arrData = BannersComponentHelper::getBannerItems(JRequest::getVar('id_banner'));
        require 'tmpl/default_bannerItem.php';
        break;
    
    default :
        $arrData = BannersComponentHelper::getBanners();
        require_once 'tmpl/default_banner.php';
        break;
}