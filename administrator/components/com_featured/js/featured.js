$('document').ready(function(){
    $('#toolbar-new a:only-child').click(function(){
        document.location.href = "index.php?option=com_featured&task=addFeatured";
        return false;
    });
    $('#toolbar-save a:only-child').click(function(){
        var title = $('.featured_title').val();
        var url = $('.featured_url').val();
        var image = $('.featured_image').val();
        if("" != title && "" != url && "" != image){
            document.location.href = "index.php?option=com_featured&task=saveFeatured"
                +"&featuredTitle="+title+"&featuredUrl="+btoa(url)+"&featuredImage="+image;
        }
        return false;
    });
    $('#toolbar-cancel a:only-child').click(function(){
        document.location.href = "index.php?option=com_featured";
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
        document.location.href = "index.php?option=com_featured&task=deleteFeatured&feturedId="+selected;
        return false;
    });
    $('#orderUpdate').click(function(){
        var arrFeatured = [];
        var arrFeaturedOrder = [];
        $('.featured_order').each(function(){
            arrFeatured.push($(this).attr('ref'));
            arrFeaturedOrder.push($(this).val());
        });
        $.ajax({
            type: "POST",
            url: "index.php",
            data: {
                option:'com_featured', 
                task: 'saveFeaturedOrder', 
                arrFeaturedId: JSON.stringify(arrFeatured), 
                arrFeaturedOrder: JSON.stringify(arrFeaturedOrder) 
            }
        }).done(function(response){
            alert(response);
        });
    });
});