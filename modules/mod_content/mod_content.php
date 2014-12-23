<?php
/**
 * @package	Joomla.Site
 * @subpackage	mod_content
 * @copyright	Copyright (C) All rights reserved.
 * @license	All rights reserved.
 * @author      Juan Lotero <Juan.lotero@fuziona.net>
 */

defined('_JEXEC') or die;
JHtml::_('behavior.keepalive');
require_once dirname(__FILE__).'/helper.php';
$intId = JRequest::getInt('id');
$strJsonAnswer = JRequest::getVar('answer', '');
$arrData = modContentHelper::getContent($intId);
if($arrData == array()){
    $arrData = modContentHelper::getContentByCategory(JRequest::getInt('category', 0));
}
$arrDataMedia = modContentHelper::getMedia($arrData[0]->id);
$strURI = JFactory::getURI();
if(array() != $arrData){
    $intCatId = $arrData[0]->catid;
    $intId = $arrData[0]->id;
    $count = 0;
    switch($intCatId){
        case 9:
            $arrDataContest = modContentHelper::getContest($intId);
            require JModuleHelper::getLayoutPath('mod_content', $params->get('layout', '_legend'));
            require JModuleHelper::getLayoutPath('mod_content', $params->get('layout', 'default'));
            if(!modContentHelper::validateGuestUser()){
                if(modContentHelper::validateUserContest($intId)){
                    if('' != $strJsonAnswer){
                        if(modContentHelper::submitContestData($strJsonAnswer, $intId)){
                            JFactory::getApplication()->enqueueMessage('GRACIAS POR PARTICIPAR');
                        } else {
                            
                            require JModuleHelper::getLayoutPath('mod_content', $params->get('layout', 'contest'));
                            JError::raiseWarning( 100, 'HA OCURRIDO UN ERROR INTENTANDO GUARDAR SU RESPUESTA' );
                        }
                    } else {
                        require JModuleHelper::getLayoutPath('mod_content', $params->get('layout', 'contest'));
                    }
                } else {
                    JError::raiseWarning( 100, 'USTED YA PARTICIPÓ EN ESTE CONCURSO' );
                }
            }else{
                JError::raiseWarning( 100, 'PARA PODER PARTICIPAR EN LOS CONCURSOS DEBE ESTAR REGISTRADO' );
            }      
        break;
        case 10:
            $arrDataEvent = modContentHelper::getEvent($intId);
            $arrDataEventT= modContentHelper::getEventT();
            require JModuleHelper::getLayoutPath('mod_content', $params->get('layout', '_legend'));
            require JModuleHelper::getLayoutPath('mod_content', $params->get('layout', '_eventSlider'));
            require JModuleHelper::getLayoutPath('mod_content', $params->get('layout', 'default'));
            require JModuleHelper::getLayoutPath('mod_content', $params->get('layout', 'event'));
            break;
        default: 
            require JModuleHelper::getLayoutPath('mod_content', $params->get('layout', '_legend'));
            require JModuleHelper::getLayoutPath('mod_content', $params->get('layout', 'default'));
    }
    require JModuleHelper::getLayoutPath('mod_content', $params->get('layout', '_share'));
    require JModuleHelper::getLayoutPath('mod_content', $params->get('layout', 'older'));
} else {
    JError::raiseWarning( 100, 'NO EXISTEN PUBLICACIONES' );
}




