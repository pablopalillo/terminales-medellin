$('document').ready(function(){
    $('#toolbar-edit a:only-child').click(function(){
        if($('input:checkbox:checked').length == 0){
            alert('DEBE SELECCIONAR AL MENOS UN ELEMENTO');
            return false;
        }else{
            if($('input:checkbox:checked').length > 1){
                alert('SOLO SELECCIONE UN ELEMENTO');
                return false;
            }else{
                var selected = $('input:checkbox:checked').val();
                document.location.href='index.php?option=com_contest&task=editContestItems&contestId='+selected;
                return false;
            }
        }
        return false;
    })
    $('#toolbar-apply a:only-child').click(function(){
        var question = $('.question_contest').val();
        if("" != question){
            $('#addContestItem_form').submit();
            return false; 
        }
        alert('Revise la pregunta');
        return false;
        
    })
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
                document.location.href='index.php?option=com_contest&task=deleteContestItems&contestItemId='
                    +selected+"&contestId="+$('.contestId').val();
                return false;
            }
        }
        return false;
    })
    $('#toolbar-cancel a:only-child').click(function(){
        document.location.href='index.php?option=com_contest';
        return false;
    })
    
    $('#toolbar-checkin a:only-child').click(function(){
        if($('input:checkbox:checked').length == 0){
            alert('DEBE SELECCIONAR AL MENOS UN ELEMENTO');
            return false;
        }else{
            if($('input:checkbox:checked').length > 1){
                alert('SOLO SELECCIONE UN ELEMENTO');
                return false;
            }else{
                var selected = $('input:checkbox:checked').val();
                document.location.href='index.php?option=com_contest&task=getContestAnswer&contestId='
                    +selected;
                return false;
            }
        }
        return false
    })
})