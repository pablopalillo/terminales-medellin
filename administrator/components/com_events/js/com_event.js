/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */


$(document).ready(function(){
    //datepickers
    if($('#start_date').val() != undefined){
        $('#start_date').DatePicker({
            format:'Y/m/d',
            date: new Date(),
            current: new Date(),
            starts: 1,
            position: 'r',
            onBeforeShow: function(){
                    $('#start_date').DatePickerSetDate(new Date(), true);
            },
            onChange: function(formated, dates){
                    $('#start_date').val(formated);
                    $('#start_date').DatePickerHide();
            }
        });
    }
    if($('#finish_date').val() != undefined){
        //datepickers
        $('#finish_date').DatePicker({
           format:'Y/m/d',
           date: new Date(),
           current: new Date(),
           starts: 1,
           position: 'r',
           onBeforeShow: function(){
                   $('#finish_date').DatePickerSetDate(new Date(), true);
           },
           onChange: function(formated, dates){
                   $('#finish_date').val(formated);
                   $('#finish_date').DatePickerHide();
           }
       });
    }
    $('#toolbar-save a:only-child').click(function(){
        //verificamos si es una actualizacion o un nuevo registro
        if($("#task").val() == "saveeventitems"){
            if($("#type").val() != "" && $("#place").val() != "" && $("#public").val() != "" &&
                $("#manager").val() != "" && $("#contac").val() != "" && $("#price").val() != "" &&
                $("#start_date").val() != "" && $("#finish_date").val() != ""){
                if(validarFechas($("#start_date").val(), $("#finish_date").val())){
                    $("#saveEvent_form").submit();
                    return false;
                }else{
                    alert("La fecha inicial debe ser menor o igual a la fecha final del evento");
                    return false;
                }
            }else{
                alert("Dede diligenciar el formulario por completo");
                return false;
            }
        }else{
            if($("#type").val() != "" && $("#place").val() != "" && $("#public").val() != "" &&
                $("#manager").val() != "" && $("#contac").val() != "" && $("#price").val() != "" &&
                $("#start_date").val() != "" && $("#finish_date").val() != ""){
                if(validarFechas($("#start_date").val(), $("#finish_date").val())){
                    $("#editEvent_form").submit();
                    return false;
                }else{
                    alert("La fecha inicial debe ser menor o igual a la fecha final del evento");
                    return false;
                }
            }else{
                alert("Dede diligenciar el formulario por completo");
                return false;
            }
        }
    });
    
    //Evento boton cancelar
    $('#toolbar-cancel a:only-child').click(function(){
        document.location.href = "index.php?option=com_events";
        return false;
    });
    
    //Evento boton editar
    $('#toolbar-edit a:only-child').click(function(){
        if($('input:checkbox:checked').length == 1){
           var idElemento = $('input:checkbox:checked').val();
           document.location.href = "index.php?option=com_events&task=editeventitems&contentId="+idElemento;
           return false;
       } else {
           if($('input:checkbox:checked').length == 0){
               alert('DEBE SELECCIONAR AL MENOS UN ELEMENTO');
               return false;
           } else {
               alert('DEBE SELECCIONAR SOLO UN ELEMENTO');
               return false;
           }
       }
    });
})

/*
 * Validar que la fecha inicial sea menor que la final
 */
function validarFechas(start,finish)
  {
        var dateIni = new Date(start);
        var dateFin= new Date(finish);
//        if (dateFin >= dateIni)
        if (finish >= start)
        {
            return true;
        }
          else
          {
              return false;
          }
  }