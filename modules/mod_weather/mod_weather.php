<?php
/**
 * @package	Joomla.Site
 * @subpackage	mod_weather
 * @copyright	Copyright (C) All rights reserved.
 * @license	All rights reserved.
 * @author      diego calle <diego.calle@fuziona.net>
 */

defined('_JEXEC') or die;
require_once dirname(__FILE__).DS.'helper.php';
modWeatherHelper::WeatherUpdate();
$arrWeather = modWeatherHelper::getWeather();
require JModuleHelper::getLayoutPath('mod_weather', $params->get('layout', 'default'));

