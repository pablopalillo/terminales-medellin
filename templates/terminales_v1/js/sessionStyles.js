function setBckColor($intColor){
    $('.formats-background-color:last').val($intColor);
    getConfiguration();
}
function setFontColor($intColor){
    $('.formats-font-color:last').val($intColor);
    getConfiguration();
}

function activateFormatApli(){
    $('.formats-apli-button-deactive').replaceWith('<input onclick="javascript:getConfiguration();" id="formats-apli-button" class="formats-apli-button-active" type="button" value="APLICAR" ></input>');
}

function getConfiguration(){
    
    setSessionStyle(
        '{"font_size": "'
            +$(".formats-font-size:last").val()+'",'
        +'"font_family": "'
            +$('.formats-font-family:last').val()+'",'
        +'"line_height": "'
            +$('.formats-line-height:last').val()+'",'
        +'"background_color": "'
            +$('.formats-background-color:last').val()+'",'
        +'"color": "'
            +$('.formats-font-color:last').val()+'"}'
    );
//    $('.formats-apli-button-active').replaceWith('<input id="formats-apli-button" class="formats-apli-button-deactive" type="button" value="APLICAR" disabled="disabled" />');
}

function setSessionStyle(strStyle){
    $.ajax({
        type: "POST",
        dataType: "text",
        data: { options: strStyle },
        url: "index.php?option=com_set_session"
    }).done(function(text){
        sessionStyle(text);
})}

function sessionStyle(strStyle){
    var objStyle = JSON.parse(strStyle);
    if("undefined" != objStyle.font_size){
        switch(objStyle.font_size){
            case '1':
                $('body').css('font-size', 10); 
                break;
            case '2':
                $('body').css('font-size', 12); 
                break;
            case '3':
                $('body').css('font-size', 20); 
                break;
        }
    }
    if("undefined" != objStyle.font_family){
       switch(objStyle.font_family){
            case '1':
                $('body').css('font-family', 'Arial'); 
                break;
            case '2':
                $('body').css('font-family', 'Georgia'); 
                break;
            case '3':
                $('body').css('font-family', 'Trebuchet MS'); 
                break;
            case '4':
                $('body').css('font-family', 'Verdana'); 
                break;
            case '5':
                $('body').css('font-family', 'Courier'); 
                break;
            case '6':
                $('body').css('font-family', 'Calibrí'); 
                break;
        }
    }
    if("undefined" != objStyle.line_height){
       switch(objStyle.line_height){
            case '1':
                $('body').css('line-height', '100%'); 
                $('body').css('word-spacing', '0em'); 
                break;
            case '2':
                $('body').css('line-height', '130%'); 
                $('body').css('word-spacing', '0.3em'); 
                break;
            case '3':
                $('body').css('line-height', '200%'); 
                $('body').css('word-spacing', '1em'); 
                break;
        }
    }
    if("undefined" != objStyle.background_color){
       switch(objStyle.background_color){
            case '1':
                $('body').css('background-color', '#000000'); 
                break;
            case '2':
                $('body').css('background-color', '#CCCCCC '); 
                break;
            case '3':
                $('body').css('background-color', '#fff '); 
                break;
            case '4':
                $('body').css('background-color', '#A9DBF6 '); 
                break;
        }
    }
    if("undefined" != objStyle.color){
       switch(objStyle.color){
            case '1':
                $('body').css('color', '#000'); 
                break;
            case '2':
                $('body').css('color', '#333333'); 
                break;
            case '3':
                $('body').css('color', '#214B7E'); 
                break;
            case '4':
                $('body').css('color', '#0000FF'); 
                break;
            case '5':
                $('body').css('color', '#fff'); 
                break;
        } 
    }
}