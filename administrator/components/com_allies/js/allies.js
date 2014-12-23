/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function(){
    $("#orderUpdate").click(orderUpdate);
    
    //Eventos de los botonos de la barra administradora
    $('#toolbar-new a:only-child').attr('onclick', '');    
    $('#toolbar-delete a:only-child').attr('onclick', '');
    $('#toolbar-save a:only-child').attr('onclick', '');
    $('#toolbar-cancel a:only-child').attr('onclick', '');
    
    $('#toolbar-new a:only-child').click(function(){
        var idAliado = $("#id_ally").val();
        document.location.href='index.php?option=com_allies&task=addalliesitem&idAlly='+idAliado;
    });
    $('#toolbar-delete a:only-child').click(function(){
        if($('input:checkbox:checked').length == 1){
            var idAli = $("#id_ally").val();
           var idElemento = $('input:checkbox:checked').val();
           document.location.href = "index.php?option=com_allies&task=deletealliesitem&idItem="+idElemento+"&tipo=notype&idAlly="+idAli;
       } else {
           if($('input:checkbox:checked').length == 0){
               alert('DEBE SELECCIONAR AL MENOS UN ELEMENTO');
           } else {
               alert('DEBE SELECCIONAR SOLO UN ELEMENTO');
           }
       }
    });
    $('#toolbar-save a:only-child').click(function(){
        if($("#itemName").val() != "" && $("#imageName").val() != "" && $("#itemUrl").val() != ""){
            $("#formAdItem").submit();
        }else{
            alert("Dede diligenciar el formulario por completo");
        }
    });
    $('#toolbar-cancel a:only-child').click(function(){
        document.location.href = "index.php?option=com_allies";
        return false;
    });
})


function orderUpdate(){
    var size = $("#arraySize").val();
    var strJson = '[ ';
    if(validarOrder(size)){
        //Creamos el arreglo de datos
        var dataArray  = new Array(size);
        for(var a=0; a < size; a++){
            dataArray[a] = new Array(2);
            dataArray[a][0] = $("#item_"+a).val();
            dataArray[a][1] = $("#order_"+a).val();
            if(strJson == '[ '){
                strJson = strJson+'{ "allie" : '+$("#item_"+a).val()+', "value" : '+$("#order_"+a).val()+' } ';
            }else{
                strJson = strJson+',{ "allie" : '+$("#item_"+a).val()+', "value" : '+$("#order_"+a).val()+' } ';
            }
        }
        strJson = strJson+']';
        $.ajax({
            type: "POST",
            url: "index.php",
            data: {option:'com_allies', arrayData: strJson, task:'orderallies' }
        }).done(function(response){
            if(response=="\r\n\r\n\r\ntrue"){
                alert("Orden actualizado correctamente");
            }
        });
        
    }else{
        alert("Orden repetido, por favor corregir");
    }
    return false;
}

function validarOrder(tamano){
    //obtenermos todos los valores de orden dados por el usuario
    //recorremos uno a uno cada orden ingresado
    var conteo = 0;
    for(var a=0; a < tamano; a++){
        var orden = $("#order_"+a).val()
        //buscamos en los objetos y contamos a ver cuantas veces lo encontramos
        var repeticiones=0;
        for(var b=0; b < tamano; b++){
            var orden2 = $("#order_"+b).val()
            if(orden == orden2){
                repeticiones++;
            }
        }
        conteo++;
        //validamos que sólo se encuentre una vez
        if(repeticiones != 1){
            return false;
        }
    }
    if(conteo == tamano){
        return true;
    }else{
        return false;
    }
}