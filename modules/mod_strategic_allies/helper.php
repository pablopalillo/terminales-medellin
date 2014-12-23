<?php
/**
 * @package	Joomla.Site
 * @subpackage	mod_modStrategicAllies
 * @copyright	Copyright (C) All rights reserved.
 * @license	All rights reserved.
 * @author      yesid montoya <yesid.montoya@fuziona.net>
 */

defined('_JEXEC') or die;

class modStrategicAlliesHelper
{
   static function getContent ($intAlly) {
         $db = JFactory::getDBO();
         $strSqlStatement = "SELECT #__allies.Id, #__allies.name, #__allies.image, "
            ."#__allies.url, #__allies.`order`, #__allies.ally_id, #__allies_type.ally_position "
            ."FROM #__allies INNER JOIN #__allies_type ON #__allies.ally_id = #__allies_type.id "
            ."WHERE ally_id = ".$intAlly." "
            ."ORDER BY #__allies.order ";
         $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
         return $db->loadObjectList();
   }
}