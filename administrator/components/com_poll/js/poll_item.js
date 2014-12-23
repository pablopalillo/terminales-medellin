$('document').ready(function(){
    $('#toolbar-edit a:only-child').attr('onclick', '');
    $('#toolbar-edit a:only-child').click(function(){
        if($('input:checkbox:checked').length == 1){
            if($('input:checkbox:checked').attr('refType') == "3"){
                alert('ESTE TIPO DE ENCUESTA NO MANEJA OPCIONES DE RESPUESTA');
                return false;
            } else {
                document.location.href='index.php?option=com_poll&task=editpoll&pollid='
                    +$('input:checkbox:checked').val();
                return false;
            }
        } else {
            if($('input:checkbox:checked').length == 0){
                alert('DEBE SELECCIONAR AL MENOS UN ELEMENTO');
            } else {
                alert('DEBE SELECCIONAR SOLO UN ELEMENTO');
            }
        }
    });
    
    $('#toolbar-new a:only-child').attr('onclick', '');
    $('#toolbar-new a:only-child').click(function(){
        document.location.href='index.php?option=com_poll&task=addpollitem&pollid='+$('#pollid').attr('refpoll');
        return false;
    });

    $('#toolbar-cancel a:only-child').attr('onclick', '');
    $('#toolbar-cancel a:only-child').click(function(){
        document.location.href='index.php?option=com_poll&task=editpoll&pollid='+$('#pollid').val();
        return false;
    });

    $('#toolbar-save a:only-child').attr('onclick', '');
    $('#toolbar-save a:only-child').click(function(){
        $('#addPollItem_form').submit();
        return false;
    });

    $('#toolbar-delete a:only-child').attr('onclick', '');
    $('#toolbar-delete a:only-child').click(function(){
        if($('input:checkbox:checked').length == 1){
            document.location.href='index.php?option=com_poll&task=deletepollitem&pollitemid='+$('input:checkbox:checked').val()+'&pollid='+$('input:checkbox:checked').attr('refpoll');
        } else {
            if($('input:checkbox:checked').length == 0){
                alert('DEBE SELECCIONAR AL MENOS UN ELEMENTO');
            } else {
                alert('DEBE SELECCIONAR SOLO UN ELEMENTO');
            }
        }
    });
    
    $('#toolbar-back a:only-child').attr('onclick', '');
    $('#toolbar-back a:only-child').click(function(){
        document.location.href='index.php?option=com_poll';
        return false;
    });
});