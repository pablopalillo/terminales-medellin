function mapInit(intWidth, intHeight){
    $('document').ready(
        function(){
            $('.maps').craftmap({
                image: {
                width: intWidth,
                height: intHeight
                }
            });
    })    
}
function mapInit2(intWidth, intHeight){
    $('document').ready(
        function(){
            var cont1 =0;
            var cont2 =0;
            var cont3 =0;
            $(".network-planta1").craftmap({
                image: {
                width: intWidth,
                height: intHeight
                }
            });
            $('#tabst ul li a').click(function(){
            $('#tabst ul li').removeClass('active');
            $(this).parent().addClass('active');
            var currentTab = $(this).attr('href').substring(1);
            if(currentTab != "network-planta1"){
                if(currentTab == "network-planta2"){
                    if (cont2 == 0){
                    cont2++;
                    $('.'+currentTab).craftmap({
                        image: {
                        width: intWidth,
                        height: intHeight
                        }
                    });
                    }else{
                        $('.'+currentTab).craftmap();
                    }
                }
                else{
                   if (cont3 == 0){
                    cont3++;
                    $('.'+currentTab).craftmap({
                        image: {
                        width: intWidth,
                        height: intHeight
                        }
                    });
                    }else{
                        $('.'+currentTab).craftmap();
                    }
                }
            }
            return false;
            }); 
    });    
}
function mapInit3(intWidth, intHeight){
    $(function(){
	$('.network-planta1').craftmap({
		image: {
                width: intWidth,
                height: intHeight
                }
	});
	$('.network-planta2').craftmap({
		image: {
                width: intWidth,
                height: intHeight
                }
	});
	$('.network-planta3').craftmap({
		image: {
                width: intWidth,
                height: intHeight
                }
	})
	;$('.preloader').remove();
});
    
    
    $(".network-planta1").craftmap({
                image: {
                width: intWidth,
                height: intHeight
                }
            });
}