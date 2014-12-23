$('document').ready(function(){
    $('#toolbar-new a:only-child').click(function(){
        document.location.href = "index.php?option=com_route&task=addRoute";
        return false;
    });
    $('#toolbar-cancel a:only-child').click(function(){
        document.location.href = "index.php?option=com_route";
        return false;
    });
    $('#toolbar-save a:only-child').click(function(){
        $('#addRoute_form').submit();
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
        document.location.href = "index.php?option=com_route&task=deleteRoute&routeId="+selected;
        return false;
    });
    $('#toolbar-edit a:only-child').click(function(){
        if($('input:checkbox:checked').length == 0){
            alert("Por favor seleccione un elemnto");
            return false;
        }
        if($('input:checkbox:checked').length > 1){
            alert("Por favor solo debe seleccionar un elemento");
            return false;
        }
        var selected = $('input:checkbox:checked').val();
        document.location.href = "index.php?option=com_route&task=editRoute&routeId="+selected;
        return false;
    });
    $('#toolbar-assign a:only-child').click(function(){
        if($('input:checkbox:checked').length == 0){
            alert("Por favor seleccione un elemnto");
            return false;
        }
        if($('input:checkbox:checked').length > 1){
            alert("Por favor solo debe seleccionar un elemento");
            return false;
        }
        var selected = $('input:checkbox:checked').val();
        document.location.href = "index.php?option=com_route&task=assignCompany&routeId="+selected;
        return false;
    });
});