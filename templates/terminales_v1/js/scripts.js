$('document').ready(
    function(){
        $('#query_pqr_btn').click(function(e){
            if($('.pqr_code_input').val() != ""){
                $('#query_pqr_form').submit();
            }
            e.preventDefault();
        })
        $('#query_pqr_btn').click(function(){
            $('#query_pqr_form').submit();
            return false;
        })
        $('.MsoNormal').css('margin-left', '0px');
        $('.MsoNormal').css('text-indent', '0px');
        $('.navigation-item-a').click(function(){
            $('.navigation-item-selected:first-child').attr('class', 'navigation-item-not-selected')
            $(this).children().attr('class', 'navigation-item-selected');
            $('.news-item').css('display', 'none');
            $('[ref="news-item-'+$(this).attr('ref')+'"]').css('display', 'block');
            return false;
        });
        $('.menu_nav_bar li ul').attr('class', 'hiddenContent');
        $('#showMoreContents').click(
            function(){
                $('.hiddenContent').attr('class', 'showContent');
                $('#showMoreContents').remove();
                return false;
        }); 
        
        $('.sliding-window').attr('style', 'width:'+$('.sliding-window div').length*900+'px;')
        
        $('.next-reg').click(function(event) {
            event.preventDefault();
            $('.table-container').css('height','300px');
            $('.table-container').animate({scrollLeft:'+=900'}, 'fast');        
        });
        
        $('.previous-reg').click(function(event) {
            event.preventDefault();
            $('.table-container').animate({scrollLeft:'-=900'}, 'fast');        
        });
        
        $('#strategic_allies_prev').click(function(event) {
            event.preventDefault();
            $('#strategic_allies_content').animate({scrollLeft:'-=103'}, 'fast');        
        });
        $('#strategic_allies_prev_vertical').click(function(event) {
            event.preventDefault();
            $('#strategic_allies_content_vertical').animate({scrollTop:'-=103'}, 'fast');        
        });

        $('#strategic_allies_next_vertical').click(function(event) {
            event.preventDefault();
            $('#strategic_allies_content_vertical').animate({scrollTop:'+=103'}, 'fast');        
        });
        $('#strategic_allies_next').click(function(event) {
            event.preventDefault();
            $('#strategic_allies_content').animate({scrollLeft:'+=103'}, 'fast');        
        });

        $('#formats-a').lightBox();

        $('[ref="multimedia_table"] a:only-child').click(function(){
            $(this).lightBox({fixedNavigation:true});
            return false;
        });
//        $('#coin-slider').coinslider();
        $('#poll-answer-show-results').click(function(){
            $('#poll_content').attr('class', 'hiddenContent');
            $('#answer_content').attr('class', 'showContent');
            return false;
        });
        $('#poll-return-btn').click(function(){
            $('#poll_content').attr('class', 'showContent');
            $('#answer_content').attr('class', 'hiddenContent');
            return false;
        });
        $('#poll_submit_btn_options').click(function(){
            var strAnswer = '[';
            $('[name="option"]:checked').each(function(){
                strAnswer +='"'+$(this).val()+'",';
            });
            strAnswer = strAnswer.slice(0,strAnswer.length-1);
            strAnswer += ']';
            $('#poll_answer').val(strAnswer);
            $('#poll_form').submit();
        });
        $('#poll_submit_btn').click(function(){
            var strAnswer = $('[name="option_text"]').val();
            if(strAnswer != ''){
                $('#poll_answer').val(strAnswer);
                $('#poll_form').submit();
            }else {
                alert("POR FAVOR INGRESE SU RESPUESTA");
            }
        });

        $('.menu_nav_bar .parent').mouseover(function()
        {
            jQuery(this).children().attr('class', 'showContent');
//            $(this).attr('class', 'showContent');
        });

        $('.menu_nav_bar .parent').mouseleave(function(){
            jQuery('.menu_nav_bar li ul').attr('class', 'hiddenContent');
        });
        $('.login-button-a').click(function(){
            $('#login-form').submit();
            return false;
        });
        
        //Calificar 
        $(".plg-vote-2").click(function(){
            $(".plg-vote-container").attr("class", "showContent");
            return false;
        });
        
        //Agregar a favoritos
        $(".plg-favorite").click(function(){
            bookmarksite();
            return false;
        });
        $('[ref="gal_1.jpg"]').trigger('click');
        
        $('#read-more').click(function(){
            if($('#new-content').css('height') != '278px'){
                $('#new-content').css('height','278px');
                $(this).html("Leer mas...");
            }else{
                $('#new-content').css('height','100%');
                $(this).html("Leer menos...");
            }
            return false;
        });
        $('#read-more-transporters').click(function(){
            if($('#new-content').css('height') != '278px'){
                $('#new-content').css('height','278px');
                $(this).html("Leer mas...");
            }else{
                $('#new-content').css('height','100%');
                $(this).html("Leer menos...");
            }
            return false;
        });
        $('#read-more-intranet').click(function(){
            if($('#new-content').css('height') != '318px'){
                $('#new-content').css('height','318px');
                $(this).html("Leer mas...");
            }else{
                $('#new-content').css('height','100%');
                $(this).html("Leer menos...");
            }
            return false;
        });
        $('#registration_clear_btn').click(function(){
            $('#member-registration textarea').val('');
            $('#member-registration [type="text"]').val('');
            $('#member-registration [type="email"]').val('');
            $('#member-registration [type="password"]').val('');
        });
        $('#more_featured_a').click(function(){
           $('#home_featured_container').css('overflow-y', 'scroll');
           $('#more_featured').hide();
           $('#more_featured_a').hide();
           return false;
        });
        $('.share_print_container_a').click(function(){
            window.print();
            return false;
        })
        $('.intranet-featured-more-a').click(function(){
            $('.intranet-featured-more-container').css('overflow-y', 'scroll');
           $('.intranet-featured-more').hide();
            return false;
        });
        $('.company-history-tip-a').click(function(){
            return false;
        });
        $('.company-history-tip-a').mouseover(function(){
            $('#history-tip-'+$(this).attr('ref')).css('display', 'block');
        });
        $('.company-history-tip-a').mouseleave(function(){
            $('#history-tip-'+$(this).attr('ref')).css('display', 'none');
        });
        if("170" != $('#jform_country').val()){
            $('#jform_state').replaceWith('<select id="jform_state" name="jform[state]"><option value="0">N/A</option></select>');
            $('#jform_city').replaceWith('<select id="jform_city" name="jform[city]"><option value="0">N/A</option></select>');
        }
        $('#jform_country').change(function(){
            $('#jform_state').replaceWith('<select id="jform_state" name="jform[state]"><option value="0">N/A</option></select>');
            $('#jform_city').replaceWith('<select id="jform_city" name="jform[city]" disabled="disabled"><option value=""></option></select>');
            $.ajax({
                type: "POST",
                dataType: "json",
                data: { type: 'country', param: $(this).val() },
                url: "index.php?option=com_locations",
                success: function( json ) {
                        if(0 != json.length){
                            $('#jform_state').replaceWith('<select class="required" name="jform[state]" id="jform_state" aria-required="true" required="required" aria-invalid="false"></select>');
                            $('#jform_state').append($('<option>').text("Seleccione").attr('value', ''));
                                $('#jform_state').change(function(){
                                $('#jform_city').replaceWith('<select id="jform_city" name="jform[city]" disabled="disabled"><option value=""></option></select>');
                                    $.ajax({
                                        type: "POST",
                                        dataType: "json",
                                        data: { type: 'state', param: $(this).val() },
                                        url: "index.php?option=com_locations",
                                        success: function( json ) {
                                            if(0 != json.length){
                                                $('#jform_city').replaceWith('<select class="required" name="jform[city]" id="jform_city" aria-required="true" required="required" aria-invalid="false"></select>');
                                                $('#jform_city').append($('<option>').text("Seleccione").attr('value', ''));
                                                $.each(json, function(i, value) {
                                                    $('#jform_city').append($('<option>').text(value.city_name).attr('value', value.city_code));
                                                });
                                            }else{
                                                $('#jform_city').replaceWith('<select id="jform_city" name="jform[city]"><option value="0">N/A</option></select>');
                                            }
                                        }
                                    });
                                });
                            $.each(json, function(i, value) {
                                $('#jform_state').append($('<option>').text(value.state_name).attr('value', value.state_code));
                            });
                        } else {
                            $('#jform_city').replaceWith('<select id="jform_city" name="jform[city]"><option value="0">N/A</option></select>');
                        }
                    }
                });
        });
        $('#jform_state').change(function(){
            $('#jform_city').replaceWith('<select id="jform_city" name="jform[city]" disabled="disabled"><option value="0"></option></select>');
                $.ajax({
                    type: "POST",
                    dataType: "json",
                    data: { type: 'state', param: $(this).val() },
                    url: "index.php?option=com_locations",
                    success: function( json ) {
                        if(0 != json.length){
                            $('#jform_city').replaceWith('<select class="required" name="jform[city]" id="jform_city" aria-required="true" required="required" aria-invalid="false"></select>');
                            $('#jform_city').append($('<option>').text("Seleccione").attr('value', ''));
                            $.each(json, function(i, value) {
                                $('#jform_city').append($('<option>').text(value.city_name).attr('value', value.city_code));
                            });
                        } else {
                            $('#jform_city').replaceWith('<select id="jform_city" name="jform[city]"><option value="0">N/A</option></select>');
                        }
                    }
                });
        });
        $('.pqr_faces img').click(function(){
            $('.pqr_faces img').css('border', 'none');
            $(this).css('border', 'solid #015AB8');
            $('#pqrService').val($(this).attr('class'));
        });
});
function bookmarksite(){
    var title=String(document.title);
    var url=String(window.location);

    if (window.sidebar) // firefox
            window.sidebar.addPanel(title, url, "");
    else if(window.opera && window.print){ // opera
            var elem = document.createElement('a');
            elem.setAttribute('href',href);
            elem.setAttribute('title',title);
            elem.setAttribute('rel','sidebar');
            elem.click();
    } 
    else if(document.all)// ie
            window.external.AddFavorite(url, title);
    else {// otros web Browsers
        alert ("Presione Crtl+D para agregar a este sitio en sus Favoritos");  
    }
}

function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
 
         return true;
      }