<?php
/**
 * @package	Joomla.Site
 * @subpackage	mod_content
 * @copyright	Copyright (C) All rights reserved.
 * @license	All rights reserved.
 * @author      Juan Lotero <Juan.lotero@fuziona.net>
 */

defined('_JEXEC') or die;
class modRenderMenuHelper
{
    static function getContent($strMenu){
        $db = JFactory::getDBO();
        $strSqlStatement = "SELECT * FROM #__menu WHERE menutype = '".$strMenu."' AND level = 1 AND published = 1";
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        $arrTemp = array();
        foreach ($db->loadObjectList() as $objData){
            $strSqlStatement = "SELECT image FROM #__menu_image WHERE id_menu_item = ".$objData->id;
            $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
            $objData->image = $db->loadResult();
            $objData->childs = array();
            if($strMenu != 'home-services-module-men'){
                $strSqlStatement = "SELECT * FROM #__menu WHERE parent_id = ".$objData->id." AND published = 1";
                $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
                $objData->childs = $db->loadObjectList();
            }
            $arrTemp[] = $objData;
        }
//        echo '<pre>'; print_r($arrTemp); exit;
        return $arrTemp;
    } 
}

?>
