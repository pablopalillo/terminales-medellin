/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function(){
    $("#orderUpdate").click(orderUpdate);
    
    //Eventos de los botonos de la barra administradora
    $('#toolbar-new a:only-child').attr('onclick', '');    
    $('#toolbar-delete a:only-child').attr('onclick', '');
    
    $("#toolbar-save a:only-child").attr('onclick', '');
    $("#toolbar-edit a:only-child").attr('onclick', '');
    $('#toolbar-cancel a:only-child').attr('onclick', '');
    
    //Evento boton agregar
    $('#toolbar-new a:only-child').click(function(){
        document.location.href='index.php?option=com_allies&task=addallies';
    });
    
    //evento boton borrar
    $('#toolbar-delete a:only-child').click(function(){
        if($('input:checkbox:checked').length == 1){
           var idElemento = $('input:checkbox:checked').val();
           document.location.href = "index.php?option=com_allies&task=deletealliesitem&idItem="+idElemento+"&tipo=type";
       } else {
           if($('input:checkbox:checked').length == 0){
               alert('DEBE SELECCIONAR AL MENOS UN ELEMENTO');
           } else {
               alert('DEBE SELECCIONAR SOLO UN ELEMENTO');
           }
       }
    });
    
    //Evento boton guardar
    $('#toolbar-save a:only-child').click(function(){
        if($("#itemName").val() != "" && $("#imageName").val() != "" && $("#itemUrl").val() != ""){
            $("#addAllies_form").submit();
        }else{
            alert("Dede diligenciar el formulario por completo");
        }
    });
    
    //Evento boton cancelar
    $('#toolbar-cancel a:only-child').click(function(){
        document.location.href = "index.php?option=com_allies";
    });
    
    //Evento boton editar
    $('#toolbar-edit a:only-child').click(function(){
        if($('input:checkbox:checked').length == 1){
           var idElemento = $('input:checkbox:checked').val();
           document.location.href = "index.php?option=com_allies&task=listalliesitem&allyId="+idElemento;
       } else {
           if($('input:checkbox:checked').length == 0){
               alert('DEBE SELECCIONAR AL MENOS UN ELEMENTO');
           } else {
               alert('DEBE SELECCIONAR SOLO UN ELEMENTO');
           }
       }
    });
})


function orderUpdate(){
    var size = $("#arraySize").val();
    if(validarOrder(size)){
        //Creamos el arreglo de datos
        var dataArray  = new Array(size);
        for(var a=0; a < size; a++){
            dataArray[a] = new Array(2);
            dataArray[a][0] = $("#item_"+a).val();
            dataArray[a][1] = $("#order_"+a).val();
            
        }
        //convertimos el arreglo en un objeto json.
        var myJson = JSON.stringify(dataArray);
        
        //enviamos la peticion ajax con el arreglo.
        $.ajax({
            type: "POST",
            url: "index.php",
            data: {option:'com_allies', arrayData: myJson, task:'orderallies' }
        }).done(function(response){
            if(response=="true"){
                StorersvData(datastr);
            }
        });
        
    }else{
        alert("Orden repetido, por favor corregir");
    }
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