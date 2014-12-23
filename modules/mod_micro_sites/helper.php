<?php
/**
 * @package	Joomla.Site
 * @subpackage	mod_micro_sites
 * @copyright	Copyright (C) All rights reserved.
 * @license	All rights reserved.
 * @author      yesid montoya <yesid.montoya@fuziona.net>
 */

defined('_JEXEC') or die;

class modMicroSitesHelper
{
    static function getContent(){
        $db = JFactory::getDBO();
        $strSqlStatement = "SELECT * FROM #__menu "
            ."WHERE #__menu.menutype = 'micrositios' "
            ."AND #__menu.language = 'es-ES';";
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        return $db->loadObjectList();
    }
}