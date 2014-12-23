<?php
defined('_JEXEC') or die;
JToolbarHelper::title("Administración Destinos de Viaje");
require_once 'helper.php';
switch (JRequest::getVar('task')){
    
    case 'assignCompany' :
        $mixCompanyData = RouteComponentHelper::getCompanies();
        $mixData = RouteComponentHelper::assignCompany(
            JRequest::getVar('routeId', false), 
            JRequest::getVar('companyId', false)
        );
        require_once 'tmpl/asignCompany.php';
        break;
    case 'deleteAssignCompany' :
        $mixCompanyData = RouteComponentHelper::getCompanies();
        $mixData = RouteComponentHelper::deleteAssignCompany(
                JRequest::getVar('routeId', false),
                JRequest::getVar('ItemId', false));
        require_once 'tmpl/asignCompany.php';
        break;
    
    case 'saveRoute' :
        $mixData = RouteComponentHelper::saveRoute(
            JRequest::getVar('route', false), 
            JRequest::getVar('price', false), 
            JRequest::getVar('coordenate', false), 
            JRequest::getVar('map', false), 
            JRequest::getVar('description', false), 
            JRequest::getVar('url', false)
        );
        require_once 'tmpl/default_route.php';
        break;
        
    case 'addRoute' :
        require_once 'tmpl/addRoute_form.php';
        break;
    
    case 'deleteRoute' :
        $mixData = RouteComponentHelper::deleteRoute(JRequest::getInt('routeId', false));
        require_once 'tmpl/default_route.php';
        break;
    
    case 'editRoute' :
        $mixData = RouteComponentHelper::getRouteItems(JRequest::getInt('routeId', false));
        require_once 'tmpl/default_routeItems.php';
        break;
    
    case 'addRouteItem' :
        require_once 'tmpl/addRouteItem_form.php';
        break;
    
    case 'saveRouteItem' :
        $mixData = RouteComponentHelper::saveRouteItem(
            JRequest::getVar('routeId', false), 
            JRequest::getVar('way', false), 
            JRequest::getVar('toll_number', false), 
            JRequest::getVar('toll_price', false), 
            JRequest::getVar('kms', false), 
            JRequest::getVar('time', false)
        );
        require_once 'tmpl/default_routeItems.php';
        break;
    case 'deleteRouteItem' :
        $mixData = RouteComponentHelper::deleteRouteItem(JRequest::getVar('ItemId'), JRequest::getVar('routeId'));
        require_once 'tmpl/default_routeItems.php';
        break;
    
    case 'updateSuggested' :
        RouteComponentHelper::updateSuggested(JRequest::getVar('suggestedValues'), JRequest::getVar('suggestedIds'));
        exit;
        break;
    
    default :
        $mixData = RouteComponentHelper::getRoutes();
        require_once 'tmpl/default_route.php';
        break;
}