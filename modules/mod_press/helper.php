<?php
/**
 * @package	Joomla.Site
 * @subpackage	mod_press
 * @copyright	Copyright (C) All rights reserved.
 * @license	All rights reserved.
 * @author      diego calle <diego.calle@fuziona.net>
 */

defined('_JEXEC') or die;

class modPollHelper
{
    static function getContent () {
        $db = JFactory::getDBO();
        $strSqlStatement = "SELECT * FROM a5u6m_menu WHERE a5u6m_menu.menutype = 'sala-de-prensa'";
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        return $db->loadObjectList();
    }
}
