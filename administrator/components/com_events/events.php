<?php
defined('_JEXEC') or die;
JToolbarHelper::title("Administración Eventos");

require_once 'helper.php';
switch (JRequest::getVar('task')){
    case 'editeventitems':
        //Obtenemos el id del evento correspondiente a el componente seleccionado       
        $arrEvento = EventsComponentHelper::getContentsItem(JRequest::getVar('contentId'));
        require_once 'tmpl/eventItems_Form.php';
        break;
    
    case 'saveeventitems':
        $arrData = EventsComponentHelper::saveEventItems(JRequest::getVar('contentId'),
                JRequest::getVar('type'),
                JRequest::getVar('place'),
                JRequest::getVar('public'),
                JRequest::getVar('manager'),
                JRequest::getVar('contac'),
                JRequest::getVar('price'),
                JRequest::getVar('start_date'),
                JRequest::getVar('finish_date')
                );
        //redireccionamos al default
        $arrData = EventsComponentHelper::getContents();
        require_once 'tmpl/default_events.php';
        break;
    
    case 'updateeventitem':
        EventsComponentHelper::editEventItems(JRequest::getVar('contentId'),
                JRequest::getVar('type'),
                JRequest::getVar('place'),
                JRequest::getVar('public'),
                JRequest::getVar('manager'),
                JRequest::getVar('contac'),
                JRequest::getVar('price'),
                JRequest::getVar('start_date'),
                JRequest::getVar('finish_date')
                );
        //redireccionamos al default
        $arrData = EventsComponentHelper::getContents();
        require_once 'tmpl/default_events.php';
        break;
    
    default :
        $arrData = EventsComponentHelper::getContents();
        require_once 'tmpl/default_events.php';
        break;
}
