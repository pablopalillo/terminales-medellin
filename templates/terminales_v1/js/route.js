$('document').ready(
    function(){
        $('.routeStar').click(
            function(){
                if($('#way'+$(this).attr('ref')).attr('class')=='showContent'){
                    $('#way'+$(this).attr('ref')).attr('class', 'hiddenContent');
                }else{
                    $('#way'+$(this).attr('ref')).attr('class', 'showContent')
                }
            return false
        });
});