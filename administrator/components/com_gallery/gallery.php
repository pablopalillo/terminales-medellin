<?php
defined('_JEXEC') or die;
JToolbarHelper::title("Administración Galerías Multimedia");
require_once 'helper.php';
switch (JRequest::getVar('task')){
    
    case 'addgallery':
        require_once 'tmpl/addGallery_form.php';
        break;
    
    case 'savegallery':
        $arrData = GalleryComponentHelper::saveGallery(JRequest::getVar('gallery'));
        require_once 'tmpl/default_gallery.php';
        break;
    
    case 'deletegallery':
        $arrData = GalleryComponentHelper::deleteGallery(JRequest::getVar('galleryid'));
        require_once 'tmpl/default_gallery.php';
        break;
    
    case 'addgalleryitem':
        require_once 'tmpl/addGalleryItem_form.php';
        break;
    
    case 'savegalleryitem':
        $arrData = GalleryComponentHelper::saveGelleryItem(
                JRequest::getVar('galleryId'),
                JRequest::getVar('id_type'),
                JRequest::getVar('thumb'),
                JRequest::getVar('file_alias'),
                JRequest::getVar('title'),
                JRequest::getVar('description'),
                JRequest::getVar('author'),
                JRequest::getVar('date')
        );
        require_once 'tmpl/default_galleryItem.php';
        break;
    
    case 'deletegalleryitem':
        $arrData = GalleryComponentHelper::deleteGalleryItem(JRequest::getVar('galleryItemId'), JRequest::getVar('galleryId'));
        require_once 'tmpl/default_galleryItem.php';
        break;
    
    case 'editGallery':
        $arrData = GalleryComponentHelper::getGallery(JRequest::getVar('galleryId'));
        require_once 'tmpl/default_galleryItem.php';
        break;
    
    default :
        $arrData = GalleryComponentHelper::getGallerys();
        require_once 'tmpl/default_gallery.php';
        break;
}