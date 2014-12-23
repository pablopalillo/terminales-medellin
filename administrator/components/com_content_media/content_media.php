<?php
defined('_JEXEC') or die;
JToolbarHelper::title("Administración de Contenido Multimedia");
require_once 'helper.php';
switch (JRequest::getVar('task')){
    
    case 'addmedia':
        require_once 'tmpl/addMedia_form.php';
        break;
    
    case 'savemedia':
        $mixData = ContentMediaComponentHelper::saveMediaContent(
            JRequest::getVar('contentid'),
            JRequest::getVar('media_type'),
            JRequest::getVar('media_title'),
            JRequest::getVar('media_description'),
            JRequest::getVar('media_author'),
            JRequest::getVar('media_thumb'),
            JRequest::getVar('media_file'),
            JRequest::getVar('media_date')
        );
        require_once 'tmpl/editContent.php';
        break;
    
    case 'deletemedia':
        $mixData = ContentMediaComponentHelper::deleteMediaContent(
            JRequest::getVar('mediaid'), 
            JRequest::getVar('contentid')
        );
        require_once 'tmpl/editContent.php';
        break;
    
    case 'editcontent':
        $mixData = ContentMediaComponentHelper::getMediaContent(JRequest::getVar('contentid'));
        require_once 'tmpl/editContent.php';
        break;
    
    default :
        $mixData = ContentMediaComponentHelper::getContent();
        require_once 'tmpl/default_content.php';
        break;
}
?>
