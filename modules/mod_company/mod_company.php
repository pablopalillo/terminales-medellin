<?php
/**
 * @package	Joomla.Site
 * @subpackage	mod_company
 * @copyright	Copyright (C) All rights reserved.
 * @license	All rights reserved.
 * @author      diego calle <diego.calle@fuziona.net>
 */

defined('_JEXEC') or die;
$strPrRequest = JRequest::getInt('pr',5);
$strPrRequest = ($strPrRequest == 0) ? 5 : $strPrRequest;
$strOrderRequest = JRequest::getString('order','');
$strLetterRequest = JRequest::getString('letter','');
$strSearchRequest = JRequest::getString('search','');
$strOption = JRequest::getString('option','com_company');
$strView = JRequest::getString('view','company');
$strColor = JRequest::getString('color', 'blue');
$strItemid = JRequest::getInt('Itemid',125);

require_once dirname(__FILE__).'/helper.php';
if (jrequest::getVar('view') != null)
{
    switch (jrequest::getVar('view')) {
        case 'onlineticket':
            $arrData = modCompanyHelper::getContent(
                $strView,
                $strOrderRequest,
                $strLetterRequest,
                $strSearchRequest
            );
            $intPageQty = ceil(count($arrData)/$strPrRequest);
            $intPageQty = ($intPageQty < 1) ? 1 : $intPageQty;
            require JModuleHelper::getLayoutPath('mod_company', $params->get('layout', 'onlineticket'));
            break;
        case 'route':
            $arrData = modCompanyHelper::getContent(
                $strView,
                $strOrderRequest,
                $strLetterRequest,
                $strSearchRequest
            );
            if(count($arrData)>0){
                $intPageQty = ceil(count($arrData)/$strPrRequest);
                $intPageQty = ($intPageQty < 1) ? 1 : $intPageQty;
            } else {
                $intPageQty = 1;
            }
            if('en' == JRequest::getVar('lang', 'es')){
                require JModuleHelper::getLayoutPath('mod_company', $params->get('layout', 'route_en'));
                break;
            }
            require JModuleHelper::getLayoutPath('mod_company', $params->get('layout', 'route'));
            break;
        case 'company':
            $arrData = modCompanyHelper::getContent(
                $strView,
                $strOrderRequest,
                $strLetterRequest,
                $strSearchRequest
            );
            $intPageQty = ceil(count($arrData)/$strPrRequest);
            $intPageQty = ($intPageQty < 1) ? 1 : $intPageQty;
            if('en' == JRequest::getVar('lang', 'es')){
                require JModuleHelper::getLayoutPath('mod_company', $params->get('layout', 'default_en'));
                break;
            }
            if('green' == JRequest::getVar('color', 'blue')){
                require JModuleHelper::getLayoutPath('mod_company', $params->get('layout', 'default_green'));
            }else{
                require JModuleHelper::getLayoutPath('mod_company', $params->get('layout', 'default'));
            }
            break;
    }
}