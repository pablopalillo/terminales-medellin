$('document').ready(function(){
    $('.search-input-search').keypress(function(e) {
        if(e.which == 13) {
            $('.search-form-letter').val("");
            $('.search-form-search').val($('.search-input-search').val())
            $('.search-form').submit();
        }
    });
    $('.search-input-button').click(function(){
        $('.search-form-letter').val("");
        $('.search-form-search').val($('.search-input-search').val())
        $('.search-form').submit();
    });
    $('.search-input-order').change(function(){
        $('.search-form-order').val($(this).val());
        $('.search-form').submit();
    });
    $('.search-input-pr').change(function(){
        $('.search-form-pr').val($(this).val());
        $('.search-form').submit();
    });
    $('.search-letter').click(function(){
        $('.search-form-search').val("");
        $('.search-form-letter').val($(this).attr('ref'));
        $('.search-form').submit();
        return false;
    });
    
    $('.pag_start_a').click(function(){
        if($(this).attr('ref')=="0"){
            return false;
        }
        goToPage($(this).attr('ref'));
        return false;
    });
    $('.pag_prev_a').click(function(){
        if($(this).attr('ref')=="0"){
            return false;
        }
        goToPage($(this).attr('ref'));
        return false;
    });
    $('.pag_next_a').click(function(){
        if($(this).attr('ref')=="0"){
            return false;
        }
        goToPage($(this).attr('ref'));
        return false;
    });
    $('.pag_end_a').click(function(){
        if($(this).attr('ref')=="0"){
            return false;
        }
        goToPage($(this).attr('ref'));
        return false;
    });
    function goToPage(intPage){
        $('.pag_container').html(intPage);
        $('.pag_start_a').attr('ref', 1);
        $('.pag_prev_a').attr('ref', parseInt(intPage)-1);
        $('.pag_next_a').attr('ref', parseInt(intPage)+1);
        $('.pag_end_a').attr('ref', $('#pgeQty').val());
        if(intPage == 1){
            $('.pag_start_a').attr('ref', '0');
            $('.pag_prev_a').attr('ref', '0');
        }
        if(intPage == $('#pgeQty').val()){
            $('.pag_next_a').attr('ref', '0');
            $('.pag_end_a').attr('ref', '0');
        }
        intCount = 0;
        $('.company-container').each(function(){
            $(this).attr('class', 'company-container-hidden');
        });
        $('.company-container-hidden').each(function(intCount){
           intCount = intCount+1; 
           var intMax = $('.search-input-pr').val()*intPage;
           var intMin = intMax-$('.search-input-pr').val();
           if(intCount > intMin && intCount <= intMax ){
                $(this).attr('class', 'company-container');
            }
        });
    }
});