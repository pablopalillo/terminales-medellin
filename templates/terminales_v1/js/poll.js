$('document').ready(
    function(){
        $('.sendanswer').click(
            function(){
                if($('#answer1').attr('class')=='showContent'){
                    $('#answer1').attr('class', 'hiddenContent');
                    $('#answertype').attr('class', 'showContent');
                    $('#viewanswerbutton').attr('value', 'VER RESULTADOS');
                }else{
                    $('#answer1').attr('class', 'showContent');
                    $('#answertype').attr('class', 'hiddenContent');
                     $('#viewanswerbutton').attr('value', 'VER ENCUESTA');
                }
            return false
        });
        $('#voteanswerbutton').click(
            function(){
                $('#satisfaction').attr('value', '');
                $('#idpoll').attr('value', '');
                $('#rbtpoll').submit();
                return false;
        });
         $('#voteanswerbutton1').click(
            function(){
                $('#name').attr('value', '');
                $('#idpoll').attr('value', '');
                $('#chkpoll').submit();
                return false;
        });
         $('#voteanswerbutton2').click(
            function(){
              
                $('#txtpoll').submit();
                return false;
        });
       
});