$(document).ready(function(){
    $('#toolbar-save a:only-child').click(function(){
        var nameGallery = $('#addGallery_form .name').val();
        if("" != nameGallery.length){
            $('#addGallery_form').submit();
            return false;
        }else {
            alert('INGRESE EL NOMBRE DE LA GALERÍA');
            return false;
        }
    });  
    $('#toolbar-cancel a:only-child').click(function(){
        document.location.href='index.php?option=com_gallery';
        return false;
    });
})