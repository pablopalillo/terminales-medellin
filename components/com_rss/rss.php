<?php
/**
 * @package		Joomla.Site
 * @subpackage	com_rss
 * @copyright	Copyright (C) 2005 - 2012 Open Source Matters, Inc. All rights reserved.
 * @license		GNU General Public License version 2 or later; see LICENSE.txt
 */

defined('_JEXEC') or die;
require_once 'helper.php';

header('Content-Type: text/xml');
    $rssfeed = '<?xml version="1.0" encoding="utf-8"?>';
    $rssfeed .= '<rss version="2.0">';
    $rssfeed .= '<channel>';
    $rssfeed .= '<title>Terminales Medellín RSS feed</title>';
    $rssfeed .= '<link>http://www.terminalesmedellin.com</link>';
    $rssfeed .= '<description>Este es el canal actualizador de contenido de las terminaes de medellin</description>';
    $rssfeed .= '<language>es-ES</language>';
    $rssfeed .= '<copyright>Copyright (C) 2013 terminalesmedellin.com</copyright>';

$arrData = ComRssComponent::getContent();
    foreach ($arrData as $objData){
        $rssfeed .= '<item>';
            $rssfeed .= '<title>' . $objData->title . '</title>';
            $rssfeed .= '<description>' . strip_tags($objData->content) . '</description>';
            $rssfeed .= '<creDate>' . date("D, d M Y H:i:s O", strtotime($objData->date)) . '</creDate>';
            $rssfeed .= '<author>' . $objData->author . '</author>';
            $rssfeed .= '<category>' . $objData->category . '</category>';
        $rssfeed .= '</item>';
    }
    $rssfeed .= '</channel>';
    $rssfeed .= '</rss>';
    echo $rssfeed; 

exit;