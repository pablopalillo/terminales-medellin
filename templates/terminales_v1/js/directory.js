$('document').ready(
    function(){
        $('.directory_paginator').click(
            function(){
                for(i=0; i<$(this).attr('countRef'); i++){
                    $('#directory_table_'+i).attr('class', 'hiddenContent')
                    $('#'+$(this).attr('ref')).attr('class', 'showContentTable')
                }
                return false;
        }); 
        $('#directorypr').change(
            function(){
                $('#directorysearchandfilter').submit();
        });
        
        $('#searchbyname').keypress(function(){
            if(e.which == 13){
                $('#filterbyletter').attr('value', '');
                $('#directorysearchandfilter').submit();
                return false;
            }
        });
        $('#directorysearchbynamebutton').click(
            function(){
                $('#filterbyletter').attr('value', '');
                $('#directorysearchandfilter').submit();
                return false;
        });
        
        $('#searchbyname').keypress(
            function(e){
                code= (e.keyCode ? e.keyCode : e.which);
                if (code == 13){
                    $('#filterbyletter').attr('value', '');
                    $('#directorysearchandfilter').submit();
                    e.preventDefault();
            };
        });
        
        $(".letter").each(function() {
            $(this).click(
                function(){
                    $('#searchbyname').val('');
                    $('#filterbyletter').attr('value', $(this).attr('href'));
                    $('#directorysearchandfilter').submit();
                    return false;
            });
        });
        
        $('#directoryOrderByName').click(function(){
            $('#orderbyarea').attr('value', '');
            $('#orderbyname').attr('value', 'true');
            if($('#order').attr('value')=='asc'){
                $('#order').attr('value','desc');
            } else {
                $('#order').attr('value','asc');
            }
            $('#directorysearchandfilter').submit();
            return false;
        });
        $('#directoryOrderByArea').click(function(){
            $('#orderbyname').attr('value', '');
            $('#orderbyarea').attr('value', 'true');
            if($('#order').attr('value')=='asc'){
                $('#order').attr('value','desc');
            } else {
                $('#order').attr('value','asc');
            }
            $('#directorysearchandfilter').submit();
            return false;
        })
        $('#directory_order_by_list').change(function(){
            if($(this).val() == "area"){
                $('#orderbyarea').attr('value', 'true');
                $('#orderbyname').attr('value', '');
                $('#order').attr('value','asc');
                $('#directorysearchandfilter').submit();
            }
            if($(this).val() == "name"){
                $('#orderbyarea').attr('value', '');
                $('#orderbyname').attr('value', 'true');
                $('#order').attr('value','asc');
                $('#directorysearchandfilter').submit();
            }
        })
});