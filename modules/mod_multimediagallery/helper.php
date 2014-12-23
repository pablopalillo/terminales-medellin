<?php
/**
 * @package	Joomla.Site
 * @subpackage	mod_multimediagallery
 * @copyright	Copyright (C) All rights reserved.
 * @license	All rights reserved.
 * @author      yesid montoya <yesid.montoya@fuziona.net>
 */

defined('_JEXEC') or die;

class modMultimediaGalleryHelper
{
    static public function getGalleryCategory($intGalleryId){
        $db = JFactory::getDBO();
        $strSqlStatement = "SELECT gallery FROM a5u6m_gallery WHERE id = ".$intGalleryId;
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        return $db->loadResult();
    }
    static public function getContent($intId = null, $strSearchByName = null, $strSearchByFtype = null, $strSearchByDate = null, $intGalleryId = null, $intProjectId = null){
        if(null == $intId){
            $db = JFactory::getDBO();
            $arrConditions = array();
            $strSqlStatement = "SELECT * FROM #__media_gallery";
            if($strSearchByName != null){
                $arrConditions[] = " (name LIKE '%".$strSearchByName."%' OR description  LIKE '%" .$strSearchByName. "%') ";
            }
            if($strSearchByFtype !=null && 0 != $strSearchByFtype){
                if($strSearchByFtype == 3){
                    $arrConditions[] = " ( id_type = '4' OR id_type = '3' )"; 
                }else{
                    $arrConditions[] = " id_type = '".$strSearchByFtype."'"; 
                }
            }
            if($strSearchByDate != null){
                 $arrConditions[] = " date = '".$strSearchByDate."'";
            }
            if($intGalleryId != null){
                if($intGalleryId == 4 && $intProjectId == null){
                    return array();
                }
                $arrConditions[] = " id_gallery = ".$intGalleryId;
            }
            if($intProjectId != null){
                $arrConditions[] = " id_proyecto = ".$intProjectId;
            }
            if(array() != $arrConditions){
                $strSqlStatement .= ' WHERE'.$arrConditions[0];
                if(count($arrConditions) > 1){
                    for ($x=1; $x<count($arrConditions); $x++){
                        $strSqlStatement .= ' AND'.$arrConditions[$x]; 
                    }
                } 
            }
            $strSqlStatement .= " ORDER BY date ASC";
            $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
            return $db->loadObjectList();
        } 
    }
}