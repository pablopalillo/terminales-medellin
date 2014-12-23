<?php
defined('_JEXEC') or die;
JToolbarHelper::title("Administración Aliados Estratégicos");
require_once 'helper.php';

$arrayOrderData = json_decode(JRequest::getVar('arrayData'));
switch (JRequest::getVar('task')){
    case 'addallies':
        require_once 'tmpl/addAllies_form.php';
        break;
    
    case 'saveallies':
        AlliesComponentHelper::saveAllies(JRequest::getVar('name'), JRequest::getVar('position'));
        $arrAllies = AlliesComponentHelper::getAllies();
        require_once 'tmpl/default_allies.php';
        break;
    
    case 'deleteallies':
        $arrAllies = AlliesComponentHelper::getAllies();
        require_once 'tmpl/default_allies.php';
        break;
    
    case 'orderallies':
        echo AlliesComponentHelper::updateOrderAllies($arrayOrderData);
        exit;
    
    case 'addalliesitem':
        $arrAllies = AlliesComponentHelper::getAllies();
        require_once 'tmpl/addAlliesItem_form.php';
        break;
    
    case 'listalliesitem':
        $arrAllies = AlliesComponentHelper::getAllies();
        $arrAlliesItems = AlliesComponentHelper::getAlliesItems2(JRequest::getVar('allyId'));
        require_once 'tmpl/default_alliesItem.php';
        break;
    
    case 'backalliesitem':
        $arrAllies = AlliesComponentHelper::getAllies();
        $arrAlliesItems = AlliesComponentHelper::getAlliesItems2(JRequest::getVar('idAlly'));
        require_once 'tmpl/default_alliesItem.php';
        break;
    
    case 'savealliesitem':
        $arrAlliesItems = AlliesComponentHelper::saveItemsAllies(JRequest::getVar('aliado'),JRequest::getVar('itemName'),JRequest::getVar('imageName'),JRequest::getVar('url'));
        require_once 'tmpl/default_alliesItem.php';
        break;
    
    case 'deletealliesitem':
        $variable = JRequest::getVar('tipo');
        //miramos a ver que tipo de borrado es
        if($variable == "type"){
            AlliesComponentHelper::deleteAlly(JRequest::getVar('idItem'));
            $arrAllies = AlliesComponentHelper::getAllies();
            require_once 'tmpl/default_allies.php';
        }else{
            AlliesComponentHelper::deleteAllyItem(JRequest::getVar('idItem'));
            $arrAlliesItems = AlliesComponentHelper::getAlliesItems2(JRequest::getVar('idAlly'));
            require_once 'tmpl/default_alliesItem.php';
        }
        break;
    
    default :
        $arrAllies = AlliesComponentHelper::getAllies();
        require_once 'tmpl/default_allies.php';
        break;
}
?>
