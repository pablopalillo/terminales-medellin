<?php
require_once '/helpers/ComponentWheatherHelper.php';
ComponentWheatherHelper::WeatherUpdate();
$arrWeather = ComponentWheatherHelper::getWeather();
?>