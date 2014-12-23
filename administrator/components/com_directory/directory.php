<?php
defined('_JEXEC') or die;
require_once 'helper.php';
JToolbarHelper::title("Administración Directorio Institucional");

$test=JRequest::getVar('task');
switch (JRequest::getVar('task')){
    case 'adddirectory':
        require 'tmpl/addDirectory_form.php';
        break;
    
    case 'savenewdirectory':
        $arrData = DirectoryComponentHelper::saveDirectory(JRequest::getVar('name'));
        require 'tmpl/default_Directory.php';
        break;
    
    case 'deletedirectory':
        $arrData = DirectoryComponentHelper::deleteDirectory(JRequest::getVar('id_dir'));
        require 'tmpl/default_Directory.php';
        break;
    
    case 'adddirectoryitem':
        $idDir=JRequest::getVar('idDir');
        require 'tmpl/addDirectoryItem_form.php';
        break;
    
    case 'savenewdirectoryitem':
        $arrData = DirectoryComponentHelper::saveDirectoryItem(JRequest::getVar('idDir'),JRequest::getVar('dName'),JRequest::getVar('area'),JRequest::getVar('phone'),JRequest::getVar('mail'));
        require 'tmpl/default_DirectoryItem.php';
        break;
    
    case 'deletedirectoryitem':
        $arrData = DirectoryComponentHelper::deleteDirectoryItem(JRequest::getVar('idDir'),JRequest::getVar('id_dir'));
        require 'tmpl/default_DirectoryItem.php';
        break;
    
    case 'viewdirectoryitem':
        $idDir=JRequest::getVar('idDir');
        $arrData = DirectoryComponentHelper::getDirectoryItem(JRequest::getVar('idDir'));
        require 'tmpl/default_DirectoryItem.php';
        break;
    
    default :
        $arrData = DirectoryComponentHelper::getDirectory();
        require 'tmpl/default_Directory.php';
        break;
}
?>
