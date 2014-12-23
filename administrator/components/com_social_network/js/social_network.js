$('document').ready(function(){
    $('#toolbar-new a:only-child').attr('onclick', '');
    $('#toolbar-new a:only-child').click(function(){
        document.location.href='index.php?option=com_social_network&task=addsocialnetwork';
    });
    $('#toolbar-cancel a:only-child').attr('onclick', '');
    $('#toolbar-cancel a:only-child').click(function(){
        document.location.href='index.php?option=com_social_network';
    });
    $('#toolbar-save a:only-child').attr('onclick', '');
    $('#toolbar-save a:only-child').click(function(){   
        $('#addSocialNetwork_form').submit();
        return false;
    });
    
    $('#toolbar-delete a:only-child').attr('onclick', '');
    $('#toolbar-delete a:only-child').click(function(){   
        if($('input:checkbox:checked').length == 1){
            
        } else {
            if($('input:checkbox:checked').length == 0){
                alert('DEBE SELECCIONAR AL MENOS UN ELEMENTO');
            } else {
                alert('DEBE SELECCIONAR SOLO UN ELEMENTO');
            }
        }
    });
});