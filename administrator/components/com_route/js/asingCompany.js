$('document').ready(function(){
    $('#toolbar-apply a:only-child').click(function(){
        $('#asignCompany_form').submit();
        return false;
    });
    $('#toolbar-cancel a:only-child').click(function(){
        document.location.href="index.php?option=com_route";
        return false;
    });
    $('#toolbar-delete a:only-child').click(function(){
        if($('input:checkbox:checked').length == 0){
            alert("Por favor seleccione un elemnto");
            return false;
        }
        if($('input:checkbox:checked').length > 1){
            alert("Por favor solo debe seleccionar un elemento");
            return false;
        }
        var selected = $('input:checkbox:checked').val();
        document.location.href="index.php?option=com_route&task=deleteAssignCompany&ItemId="+selected+"&routeId="+$('.routeId').val();
        return false;
    });
})