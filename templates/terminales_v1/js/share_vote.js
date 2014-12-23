$('document').ready(function(){
     $('.plg-vote-star-inactive, .plg-vote-star-active').click(function(){
         $.ajax({type: "POST",
            url: "index.php",
            data: { 
                option: "com_set_rating",
                rate: $(this).attr('ref'),
                uriquery: location.search
            }
          }).success(function( response ) {
            if(response == "false"){
                alert("Ya Calificó Esta Publicación")
            } else {
                $('.plg-vote-container').replaceWith("<div class='plg-vote-container'>Actualizando...</div>");
                setTimeout(function(){$('.plg-vote-container').replaceWith(response)}, 2000);
            }
          });
    });
    $('.plg-vote-star-inactive, .plg-vote-star-active').mouseover(function(){
        var strClass = $(this).attr('class');
        var intRef = $(this).attr('ref');
        var arrClass = [];
        $('.plg-vote-star-inactive, .plg-vote-star-active').each(function(){
            if($(this).attr('ref') <= intRef){
                arrClass[$(this).attr('ref')] = $(this).attr('class');
                $(this).attr('class', 'plg-vote-star-hover');
            }
            
        })
        
        $(this).mouseleave(function(){
            $('.plg-vote-star-hover').each(function(){
                if($(this).attr('ref')){
                    $(this).attr('class', arrClass[$(this).attr('ref')]);
                }
            })
        });
    })
});