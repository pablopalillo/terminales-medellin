$('document').ready(function(){
    $('#sendSrvMail').click(function(){
        var name = $("#rsvName").val();
        var tipid = $("#tRsv").val();
        var nit = $("#rsvId").val();
        var nomcont = $("#rsvResp").val();
        var phone = $("#rsvPhone").val();
        var cell = $("#rsvCell").val();
        var mail = $("#rsvMail").val();
        var adv = $("#tRsvEvent").val();
        var date = $("#rsvDate").val();
        var horaIni = $("#rsvHoraInicio").val();
        var horaFin = $("#rsvHoraFin").val();
        var qtyAsist = $("#rsvAsist").val();
        var helps = "";
        if($("#sound").is(':checked')){
            helps = helps+"Sonido ";
        }
        if($("#beam").is(':checked')){
            helps = helps+"Video Beam ";
        }
        var strMessage = false;
        if(name.length > 1){
            if(tipid.length > 1){
                if(nit.length > 1){
                    if(nomcont.length > 1){
                        if(phone.length > 1){
                            if(cell.length > 1){
                                if(mail.length > 1){
                                    if(adv.length > 1){
                                        if(date.length > 1){
                                            if(horaIni.length > 1){
                                                if(horaFin.length > 1){
                                                    if(qtyAsist.length > 0){
                                                        var body = "Nombre/Razon Social: "+name+" \n "
                                                            +"Documento: "+tipid+" \n "
                                                            +"Numero de Documento: "+nit+" \n "
                                                            +"Nombre de Contacto: "+nomcont+" \n "
                                                            +"Teléfono Contacto: "+phone+" \n "
                                                            +"Celular Contacto: "+cell+" \n "
                                                            +"E-mail Contacto: "+mail+" \n "
                                                            +"Hora de Inicio: "+horaIni+" \n "
                                                            +"Hora de Fin: "+horaFin+" \n "
                                                            +"Tipo: "+adv+" \n "
                                                            +"Cantidad de asistentes: "+qtyAsist+" \n "
                                                            +"Ayudas Audiovisuales: "+helps+" \n ";
                                                        _send(mail, 'Solicitud de Reserva Auditorio', body);
                                                    }else{
                                                        var strMessage = "Verificar la Cantidad de Asistentes";
                                                    }
                                                }else{
                                                    var strMessage = "Verificar la Hora de Finalización";
                                                }
                                            }else{
                                                var strMessage = "Verificar Hora de Inicio";
                                            }
                                        }else{
                                            var strMessage = "Verificar la fecha";
                                        }
                                    }else{
                                        var strMessage = "Verificar el Tipo de Evento";
                                    }
                                }else{
                                    var strMessage = "Verificar el Mail de Contacto";
                                }
                            }else{
                                var strMessage = "Verificar el Celular de Contacto";
                            }
                        }else{
                            var strMessage = "Verificar el Teléfono de Contacto";
                        }
                    }else{
                        var strMessage = "Verificar el Nombre de Contacto";
                    }
                }else{
                    var strMessage = "Verificar el Número de Itentificación";
                }
            }else{
                var strMessage = "Verificar el Tipo de Identificación";
            }
        }else{
            var strMessage = "Verificar Nombre/Razon Social";
        }
        if(false != strMessage){
            alert(strMessage);
        }
    });
});

function _send(from, subject, body){
    $.ajax({
        type: "POST",
        dataType: "text",
        data: { option: 'com_mail', subject: subject, body: body },
        url: "index.php",
        success: function( text ) {
            if("true" == text){
                alert('La solicitud se envió correctamente');
                _clear();
            } else {
                alert('Error tratando de enviar la solicitud');
            }
        }
    });
}

function _clear(){
    $("#rsvName").val('');
    $("#rsvId").val('');
    $("#rsvResp").val('');
    $("#rsvPhone").val('');
    $("#rsvCell").val('');
    $("#rsvMail").val('');
    $("#rsvDate").val('');
    $("#rsvHoraInicio").val('');
    $("#rsvHoraFin").val('');
    $("#rsvAsist").val('');
}