<?php
/**
 * @package	Joomla.Site
 * @subpackage	mod_content
 * @copyright	Copyright (C) All rights reserved.
 * @license	All rights reserved.
 * @author      Juan Lotero <Juan.lotero@fuziona.net>
 */

defined('_JEXEC') or die;
class modPqrHelper
{
    public static function callWs($arrayPqr){
        $url = 'http://190.0.59.78:8091/documentws/documentos.asmx?WSDL';
        $login ="PQR";
        $pass ="PQR123";
        $objSoapClient = new SoapClient($url, 
            array(
                "trace"      => 1,
                "exceptions" => 0,
                "cache_wsdl" => 0
            )
        );
        $objSoapClient->__setLocation($url);
        return $objSoapClient->Agregar(array(
            'codigoseriedocumental'=>'353',
            'indices'=>$arrayPqr,
            'adjuntos'=>array(),
            'usuario'=>$login,
            'clave'=>$pass,
            'error'=>''
            )
        ); 
    }
    
    public static function callWs_traz($strPQRCode){
        $url = 'http://190.0.59.78:8091/documentws/documentos.asmx?WSDL';
        $login ="PQR";
        $pass ="PQR123";
        $objSoapClient = new SoapClient($url, 
            array(
                "trace"      => 1,
                "exceptions" => 0,
                "cache_wsdl" => 0
            )
        );
        $objSoapClient->__setLocation($url);
        return $objSoapClient->Trazabilidad(array(
            'radicado'=>$strPQRCode,
            )
        ); 
    } 
}

?>
