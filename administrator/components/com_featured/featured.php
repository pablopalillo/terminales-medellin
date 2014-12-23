<?php
defined('_JEXEC') or die;
JToolbarHelper::title("Administración Destacados");
require_once 'helper.php';
switch (JRequest::getVar('task')){
    
    case 'addFeatured' : 
        require_once 'tmpl/addFeatured_form.php';
        break;
    
    case 'deleteFeatured' : 
        $mixData = FeaturedComponentHelper::deleteFeatured(JRequest::getInt('feturedId'));
        require_once 'tmpl/default_featureds.php';
        break;
    
    case 'saveFeatured' : 
        $mixData = FeaturedComponentHelper::saveFeatured(
            JRequest::getVar('featuredTitle'), 
            JRequest::getVar('featuredUrl'), 
            JRequest::getVar('featuredImage')
        );
        require_once 'tmpl/default_featureds.php';
        break;
    
    case 'saveFeaturedOrder' :
        echo FeaturedComponentHelper::saveFeaturedOrder(json_decode(JRequest::getVar('arrFeaturedId')), json_decode(JRequest::getVar('arrFeaturedOrder')));
        exit;
        break;
    default :
        $mixData = FeaturedComponentHelper::getFeatureds();
        require_once 'tmpl/default_featureds.php';
        break;
}