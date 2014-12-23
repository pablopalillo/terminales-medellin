$('document').ready(function(){
    $('#toolbar-new a:only-child').click(function(){
        var routeId = $('.routeId').val();
        document.location.href = "index.php?option=com_route&task=addRouteItem&routeId="+routeId;
        return false;
    })
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
        var routeId = $('.routeId').val();
        document.location.href = "index.php?option=com_route&task=deleteRouteItem&ItemId="+selected+"&routeId="+routeId;
        return false;
    })
    $('#toolbar-cancel a:only-child').click(function(){
        document.location.href = "index.php?option=com_route";
        return false;
    })
    $('.saveorder').click(function(){
        var suggestedValues = [];
        var suggestedIds = [];
        $('.suggested').each(function(){
            suggestedValues.push($(this).val());
            suggestedIds.push($(this).attr('ref'));
        });
        $.ajax({
            type: "POST",
            url: "index.php",
            data: {option:'com_route', task:'updateSuggested',  suggestedValues:JSON.stringify(suggestedValues), suggestedIds:JSON.stringify(suggestedIds) }
        }).done(function(){
            alert('Sugeridos Actualizados');
        }); 
        return false;
    });
})