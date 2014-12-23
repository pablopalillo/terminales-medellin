$('document').ready(
    function(){
        var intMovementRate = 100;
        var countMovement = 0;
        $('.left').click(function(){
            switch(countMovement-100){
                case 0:
                    if('message-metro' == $('#message-container div').attr('id')){
                        $('#message-container div').css('background-image', 'url("images/message-metro.png")');
                    }
                    if('message-taxi' == $('#message-container div').attr('id')){
                        $('#message-container div').css('background-image', 'url("images/message-taxi.png")');
                    }
                    if('message-bus' == $('#message-container div').attr('id')){
                        $('#message-container div').css('background-image', 'url("images/message-bus.png")');
                    }
                    if('message-pie' == $('#message-container div').attr('id')){
                        $('#message-container div').css('background-image', 'url("images/message-pie.png")');
                    }
                    break;
                case 100:
                    $('#message-container div').css('background-image', 'url("images/step_2.png")');
                    break;
                case 200:
                    $('#message-container div').css('background-image', 'url("images/step_3.png")');
                    break;
                case 300:
                    $('#message-container div').css('background-image', 'url("images/step_4.png")');
                    break;
                case 400:
                    $('#message-container div').css('background-image', 'url("images/step_5.png")');
                    break;
                case 500:
                    $('#message-container div').css('background-image', 'url("images/step_6.png")');
                    break;
                case 600:
                    $('#message-container div').css('background-image', 'url("images/step_7.png")');
                    break;
                case 700:
                    $('#message-container div').css('background-image', 'url("images/step_8.png")');
                    break;
                case 800:
                    $('#message-container div').css('background-image', 'url("images/step_9.png")');
                    break;
                }
            if(countMovement > 0){
                countMovement = countMovement-intMovementRate;
                $('#container-bck').animate({marginLeft: '+=285px'}, 'slow');
                $('.transport').animate({marginLeft: '-='+intMovementRate+'px'}, 'slow');
            }
            return false;
        })
        $('.right').click(function(){
            switch(countMovement+100){
                case 0:
                    if('message-metro' == $('#message-container div').attr('id')){
                        $('#message-container div').css('background-image', 'url("images/message-metro.png")');
                    }
                    if('message-taxi' == $('#message-container div').attr('id')){
                        $('#message-container div').css('background-image', 'url("images/message-taxi.png")');
                    }
                    if('message-bus' == $('#message-container div').attr('id')){
                        $('#message-container div').css('background-image', 'url("images/message-bus.png")');
                    }
                    if('message-pie' == $('#message-container div').attr('id')){
                        $('#message-container div').css('background-image', 'url("images/message-pie.png")');
                    }
                    break;
                case 100:
                    $('#message-container div').css('background-image', 'url("images/step_2.png")');
                    break;
                case 200:
                    $('#message-container div').css('background-image', 'url("images/step_3.png")');
                    break;
                case 300:
                    $('#message-container div').css('background-image', 'url("images/step_4.png")');
                    break;
                case 400:
                    $('#message-container div').css('background-image', 'url("images/step_5.png")');
                    break;
                case 500:
                    $('#message-container div').css('background-image', 'url("images/step_6.png")');
                    break;
                case 600:
                    $('#message-container div').css('background-image', 'url("images/step_7.png")');
                    break;
                case 700:
                    $('#message-container div').css('background-image', 'url("images/step_8.png")');
                    break;
                case 800:
                    $('#message-container div').css('background-image', 'url("images/step_9.png")');
                    break;
            }
            if(countMovement < 800){
                countMovement = countMovement+intMovementRate;
                $('#container-bck').animate({marginLeft: '-=285px'}, 'slow');
                $('.transport').animate({marginLeft: '+='+intMovementRate+'px'}, 'slow');
            }
            return false;
        })
        $('#menu-games-button').mouseover(function(){
            $('#games-menu').css('display', 'block');
            return false;
        });
        $('#menu-games-button').mouseout(function(){
            $('#games-menu').css('display', 'none');
            return false;
        });
        $('.armando-form').lightBox();
        $('.children-terminal-a').click(function(){
            if('0px' == $('#rail div').css('margin-left') || '800px' == $('#rail div').css('margin-left')){
                
            }else{
                return false;
            }
        })
});
