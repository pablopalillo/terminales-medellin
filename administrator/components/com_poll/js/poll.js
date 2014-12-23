$('document').ready(function(){
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
        document.location.href='index.php?option=com_poll&task=addpoll';
        return false;
    });
    
    $('#toolbar-checkin a:only-child').attr('onclick', '');
    $('#toolbar-checkin a:only-child').click(function(){
        if($('input:checkbox:checked').length == 1){
            document.location.href='index.php?option=com_poll&task=viewanswer&pollid='+$('input:checkbox:checked').val();
            return false;
        } else {
            if($('input:checkbox:checked').length == 0){
                alert('DEBE SELECCIONAR AL MENOS UN ELEMENTO');
            } else {
                alert('DEBE SELECCIONAR SOLO UN ELEMENTO');
            }
        }
    });

    $('#toolbar-cancel a:only-child').attr('onclick', '');
    $('#toolbar-cancel a:only-child').click(function(){
        document.location.href='index.php?option=com_poll';
        return false;
    });

    $('#toolbar-save a:only-child').attr('onclick', '');
    $('#toolbar-save a:only-child').click(function(){
        $('#addPoll_form').submit();
        return false;
    });

    $('#toolbar-delete a:only-child').attr('onclick', '');
    $('#toolbar-delete a:only-child').click(function(){
        if($('input:checkbox:checked').length == 1){
            document.location.href='index.php?option=com_poll&task=deletepoll&pollid='+$('input:checkbox:checked').val();
        } else {
            if($('input:checkbox:checked').length == 0){
                alert('DEBE SELECCIONAR AL MENOS UN ELEMENTO');
            } else {
                alert('DEBE SELECCIONAR SOLO UN ELEMENTO');
            }
        }
    });
    
    $('.saveorder').click(function(){
        var count = 0;
        $('.active_container').each(function(){
            if($(this).val() == "1"){
                count++;
            }
        })
        if(count == 1){
            $('.active_container').each(function(){
                if($(this).val() == "1"){
                    document.location.href='index.php?option=com_poll&task=setpollactive&pollid='+$(this).attr('refpoll');
                }
            })
        } else {
            alert('SOLO PUEDE EXISTIR UNA ENCUESTA ACTIVA');
        }
        return false;
    });
});