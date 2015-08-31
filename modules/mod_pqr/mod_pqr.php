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

if(JRequest::getString('view', '') != 'query'){

    require JModuleHelper::getLayoutPath('mod_pqr', $params->get('layout', 'default'));

    if(isset($_POST['submit'])) {
        if (
                isset($_POST['pqrNameLastname']) 
                && isset($_POST['pqrId']) 
                && isset($_POST['pqrAdress']) 
                && isset($_POST['pqrCity']) 
                && isset($_POST['pqrPhone']) 
                && isset($_POST['pqrCellphone']) 
                && isset($_POST['pqrMail']) 
                && isset($_POST['tPqr']) 
                && isset($_POST['sPqr']) 
                && isset($_POST['pqrComment']) 
                && isset($_POST['pqrService']) 
                && !empty($_POST['pqrNameLastname']) 
                && !empty($_POST['pqrId']) 
                && !empty($_POST['pqrComment'])
            )
        {


            $strPlaca = (!empty($_POST['pqrPlaca'])) ? JRequest::getString('pqrPlaca') : "-";
            $arrayPqr = array(
                '',
                date('Y/m/d'),
                JRequest::getString('pqrId'),
                JRequest::getString('pqrNameLastname'),
                JRequest::getString('pqrAdress')." - ".JRequest::getString('pqrCity'),
                JRequest::getString('pqrPhone')." - ".JRequest::getString('pqrCellphone'),
                JRequest::getString('pqrMail'),
                JRequest::getString('tPqr'),
                JRequest::getString('sPqr'),
                $strPlaca,
                JRequest::getString('pqrComment'),
                JRequest::getString('pqrService')
            );

            $objSubmitPqr = modPqrHelper::callWs($arrayPqr);

            if(empty($objSubmitPqr->error))
            {
               $inicioTramite = modPqrHelper::iniciarTramite($objSubmitPqr->AgregarResult ,JRequest::getString('pqrId'));

               if(empty($inicioTramite->error))
                {
                     echo "<script>alert('PQR Enviada Con Exito su código es: ".$objSubmitPqr->AgregarResult."')</script>";
                }
                else
                {
                    echo "<script>alert('Problemas con el inicio del tramite ERROR: ".$inicioTramite->error."')</script>";
                }

            }else
            {

                echo "<script>alert('Su PQR no pudo ser Procesada, Por favor intente de nuevo. Error '".$objSubmitPqr->error."')</script>";
            }

        }
        else
        {
            echo "<script>alert('Todos los campos deben ser diligenciados')</script>";
        }
    }


}
else
{
    $strPQRCode = JRequest::getString('code', '');

    if($strPQRCode !='')
    {

        $objData = modPqrHelper::callWs_traz($strPQRCode);
        require JModuleHelper::getLayoutPath('mod_pqr', $params->get('layout', 'default_traz'));

    }else
    {

        require JModuleHelper::getLayoutPath('mod_pqr', $params->get('layout', 'default_query'));
    }

}

?>
