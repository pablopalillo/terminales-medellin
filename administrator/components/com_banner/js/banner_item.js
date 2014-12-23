$('document').ready(function(){
     $('#toolbar-new a:only-child').attr('onclick', '');      
        $('#toolbar-new a:only-child').click(function(){
            var id = $('#idBan').val();
            document.location.href='index.php?option=com_banner&task=addbanneritem&id_banner='+id;
            return false;
        });
  
        $('#toolbar-save a:only-child').attr('onclick', '');
        $('#toolbar-save a:only-child').click(function(){
            $('#addBanI').submit();
            return false;
        });
        
        $('#toolbar-delete a:only-child').attr('onclick', '');
        $('#toolbar-delete a:only-child').click(function(){
            if($('input:checkbox:checked').length == 1){
                document.location.href='index.php?option=com_banner&task=deletebanneritem&id_bannerI='+$('input:checkbox:checked').val()+'&id_banner='+$('input:hidden').val();
                return false;
            } else {
                if($('input:checkbox:checked').length == 0){
                    alert('DEBE SELECCIONAR AL MENOS UN ELEMENTO');
                    return false;
                } else {
                    alert('DEBE SELECCIONAR SOLO UN ELEMENTO');
                }
                return false;
            }
        });
     $('#toolbar-cancel a:only-child').attr('onclick', '');      
        $('#toolbar-cancel a:only-child').click(function(){
            document.location.href='index.php?option=com_banner';
            return false;
        });
 
});
     
     