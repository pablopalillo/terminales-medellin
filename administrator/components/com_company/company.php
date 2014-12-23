<?php
defined('_JEXEC') or die;
JToolbarHelper::title("Administración Empresas Transportadoras");
require_once 'helper.php';

switch (JRequest::getVar('task')){
    case 'addcompany':
        require_once 'tmpl/addCompany_form.php';
        break;
    
    case 'savecompany':
        $arrData = CompanyComponentHelper::saveCompany(JRequest::getVar('company'),JRequest::getVar('term'),JRequest::getVar('off'),JRequest::getVar('phone'),JRequest::getVar('his'),JRequest::getVar('url'),JRequest::getVar('com'),JRequest::getVar('file'));
        require_once 'tmpl/default_company.php';
        break;
    
    case 'deletecompany':
        $arrData = CompanyComponentHelper::deleteCompany(JRequest::getVar('compId'));
        require_once 'tmpl/default_company.php';
        break;
    
    default :
        $arrData = CompanyComponentHelper::getCompany();
        require_once 'tmpl/default_company.php';
        break;
}