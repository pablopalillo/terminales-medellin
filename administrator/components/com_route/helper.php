<?php
defined('_JEXEC') or die;
class RouteComponentHelper{
    
    public static function deleteRoute($intRouteId = null){
        $db = JFactory::getDBO();
        if(null != $intRouteId){
            $strSqlStatement = "DELETE FROM `#__route` WHERE `id`=".$intRouteId." LIMIT 1;";
            $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
            $db->query();
        }
        $strSqlStatement = "SELECT * FROM #__route";
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        return $db->loadObjectList();
    }
    
    public static function saveRoute(
            $strRoute = null, 
            $strPrice = null, 
            $strCoordenate = null, 
            $intMap = null, 
            $strDescription = null, 
            $strUrl = null
    ){
        $db = JFactory::getDBO();
        if(null != $strRoute && 
            null != $strPrice &&
            null !=  $strCoordenate &&
            null != $intMap &&
            null != $strDescription &&
            null != $strUrl){
            
            $strSqlStatement = "INSERT INTO #__route ( route, price, featured, coordenate, id_map, description, url ) "
                ."VALUES ( '".$strRoute."', '".$strPrice."', 1, '".$strCoordenate."', "
                    .$intMap.", '".$strDescription."', '".$strUrl."') ";
            $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
            $db->query();
        }
        
        $strSqlStatement = "SELECT * FROM #__route";
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        return $db->loadObjectList();
    }

    public static function getRoutes(){
        $db = JFactory::getDBO();
        $strSqlStatement = "SELECT * FROM #__route";
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        $mixResponse = $db->loadObjectList();
        if($mixResponse != null){
            return $mixResponse;
        } else {
            return false;
        }
    }
    
    public static function getRouteItems($intRouteId){
        $db = JFactory::getDBO();
        $strSqlStatement = "SELECT * FROM #__way WHERE id_route = ".$intRouteId;
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        return $db->loadObjectList();
    }
    
    public static function saveRouteItem(
            $id_route = null, 
            $way = null, 
            $toll_number = null, 
            $toll_price = null, 
            $kms = null, 
            $time = null
    ){
        $db = JFactory::getDBO();
        $strSqlStatement = "INSERT INTO `#__way` "
            ."(`id_route`, `way`, `toll_number`, `toll_price`, `kms`, `time`, `suggested`) VALUES "
            ."(".$id_route.", '".$way."', ".$toll_number.", '".$toll_price."', '".$kms."', '".$time."', 0);";
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        $db->query();
        
        $strSqlStatement = "SELECT * FROM #__way WHERE id_route = ".$id_route;
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        return $db->loadObjectList();
    }
    
    public static function deleteRouteItem($itemId = null, $routeId = null ){
        $db = JFactory::getDBO();
        $strSqlStatement = "DELETE FROM `#__way` WHERE  `id`=".$itemId." LIMIT 1;";
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        $db->query();
        
        $strSqlStatement = "SELECT * FROM #__way WHERE id_route = ".$routeId;
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        return $db->loadObjectList();
    }
    public static function updateSuggested($sugestedValues = null, $sugestedIds = null){
        $arrSugestedValues = json_decode($sugestedValues);
        $arrSugestedIds = json_decode($sugestedIds);
        $db = JFactory::getDBO();
        for($x=0; $x<count($arrSugestedValues); $x++){
            $strSqlStatement = "UPDATE `#__way` SET `suggested`=".$arrSugestedValues[$x]." WHERE `id`=".$arrSugestedIds[$x]." LIMIT 1;";
            $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
            $db->query();
        }
        exit;
    }
    
    public static function assignCompany($intRouteId = null, $intCompanyId = null){
        $db = JFactory::getDBO();
        if(!empty($intCompanyId)){
            $strSqlStatement = "INSERT INTO `a5u6m_company_route` (`id_route`, `id_company`) VALUES (".$intRouteId.", ".$intCompanyId.");";
             $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
             $db->query();
        }
        $strSqlStatement = "SELECT #__company_route.id, #__company.company, "
            ."#__route.route FROM #__company_route INNER JOIN #__company ON"
            ." #__company_route.id_company = #__company.id INNER JOIN #__route ON"
            ." a5u6m_route.id = #__company_route.id_route WHERE #__company_route.id_route = ".$intRouteId;
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        return $db->loadObjectList();
    }
    
    public static function deleteAssignCompany($intRouteId = null, $intRouteCompanyId = null){
        $db = JFactory::getDBO();
        if(!empty($intRouteCompanyId)){
            $strSqlStatement = "DELETE FROM `#__company_route` WHERE `id`=".$intRouteCompanyId." LIMIT 1;";
            $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
            $db->query();
        }
        $strSqlStatement = "SELECT #__company_route.id, #__company.company, "
            ."#__route.route FROM #__company_route INNER JOIN #__company ON"
            ." #__company_route.id_company = #__company.id INNER JOIN #__route ON"
            ." a5u6m_route.id = #__company_route.id_route WHERE #__company_route.id_route = ".$intRouteId;
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        return $db->loadObjectList();
    }
    public static function getCompanies(){
        $db = JFactory::getDBO();
        $strSqlStatement = "SELECT #__company.id, #__company.company FROM #__company";
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        return $db->loadObjectList();
    }
}