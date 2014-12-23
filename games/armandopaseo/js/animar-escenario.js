$(function(){
	//variable para controlar el movimiento del fondo
	var blnDetener=true;
	
	//intervalo de movimiento para el fondo				
	var tmrFondo=setInterval(function(){
		//ejecutamos la animacion solo si el puntero del raton esta sobre el fondo
		if(!blnDetener){
			//obtenemos el valor de la propiedad background-position
			var strPosicion=$('#divFondo').css('background-position');
			//obtenemos la posicion de la cadena "px" (la utilizamos para obtener
			//solamente la coordenada que nos interesa animar o cambiar)
			var iPosicion=strPosicion.indexOf('px');
			
			//animamos
			if(iPosicion!=-1){
				//movemos el fondo 3 pixeles
				$('#divFondo').css('background-position',(parseInt(strPosicion.substr(0,iPosicion)))-3+'px 0');
			}else{
				//movemos el fondo 1 pixel (valor inicial, es decir, es la primera vez que
				//se ejecuta la animacion)
				$('#divFondo').css('background-position','1px 0');
			}
		}
	},10);
	
	//intervalo de movimiento para las nubes
	var tmrNubes=setInterval(function(){
		//obtenemos el background-position
		var strPosicion=$('#divNubes').css('background-position');
		var iPosicion=strPosicion.indexOf('px');
		
		if(iPosicion!=-1){
			//movemos el fondo de nubes 1 pixel
			$('#divNubes').css('background-position',(parseInt(strPosicion.substr(0,iPosicion)))+1+'px 0');
		}else{
			//establecemos la posicion predeterminada del fondo de nubes
			//esta es la primera vez que la animacion se ejecuta
			$('#divNubes').css('background-position','1px 0');
		}
	},70);

var tmrBus=setInterval(function(){
		//obtenemos el background-position
		document.getElementById("divBus").style.left+= 200;
		
	},70);

	
	//eventos al colocar el puntero del raton sobre el fondo
	$('#divFondo').hover(function(){
		//indicamos que el fondo se va a mover
		blnDetener=false;
		//mostramos el leopardo suavemente
		//$('#divLeopardo img').stop(true,true).fadeIn();
		

	},function(){
		//indicamos al temporizador que no mueva el fondo
		blnDetener=true;
		//ocultar el leopardo suavemente
		//$('#divLeopardo img').stop(true,true).fadeOut();
	});
});



$('#mover').click(function(){
        $('#divBus').animate({left:"+=1500"},3000);
	    $('#div1').css('display', 'none');
	    $('#div1a').css('display', 'none');
	    $('#div1b').css('display', 'none');
		$('#botones').css('display', 'none');
		$('#globos').css('display', 'none');
		$('#colores').css('display', 'none');
		setInterval(terminar, 500);
});

//clic en el boton jugar
	$('#btnJugar').on('click',function(){
		//iniciamos el juego
		$('#gInicio').css('display', 'block');
		$('#gPerfecto').css('display', 'none');
		$('#gAE').css('display', 'none');
		$('#gCarga').css('display', 'none');
		$('#gPuesto').css('display', 'none');
		$('#gAG').css('display', 'none');
		$('#div1').css('display', 'block');
	    $('#botones').css('display', 'block');
		$('#globos').css('display', 'block');
		$('#colores').css('display', 'block');
		$('#divBus').css('display', 'block');
		$('#divCont').css('display', 'block');
		$('#divBus').css('display', 'block');
		$('#divContenedor').css('display', 'none');
		
		
	});

function terminar()
{
	if(document.getElementById("divBus").style.left=='1500px')
		location.reload();
}