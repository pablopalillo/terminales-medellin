/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
$(document).ready(function(){
        
        var variables = getGET();
        var subMap= variables.id_sub_type;
        var map = variables.id_type;
        var Itemid = $('#Itemid').val();
        if(subMap==3 | subMap==undefined | subMap==4){
            $('#tabplanta1').parent().addClass('active');
        }
        if(subMap==5){
            $('#tabplanta2').parent().addClass('active');
        }
        if(subMap==6){
            $('#tabplanta3').parent().addClass('active');
        }
        if(subMap==7){
            $('#tabplanta4').parent().addClass('active');
        }
        if(subMap==2){
            $('#tabplanta2').parent().addClass('active');
        }
//        $('#tabst ul li:first').addClass('active');
        
        //eventos de los botones
        $("#tabplanta1").click(function(){
            if(map==3){
                subMap= 3;
            }
            if(map==4){
                subMap= 4;
            }
            
            location.href="index.php?option=com_maps&Itemid="+Itemid+"&id_type="+map+"&id_sub_type="+subMap;
        });
        $("#tabplanta2").click(function(){
            
            if(map==3){
                subMap= 5;
            }
            if(map==4){
                subMap= 8;
            }
            location.href="index.php?option=com_maps&Itemid="+Itemid+"&id_type="+map+"&id_sub_type="+subMap;
        });
        $("#tabplanta3").click(function(){
            subMap= 6;
            location.href="index.php?option=com_maps&Itemid="+Itemid+"&id_type="+map+"&id_sub_type="+subMap;
        });
        $("#tabplanta4").click(function(){
            subMap= 7;
            location.href="index.php?option=com_maps&Itemid="+Itemid+"&id_type="+map+"&id_sub_type="+subMap;
        });
        
        $('#tabst ul li a').click(function(){
            $('#tabst ul li').removeClass('active');
            $(this).parent().addClass('active');
            var currentTab = $(this).attr('href');
            $(currentTab).show();
            return false;
        });
    });	
      
 function getGET(){
   var loc = document.location.href;
   var getString = loc.split('?')[1];
   if(getString != undefined){
        var GET = getString.split('&');
        var get = {};//this object will be filled with the key-value pairs and returned.

        for(var i = 0, l = GET.length; i < l; i++){
           var tmp = GET[i].split('=');
           get[tmp[0]] = unescape(decodeURI(tmp[1]));
        }
        return get;
   }
   return false;
}