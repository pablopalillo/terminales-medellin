/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function(){
        $('#tab-facebook').hide();
        $('#tab-twitter').hide();
        $('#tab-youtube').hide();
        $('#tabs div:first').show();
        $('#tabs ul li:first').addClass('active');
        $('#tabs ul li a').click(function(){
            $('#tabs ul li').removeClass('active');
            $(this).parent().addClass('active');
            var currentTab = $(this).attr('href');
            $('#tab-facebook').hide();
            $('#tab-twitter').hide();
            $('#tab-youtube').hide();
            $(currentTab).show();
                return false;
        });
    });	

