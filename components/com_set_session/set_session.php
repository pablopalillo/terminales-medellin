<?php
/**
 * @package		Joomla.Site
 * @subpackage	com_content
 * @copyright	Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
jimport('joomla.application.module.helper');
if(JRequest::getVar('options')){
    $objStyle = json_decode(JRequest::getVar('options'));
    $arrStyle = array();
    if(is_object($objStyle)){
        $arrStyle['font_size'] = isset($objStyle->font_size) ? $objStyle->font_size : "12";
        $arrStyle['font_family'] = isset($objStyle->font_family) ? $objStyle->font_family : "Verdana,Arial,Helvetica,sans-serif";
        $arrStyle['line_height'] = isset($objStyle->line_height) ? $objStyle->line_height : " 1.2";
        $arrStyle['background_color'] = isset($objStyle->background_color) ? $objStyle->background_color : "#fff";
        $arrStyle['color'] = isset($objStyle->color) ? $objStyle->color : "#000";
    }
    JFactory::getSession()->set('_style', $arrStyle);
}
echo json_encode(JFactory::getSession()->get('_style'));
exit;