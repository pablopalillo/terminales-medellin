$('document').ready(function(){
    $('#sendAdvertiseMail').click(function(){
        var name = $("#strNombre").val();
        var tipid = $("#strTipId").val();
        var nit = $("#strNit").val();
        var nomcont = $("#strNomCont").val();
        var phone = $("#strPhone").val();
        var cell = $("#strCell").val();
        var mail = $("#strMail").val();
        var adv = $("#strAdv").val();
        var descrip = $("#strDescription").val();
        var freq = $("#strFreq").val();
        var time = $("#strTime").val();
        var strMessage = false;
        if(name.length > 1){
            if(tipid.length > 1){
                if(nit.length > 1){
                    if(nomcont.length > 1){
                        if(phone.length > 1){
                            if(cell.length > 1){
                                if(mail.length > 1){
                                    if(adv.length > 1){
                                        if(freq.length > 1){
                                            if(time.length > 1){
                                                if(descrip.length > 1){
                                                    var body = "Nombre/Razon Social: "+name+" \n "
                                                        +"Documento: "+tipid+" \n "
                                                        +"Numero de Documento: "+nit+" \n "
                                                        +"Nombre de Contacto: "+nomcont+" \n "
                                                        +"Teléfono Contacto: "+phone+" \n "
                                                        +"Celular Contacto: "+cell+" \n "
                                                        +"E-mail Contacto: "+mail+" \n "
                                                        +"Frecuencia: "+freq+" \n "
                                                        +"Tiempo: "+time+" \n "
                                                        +"Tipo: "+adv+" \n "
                                                        +"Descripción: "+descrip+" \n ";
                                                    _send(mail, 'Solicitud de Pauta', body);
                                                }else{
                                                    var strMessage = "Verificar la Descripción de la Pauta";
                                                }
                                            }else{
                                                var strMessage = "Verificar el tiempo de la Pauta";
                                            }
                                        }else{
                                            var strMessage = "Verificar la frecuencia de la Pauta";
                                        }
                                    }else{
                                        var strMessage = "Verificar el Tipo de Pauta";
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
    $("#strNombre").val('');
    $("#strNit").val('');
    $("#strNomCont").val('');
    $("#strPhone").val('');
    $("#strCell").val('');
    $("#strMail").val('');
    $("#strDescription").val('');
    $("#strFreq").val('');
    $("#strTime").val('');
}