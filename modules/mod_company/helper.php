<?php
/**
 * @package	Joomla.Site
 * @subpackage	mod_company
 * @copyright	Copyright (C) All rights reserved.
 * @license	All rights reserved.
 * @author      diego calle <diego.calle@fuziona.net>
 */

defined('_JEXEC') or die;

class modCompanyHelper
{
    static function getContent($strView, $strOrderRequest, $strLetterRequest, $strSearchRequest){
            switch ($strView) {
             case 'onlineticket':
                $db = JFactory::getDBO();
                $strSqlStatement = "SELECT * FROM #__company "; 
                $strSqlStatementCondition = (!empty($strLetterRequest))?"WHERE company LIKE '".$strLetterRequest."%' ":"";
                $strSqlStatementCondition = (!empty($strSearchRequest))?"WHERE company LIKE '%".$strSearchRequest."%' ":$strSqlStatementCondition;
                $strSqlStatementCondition = (!empty($strSqlStatementCondition))? $strSqlStatementCondition."AND ecommerce <> '' ":" WHERE ecommerce <> '' ";
                $strSqlStatement .= $strSqlStatementCondition;
                $strSqlStatement .= ($strOrderRequest == "1")? "ORDER BY company ASC " : $strSqlStatementOrder = ($strOrderRequest == "2")? "ORDER BY office ASC " : $strSqlStatementOrder = ($strOrderRequest == "3")? "ORDER BY terminal ASC " : "ORDER BY company ASC ";
                $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
                return $db->loadObjectList();
                break;
             case 'route':
                $db = JFactory::getDBO();
                $strSqlStatement = "SELECT 
                        #__route.id,
                        #__route.route,
                        #__route.price,
                        #__route.featured,
                        #__way.way,
                        #__way.toll_number,
                        #__way.toll_price,
                        #__way.kms,
                        #__way.time,
                        #__way.suggested
                    FROM #__route
                    INNER JOIN #__way ON #__route.id = #__way.id_route ";
                $strSqlStatementCondition = (!empty($strLetterRequest)) ? "WHERE #__route.route LIKE '".$strLetterRequest."%' ":"";
                $strSqlStatementCondition = (!empty($strSearchRequest)) ? "WHERE #__route.route LIKE '%".$strSearchRequest."%' ":$strSqlStatementCondition;
                $strSqlStatement .= (!empty($strSqlStatementCondition)) ? $strSqlStatementCondition."AND #__way.suggested = 1 ":"WHERE #__way.suggested = 1 ";
                $strSqlStatement .= ($strOrderRequest == 1) ? "ORDER BY #__route.route ASC" : ($strOrderRequest == 2) ? "ORDER BY #__way.time ASC":($strOrderRequest == 3) ? "ORDER BY #__way.kms ASC":"ORDER BY #__route.route ASC" ;
                $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
                $arrRoute = $db->loadObjectList();
                
                for($x=0; $x<count($arrRoute); $x++){
                    $strSqlStatement = "SELECT * 
                        FROM #__company 
                        INNER JOIN #__company_route ON #__company.id = #__company_route.id_company
                        WHERE #__company_route.id_route = ".$arrRoute[$x]->id." ORDER BY company";             
                    $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
                    $arrRoute[$x]->company = $db->loadObjectList();
                    
                    $strSqlStatement = "SELECT * 
                        FROM #__way 
                        WHERE id_route = ".$arrRoute[$x]->id." AND suggested = 1";             
                    $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
                    $arrRoute[$x]->ways = $db->loadObjectList();
                    
                     $strSqlStatement = "SELECT * 
                        FROM #__way 
                        WHERE id_route = ".$arrRoute[$x]->id." AND suggested <> 1";             
                    $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
                    $arrRoute[$x]->waysSuggestNt = $db->loadObjectList();
                }
                return $arrRoute;
                break;
             case 'company':
                $db = JFactory::getDBO();
                $strSqlStatement = "SELECT * FROM #__company ";
                $strLetterFilter = (!empty($strLetterRequest))? "WHERE company LIKE '".$strLetterRequest."%' " : "";
                $strSqlStatement .= (!empty($strSearchRequest))? "WHERE company LIKE '%".$strSearchRequest."%' " : $strLetterFilter;
                
                $strSqlStatement .= ($strOrderRequest == "1")? "ORDER BY company ASC " : $strSqlStatementOrder = ($strOrderRequest == "2")? "ORDER BY office ASC " : $strSqlStatementOrder = ($strOrderRequest == "3")? "ORDER BY terminal ASC " : "ORDER BY company ASC ";
                $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
                return $db->loadObjectList();
                break;
         }
    }
}