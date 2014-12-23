<?php
/**
 * Description of ComponentWheatherHelper
 *
 * @author CONSULTOR
 */
class ComponentWheatherHelper {
    
    public static function WeatherUpdate(){
        date_default_timezone_set ('America/Bogota');
        $db = JFactory::getDBO();
        $strSqlStatement = "SELECT * FROM #__weather WHERE date "
            ."BETWEEN '".date("Y-m-d H:i:s",time(date("Y-m-d g:i a"))-60*60)."' AND '"
            .date("Y-m-d H:i:s",time(date("Y-m-d g:i a")))."'";
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        if(array() == $db->loadObjectList()){
            $json_string = file_get_contents("http://api.wunderground.com/api/214037abac5b97ea/geolookup/conditions/q/zmw:00000.1.80110.json");
            $parsed_json = json_decode($json_string);
            $strWeather = $parsed_json->{'location'}->{'city'}.' '.$parsed_json->{'current_observation'}->{'temp_c'}.'°C';
            $db = JFactory::getDBO();
            $strSqlStatement = "UPDATE a5u6m_weather SET weather='".$strWeather."', date='".date("Y-m-d H:i:s")."' WHERE  id=1";
            $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
            $db->query();
        }
    }
    
    public static function getWeather(){
        $db = JFactory::getDBO();
        $strSqlStatement = "SELECT * FROM #__weather ";
        $db->setQuery(str_replace('#__', $db->getPrefix(), $strSqlStatement));
        return $db->loadObjectList();
    }
}

?>
