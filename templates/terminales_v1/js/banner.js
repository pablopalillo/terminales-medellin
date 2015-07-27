var intImages = 3;
var intTime = 14;

$('document').ready(
    function(){
        $('.banner-item-container').children().each(
            function(){
                loopController('#'+$(this).attr('id'));
            }
        )
});

function loopController(strDivId){
    var intOrder = $(strDivId).attr('order');
    var intTotal = $(strDivId).attr('total');
    var intTimeOut = intTime*parseInt(intTotal)*1000;
    timeController(strDivId, intOrder, intTotal);
}

function timeController(strDivId, intOrder, intTotal){
    var intTimeOut = (intTime*(parseInt(intOrder)+1))*1000
    setTimeout('hiddenEffect("'+strDivId+'", "'+intTotal+'", "'+intOrder+'", true)', intTimeOut );
}

function hiddenEffect(strDivId, intTotal, intOrder, boolInterval){
    if(boolInterval == true){
        var intIntervalTimeOut = parseInt(intTotal)*intTime*1000;
        setInterval('hiddenEffect("'+strDivId+'", "'+intTotal+'", "'+intOrder+'", false)', intIntervalTimeOut);
    }
    intOrder = parseInt(intOrder)+1;
    if(intOrder != parseInt(intTotal)){
        jQuery(strDivId).animate({
                opacity: 0.0
            }, 5000, function() {
                $(strDivId).css('display', 'none');
        });
        var intTimeOut = intTime*(parseInt(intTotal)-1)*1000;
        setTimeout('showEffect("'+strDivId+'", "'+intTotal+'", true)', intTimeOut );
    }
}

function showEffect(strDivId, intTotal, boolInterval){
    if(boolInterval == true){
        var intIntervalTimeOut = parseInt(intTotal)*intTime*1000;
        setInterval('showEffect("'+strDivId+'", "'+intTotal+'", false)', intIntervalTimeOut);
    }
    $(strDivId).css('display', 'block');
    $(strDivId).animate({
            opacity: 1
        }, 5000, function() {
    });
}