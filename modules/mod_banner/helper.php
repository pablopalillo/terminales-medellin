<?php
/**
 * @package	Joomla.Site
 * @subpackage	mod_banner
 * @copyright	Copyright (C) All rights reserved.
 * @license	All rights reserved.
 * @author      diego calle <diego.calle@fuziona.net>
 */

defined('_JEXEC') or die;

class modBannerHelper
{
    static function getContent($intId){
            $db = JFactory::getDBO();
            $strSqlStatement = "SELECT "
                    ."#__media_banner.id, "
                    ."#__media_banner.file_alias, "
                    ."#__media_banner.href, "
                    ."#__banner.width, "
                    ."#__banner.height "
                ."FROM #__media_banner "
                ."INNER JOIN #__banner ON #__banner.id = #__media_banner.id_banner "
                ."WHERE id_banner = ".$intId;
            $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
            return $db->loadObjectList();
    }
}