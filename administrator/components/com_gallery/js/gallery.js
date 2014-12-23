$(document).ready(function(){
    $('#toolbar-new a:only-child').click(function(){
        document.location.href='index.php?option=com_gallery&task=addgallery';
        return false;
    });  
    $('#toolbar-delete a:only-child').click(function(){
        if($('input:checkbox:checked').length == 0){
            alert('DEBE SELECCIONAR AL MENOS UN ELEMENTO');
        }else{
            if($('input:checkbox:checked').length > 1){
                alert('SOLO SELECCIONE UN ELEMENTO');
            }else{
                var selected = $('input:checkbox:checked').val();
                document.location.href='index.php?option=com_gallery&task=deletegallery&galleryid='+selected;
                return false;
            }
        }
    });
    $('#toolbar-edit a:only-child').click(function(){
        if($('input:checkbox:checked').length == 0){
            alert('DEBE SELECCIONAR AL MENOS UN ELEMENTO');
        }else{
            if($('input:checkbox:checked').length > 1){
                alert('SOLO SELECCIONE UN ELEMENTO');
            }else{
                var selected = $('input:checkbox:checked').val();
                document.location.href='index.php?option=com_gallery&task=editGallery&galleryId='+selected;
                return false;
            }
        }
    });
})