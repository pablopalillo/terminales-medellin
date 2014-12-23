<?php
/**
 * @package	Joomla.Site
 * @subpackage	mod_content
 * @copyright	Copyright (C) All rights reserved.
 * @license	All rights reserved.
 * @author      Juan Lotero <Juan.lotero@fuziona.net>
 */
defined('_JEXEC') or die;
JHtml::_('behavior.keepalive');
require_once dirname(__FILE__).'/helper.php';

//$intMap = JRequest::getVar('id_type');
//$arrayMap = modMapsHelper::getMaps($intMap);
//foreach ($arrayMap as $arr){
//    $intType = $arr->id_type;
//    $intMapN = $arr->map;
//}
//$arrayMapInfo=modMapsHelper::getMapsInfo($intType);
//require JModuleHelper::getLayoutPath('mod_maps', $params->get('layout', 'default'));

// Alex-------------------------------------------------------------------------
$intMapType = JRequest::getVar('id_type');
$intSubMapType = JRequest::getVar('id_sub_type');
//consutamos cuantos mapas están asociados al tipo de mapa seleccionado.
$arrayMap = modMapsHelper::getMaps($intMapType);
$arrayMap2 = modMapsHelper::getMaps2($intMapType);
$noMap = false;
if(sizeof($arrayMap)<= 0){
    $noMap = true; 
    require JModuleHelper::getLayoutPath('mod_maps', $params->get('layout', 'default'));
}else{
    if($arrayMap[0]->type == "Colombia" || $arrayMap[0]->type == "Antioquia"){
        $arrayMapInfo=modMapsHelper::getMapsInfo($intMapType);
    $arrTemp = array();
//    $arrTemp2 = array();
    foreach ($arrayMapInfo as $objMapInfo){
        $objMapInfo->company = modMapsHelper::getCompaniesVsRoutes($objMapInfo->id);
        $objMapInfo->way = modMapsHelper::getCompanyWays($objMapInfo->id);
        $arrTemp[] = $objMapInfo;
    }
    $arrayMapInfo = $arrTemp;
    require JModuleHelper::getLayoutPath('mod_maps', $params->get('layout', 'default'));
    }
    else{
        $arrayTerInfo=modMapsHelper::getTerminalData($intMapType);
        require JModuleHelper::getLayoutPath('mod_maps', $params->get('layout', 'terminales'));
    }
    
    
}


?>
