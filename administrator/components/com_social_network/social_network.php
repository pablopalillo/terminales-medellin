<?php
defined('_JEXEC') or die;
JToolbarHelper::title("Administración Redes Sociales");
require_once 'helper.php';
switch (JRequest::getVar('task')){
    
    case 'addsocialnetwork':
        require_once 'tmpl/addSocialNetwork_form.php';
        break;
    
    case 'savesocialnetwork':
        $mixData = SocialNetworkComponentHelper::saveSocialNetwork(
            JRequest::getVar('network', false),
            JRequest::getVar('user', false),
            JRequest::getVar('url', false)
        );
        if($mixData == false){
            echo "ERROR DE APLICACIÓN";
        } else {
            require_once 'tmpl/default_socialNetwork.php';
            break;  
        }
    
    case 'deletesocialnetwork':
        $mixData = SocialNetworkComponentHelper::deleteSocialNetwork(
                JRequest::getVar('galleryid')
        );
        require_once 'tmpl/default_socialNetwork.php';
        break;
    
    default :
        $mixData = SocialNetworkComponentHelper::getSocialNetwork();
        require_once 'tmpl/default_socialNetwork.php';
        break;
}
