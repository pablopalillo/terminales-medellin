/* 
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

$(document).ready(function(){
$("#sendAdvertiseMail").click(function(){
var name = $("#strNombre").val();
var tipid = $("#strTipId").val();
var nit = $("#strNit").val();
var nomcont = $("#strNomCont").val();
var phone = $("#strPhone").val();
var fax = $("#strCell").val();
var mail = $("#strMail").val();
var adv = $("#strAdv").val();
var subject = $("#strComentario").val();
if ((name.length < 1) | (tipid.length < 1) | (nit.length < 1) | (nomcont.length < 1) | (phone.length < 1) | (fax.length < 1) | (mail.length < 1) | (adv.length < 1) | (subject.length < 1)){
    alert("LLenar todos los campos obligatorios");
}else{
    var datastr = 'Nombre=' + name + "\n" + 'Tipo de Identificación=' + tipid + " \n" + 'Nit=' + nit + " \n" + 'Nombre De Contacto=' + nomcont + " \n" + 'Telefono De Contacto=' + phone + " \n" + 'Celular De Contacto=' + fax + " \n" + 'Mail De Contacto=' + mail + " \n" + 'Tipo De Pauta=' + adv + " \n" + 'Subject=' + subject;
    sendAdvertise(datastr);
}
return false;
});

$("#sendSrvMail").click(function(){
var name = $("#rsvName").val();
var tId = $("#tRsv").val();
var numberId = $("#rsvId").val();
var resp = $("#rsvResp").val();
var phone = $("#rsvPhone").val();
var cell = $("#rsvCell").val();
var mail = $("#rsvMail").val();
var tevent = $("#tRsvEvent").val();
var date = $("#rsvDate").val();
var hstart = $("#rsvHoraInicio").val();
var hend = $("#rsvHoraFin").val();
var asist = $("#rsvAsist").val();
if ((name.length < 1) | (tId.length < 1) | (numberId.length < 1) | (resp.length < 1) | (phone.length < 1) | (cell.length < 1) | (mail.length < 1) | (tevent.length < 1)| (date.length < 1)| (hstart.length < 1)| (hend.length < 1)| (asist.length < 1)){
    alert("LLenar todos los campos obligatorios");
}else{
    if($("#sound").is(':checked') && $("#beam").is(':checked')){
        var datastr = 'Nombre=' + name + " \n" + 'Tipo Id=' + tId + " \n" + 'Número=' + numberId + " \n" + 'Responsable=' + resp + " \n" + 'Telefono=' + phone + " \n" + 'Celular=' + cell + " \n" + 'Tipo de Evento=' + tevent + " \n" + 'fecha Evento=' + date + " \n" + 'Hora de Inicio=' + hstart + " \n" + 'Hora de Fin=' + hend + " \n" + 'Número Asistentes=' + asist + " \n" + 'Ayudas Audiovisuales=' + 'sonido y Videobeam';
        sendAdvertiseRsv(datastr);
     }else{
        if($("#sound").is(':checked')){
            var datastr = 'Nombre=' + name + " \n"+ 'Tipo Id=' + tId + " \n"+ 'Número=' + numberId + " \n" + 'Responsable=' + resp + " \n" + 'Telefono=' + phone + " \n" + 'Celular=' + cell + " \n" + 'Tipo de Evento=' + tevent + " \n" + 'fecha Evento=' + date + " \n" + 'Hora de Inicio=' + hstart + " \n" + 'Hora de Fin=' + hend + " \n" + 'Número Asistentes=' + asist + " \n" + 'Ayudas Audiovisuales=' + 'sonido';
            sendAdvertiseRsv(datastr);
         }else{
            if($("#beam").is(':checked')){
                var datastr = 'Nombre=' + name + " \n" + 'Tipo Id=' + tId + " \n" + 'Número=' + numberId + " \n" + 'Responsable=' + resp + " \n" + 'Telefono=' + phone + " \n" + 'Celular=' + cell + " \n" + 'Tipo de Evento=' + tevent + " \n" + 'fecha Evento=' + date + " \n" + 'Hora de Inicio=' + hstart + " \n" + 'Hora de Fin=' + hend + " \n" + 'Número Asistentes=' + asist + " \n" + 'Ayudas Audiovisuales=' + 'videobeam';
                sendAdvertiseRsv(datastr);
            }else{
                var datastr = 'Nombre=' + name + " \n" + 'Tipo Id=' + tId + " \n" + 'Número=' + numberId + " \n" + 'Responsable=' + resp + " \n" + 'Telefono=' + phone + " \n" + 'Celular=' + cell + " \n" + 'Tipo de Evento=' + tevent + " \n" + 'fecha Evento=' + date + " \n" + 'Hora de Inicio=' + hstart + " \n" + 'Hora de Fin=' + hend + " \n" + 'Número Asistentes=' + asist + " \n" + 'Ayudas Audiovisuales=' + 'no';
                sendAdvertiseRsv(datastr);
             }
        }
    }
    
}
return false;
});

//Enviar correo de solicitud de arriendo de inmueble 
$("#sendRentMail").click(function(){
    //obtenemos los valores de las variables
    var soldate = $("#fechaSol").val();
    var to = "alexander.hinestroza@fuziona.net";
    var name = $("#solName").val();
    var tipoDoc = $("#tipoDoc").val();
    var docNumber = $("#docNumber").val();
    var address = $("#address").val();
    var phone = $("#phone").val();
    var solMail = $("#solMail").val();
    var placeInfo = $("#placeInfo").val();
    var reasonWhy = $("#reasonWhy").val();
    if ((soldate.length < 1) | (name.length < 1) | (tipoDoc.length < 1) | (docNumber.length < 1) | (address.length < 1) | (phone.length < 1) | (solMail.length < 1) | (placeInfo.length < 1) | (reasonWhy.length < 1)){
        alert("LLenar todos los campos obligatorios (*)");
    }else{
        var datastr = "Acontinuación se encuentran los datos de solicitud de arriendo de un inmueble."+"\n"+
            'Nombre empresa solicitante: ' + name +"\n"+ 'Tipo documento: ' + tipoDoc +"\n"+ 'Número documento: ' + docNumber +"\n"+ 'Dirección: ' + address +"\n"+ 'Teléfono: ' + phone +"\n"+ 'Mail de contacto: ' + address +"\n"+ 'Lugar: ' + placeInfo +"\n"+ 'Motivo: ' + reasonWhy;
        sendRentMail(datastr,to,soldate,name,tipoDoc,docNumber,address,phone,solMail,placeInfo,reasonWhy);
    }
    return false;
});


});
function sendAdvertise(datastr){
    $.ajax({
        type: "POST",
        url: "index.php",
        data: {option:'com_mail', recipient:'diego.calle@fuziona.net', subject:'Paute Aqui', body: datastr }
    }).done(function(response){
        alert(response);
    });
}

function sendAdvertiseRsv(datastr){
    $.ajax({
        type: "POST",
        url: "index.php",
        data: {option:'com_mail', recipient:'diego.calle@fuziona.net', subject:'Reserva Auditorio', body: datastr }
    }).done(function(response){
        if(response=="true"){
            StorersvData(datastr);
        }
    });
}

function sendRentMail(datastr,mail,fechasolicitud,nombre,tipoDocu,numDocu,direccion,telefono,correo,lugar,motivo){
    $.ajax({
        type: "POST",
        url: "index.php",
        data: {option:'com_mail', recipient: mail, subject:'Solicitud alquiler de inmueble', body: datastr }
    }).done(function(response){
        if(response=="true"){
//            location.href="http://localhost/terminales/index.php?option=com_rent&fecha="+fechasolicitud+"&nombre="+nombre+"&tipoDoc="+tipoDocu+"&numDocu="+numDocu+"&direccion="+direccion+"&telefono="+telefono+"&correo="+correo+"&lugar="+lugar+"&motivo="+motivo;
            StoreRentData(fechasolicitud,nombre,tipoDocu,numDocu,direccion,telefono,correo,lugar,motivo);
        }
    });

}


function StoreRentData(fechasolicitud_,nombre_,tipoDocu_,numDocu_,direccion_,telefono_,correo_,lugar_,motivo_){
    $.ajax({
        type: "POST",
        url: "index.php",
        data: {option:'com_rent', fecha: fechasolicitud_, nombre:nombre_, tipoDoc: tipoDocu_, numDocu: numDocu_, direccion:direccion_, telefono: telefono_, correo: correo_, lugar:lugar_, motivo: motivo_}
    }).done(function(response){
        if(response){
            alert("El registro de su solicitud de alquiler has sido exitoso.");
        }
    });
}
function imposeMaxLength(Object, MaxLen)
{
  return (Object.value.length <= MaxLen);
}

function StorersvData(datastr){
    $.ajax({
        type: "POST",
        url: "index.php",
        data: {option:'com_reservation', answer: datastr}
    }).done(function(response){
        if(response){
            alert("El registro de su solicitud de reserva has sido exitoso.");
        }
    });
}
