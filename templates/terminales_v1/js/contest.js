$('document').ready(
    function(){
        $('#send-contest-btn').click(
            function(){
                var strJsonAnswer = '{';
                $('.contest-question-table').each(
                    function(){
                        if('unique'==$(this).attr('type')){
                                strJsonAnswer = strJsonAnswer + '"'+$('[name="'+$('[ref="'+$(this).attr('ref')+'"] input:only-child').attr('name')+'"]:checked').attr('ref')+'":';
                                strJsonAnswer = strJsonAnswer + '"'+$('[name="'+$('[ref="'+$(this).attr('ref')+'"] input:only-child').attr('name')+'"]:checked').attr('value')+'",';
                        }
                        if('multiple'==$(this).attr('type')){
                            strJsonAnswer = strJsonAnswer +'"'+$('[name="'+$('[ref="'+$(this).attr('ref')+'"] input:only-child').attr('name')+'"]:checked').attr('ref')+'":';
                            var strJsonMultipleAnswer = '{';
                            var intCount = 0;
                            $('[name="'+$('[ref="'+$(this).attr('ref')+'"] input:only-child').attr('name')+'"]:checked').each(
                                function(){
                                    intCount = intCount +1;
                                    strJsonMultipleAnswer = strJsonMultipleAnswer + '"'+intCount+'":"'
                                    strJsonMultipleAnswer = strJsonMultipleAnswer + $(this).attr('value')+'",';
                                }
                            );
                            strJsonAnswer = strJsonAnswer + strJsonMultipleAnswer.substring(0, strJsonMultipleAnswer.length-1)+'},';
                        }
                        if('text'==$(this).attr('type')){
                            $('[ref="'+$(this).attr('ref')+'"] input:only-child').each(
                                function(){
                                    strJsonAnswer = strJsonAnswer +'"'+$(this).attr('ref')+'":';
                                    strJsonAnswer = strJsonAnswer + '"'+$(this).val()+'",';
                                }
                            )
                        }
                    }
                )
            strJsonAnswer = strJsonAnswer.substring(0, strJsonAnswer.length-1)+'}';
            $('#hidden-contest-answer').val(strJsonAnswer);
            $('#hidden-contest-form').submit();
            return false;
        });
    }
)