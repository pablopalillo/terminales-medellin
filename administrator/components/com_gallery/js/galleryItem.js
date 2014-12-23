$(document).ready(function(){
    $('#toolbar-new a:only-child').click(function(){
        document.location.href='index.php?option=com_gallery&task=addgalleryitem&galleryId='+$('.galleryId').val();
        return false;
    });  
    $('#toolbar-delete a:only-child').click(function(){
        if($('input:checkbox:checked').length == 0){
            alert('DEBE SELECCIONAR AL MENOS UN ELEMENTO');
            return false;
        }else{
            if($('input:checkbox:checked').length > 1){
                alert('SOLO SELECCIONE UN ELEMENTO');
                return false;
            }else{
                var selected = $('input:checkbox:checked').val();
                document.location.href='index.php?option=com_gallery&task=deletegalleryitem&galleryItemId='+selected+'&galleryId='+$('.galleryId').val();
                return false;
            }
        }
    });
    $('#toolbar-cancel a:only-child').click(function(){
        document.location.href='index.php?option=com_gallery';
        return false;
    })
})