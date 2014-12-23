<?php
/**
 * @package	Joomla.Site
 * @subpackage	mod_Poll
 * @copyright	Copyright (C) All rights reserved.
 * @license	All rights reserved.
 * @author      yesid montoya <yesid.montoya@fuziona.net>
 */

defined('_JEXEC') or die;
require_once dirname(__FILE__).DS.'helper.php';
$intIdPoll = JRequest::getInt('poll_id');
$strAnswer = JRequest::getString('poll_answer', false);
if(modPollHelper::setContent($intIdPoll, $strAnswer )){
    echo "<script>alert('Gracias por participar en nuestra encuesta');</script>";
}
$arrData = modPollHelper::getContent();
if(array() != $arrData){
    $arrDataResult = modPollHelper::getResult( $arrData[0]->id );
    $arrResponse = array();
    if($arrData[0]->type != 3){
    foreach(json_decode($arrData[0]->option) AS $strData){
        $arrResponse[$strData] = 0;
        foreach($arrDataResult AS $objDataResult){
            $arrAnswer = json_decode($objDataResult->answer);
            if(!empty($arrAnswer)){
                if(is_array($arrAnswer)){
                    foreach($arrAnswer as $mixAnswer){
                        if($mixAnswer == $strData){
                            $arrResponse[$strData] += 1;
                        }
                    }
                }
            }
        }
    }
    }
require JModuleHelper::getLayoutPath('mod_poll', $params->get('layout', 'default')); 
}
