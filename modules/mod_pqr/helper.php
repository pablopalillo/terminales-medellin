<?php
/**
 * @package	Joomla.Site
 * @subpackage	mod_content
 * @copyright	Copyright (C) All rights reserved.
 * @license	All rights reserved.
 * @author      Juan Lotero <Juan.lotero@fuziona.net>
 */

defined('_JEXEC') or die;
       ini_set('allow_url_include', '1');
class modPqrHelper
{
    public static function callWs($arrayPqr){

        $url = 'http://190.0.59.78:8091/documentws/documentos.asmx?wsdl';
        $login ="PQR";
        $pass ="PQR123";

        echo htmlentities(file_get_contents($url));
        die;

        $arrContextOptions=array(
            "ssl"=>array(
                "verify_peer"=>false,
                "verify_peer_name"=>false,
            ),
            'http'=>array(
             'user_agent' => 'PHPSoapClient'
            )
        );  

        $context = stream_context_create($arrContextOptions);

        $objSoapClient = new SoapClient($url, 
            array(
                'soap_version'=>SOAP_1_1,
                'exceptions'=>true,
                'trace'=>1,
                'cache_wsdl'=>WSDL_CACHE_NONE,
                'stream_context' => $context         
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
        $url = 'https://190.0.59.78:8091/documentws/documentos.asmx?wsdl';
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
