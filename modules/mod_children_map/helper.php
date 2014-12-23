<?php
/**
 * @package	Joomla.Site
 * @subpackage	mod_content
 * @copyright	Copyright (C) All rights reserved.
 * @license	All rights reserved.
 * @author      Juan Lotero <Juan.lotero@fuziona.net>
 */

defined('_JEXEC') or die;
class modChildMapsHelper
{
    static function getPlaces(){
        $db = JFactory::getDBO();
        $strSqlStatement = "SELECT * FROM #__child_map_place";
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        $arrData = $db->loadObjectList();
        return $arrData;
    }
}
?>
