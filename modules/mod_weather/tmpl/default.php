<?php
/**
 * @package	Joomla.Site
 * @subpackage	mod_weather
 * @copyright	Copyright (C) All rights reserved.
 * @license	All rights reserved.
 * @author      diego calle <diego.calle@fuziona.net>
 */

// no direct access
defined('_JEXEC') or die;
JHtml::_('behavior.keepalive');
$arrDays = array("Domingo","Lunes","Martes","Miercoles","Jueves","Viernes","Sábado");
$arrMonths = array("Enero","Febrero","Marzo","Abril","Mayo","Junio","Julio","Agosto","Septiembre","Octubre","Noviembre","Diciembre");
if('com_english' == JRequest::getVar('option', false)){
    $arrDays = array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
    $arrMonths = array("January","February","March","April","May","June","July","August","September","October","November","December");
}
echo $arrDays[date('w')]." ".date('d')." de ".$arrMonths[date('n')-1]. " de ".date('Y');
echo " <img src='images/weather.png' /> ";
echo $arrWeather[0]->weather;
?>