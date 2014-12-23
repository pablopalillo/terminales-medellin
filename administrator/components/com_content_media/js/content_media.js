$('document').ready(function(){
    $('#toolbar-cancel a:only-child').click(function(){
        document.location.href='index.php?option=com_content_media';
        return false;
    })
    $('#toolbar-edit a:only-child').click(function(){
        if($('input:checkbox:checked').length == 0){
            alert('DEBE SELECCIONAR AL MENOS UN ELEMENTO');
            return false;
        } 
        if($('input:checkbox:checked').length > 1){
            alert('DEBE SELECCIONAR SOLO UN ELEMENTO');
            return false;
        }
        document.location.href='index.php?option=com_content_media&task=editcontent&contentid='
            +$('input:checkbox:checked').val();
        return false;
    });
    $('#toolbar-delete a:only-child').click(function(){
        if($('input:checkbox:checked').length == 0){
            alert('DEBE SELECCIONAR AL MENOS UN ELEMENTO');
            return false;
        } 
        if($('input:checkbox:checked').length > 1){
            alert('DEBE SELECCIONAR SOLO UN ELEMENTO');
            return false;
        }
        document.location.href='index.php?option=com_content_media&task=deletemedia&mediaid='
            +$('input:checkbox:checked').val()+'&contentid='+$('.contentid').val();
        return false;
    });
    $('#toolbar-save a:only-child').click(function(){
        $('#addMedia_form').submit();
        return false;
    })
    $('#toolbar-new a:only-child').click(function(){
        document.location.href='index.php?option=com_content_media&task=addmedia&contentid='+$('.contentid').val();
        return false;
    });
    $('.media_date').DatePicker({
        format:'Y/m/d',
        date: new Date(),
        current: new Date(),
        starts: 1,
        position: 'r',
        onBeforeShow: function(){
                $('.media_date').DatePickerSetDate(new Date(), true);
        },
        onChange: function(formated, dates){
                $('.media_date').val(formated);
                $('.media_date').DatePickerHide();
        }
    });
});