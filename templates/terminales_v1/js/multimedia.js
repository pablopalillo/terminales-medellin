$('document').ready(
    function(){
        $("[ref='multimedia_table'] a").lightBox();
        $(".content-image").lightBox();
        $(".content-video").lightBox();
        for(i=0; i<$('.multimedia_paginator').attr('countRef'); i++){
            $('#multimedia_table_'+i).attr('class', 'hiddenContent');
        }
        $('#multimedia_table_0').attr('class', 'showContentTable');
        $('.multimedia_paginator').click(
            function(){
                for(i=0; i<$(this).attr('countRef'); i++){
                    $('#multimedia_table_'+i).attr('class', 'hiddenContent');
                }
                $('#'+$(this).attr('ref')).attr('class', 'showContentTable');
                $('#'+$(this).attr('ref')+' img:only-child').each(function(){
                    $(this).attr('src', 'multimedia/'+$(this).attr('ref'));
                })
                return false;
                
                
                
        });
        $('#multimediapr').change(
            function(){
                $('#multimediasearchandfilter').submit();
        });
        
        $('#multimediatype').change(
            function(){
                $('#multimediasearchandfilter').submit();
        });
        
        $('#multimediasearchbykeybutton').click(
            function(){
                $('#multimediasearchandfilter').submit();
                return false;
        });
        
        $('#multimediasearchbydatebutton').click(
            function(){
                $('#multimediasearchandfilter').submit();
                return false;
        });
        
        $('#multimediasearchbyname').keypress(
            function(e){
                code= (e.keyCode ? e.keyCode : e.which);
                if (code == 13){
                    $('#multimediasearchandfilter').submit();
                    e.preventDefault();
            };
        });
        
        $('#multimediasearchbydate').keypress(
            function(e){
                code= (e.keyCode ? e.keyCode : e.which);
                if (code == 13){
                    $('#multimediasearchandfilter').submit();
                    e.preventDefault();
            };
        });
        $('#multimediasearchbydate').DatePicker({
                format:'m/d/Y',
                date: new Date(),
                current: new Date(),
                starts: 1,
                position: 'r',
                onBeforeShow: function(){
                        $('#multimediasearchbydate').DatePickerSetDate(new Date(), true);
                },
                onChange: function(formated, dates){
                        $('#multimediasearchbydate').val(formated);
                        $('#multimediasearchbydate').DatePickerHide();
                }
        });
});