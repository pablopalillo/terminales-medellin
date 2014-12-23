$('document').ready(function(){
    $('#pqrSubmitBtn').click(function(){
        if($('#pqrNameLastname').val() == ""){
            alert('Por favor revisar el campo Nombre y Apellido');
            return false;
        }
        if($('#pqrId').val() == ""){
            alert('Por favor revisar el campo Cédula');
            return false;
        }
        if($('#pqrAdress').val() == ""){
            alert('Por favor revisar el campo Dirección');
            return false;
        }
        if($('#pqrCity').val() == ""){
            alert('Por favor revisar el campo Ciudad');
            return false;
        }
        if($('#pqrPhone').val() == ""){
            alert('Por favor revisar el campo Teléfono');
            return false;
        }
        if($('#pqrCellphone').val() == ""){
            alert('Por favor revisar el campo Celular');
            return false;
        }
        if($('#pqrMail').val() == ""){
            alert('Por favor revisar el campo E-mail');
            return false;
        }
        if($('#tPqr').val() == "tPqrDefault"){
            alert('Por favor revisar el campo Tipo de PQR');
            return false;
        }
        if($('#sPqr').val() == "sPqrDefault"){
            alert('Por favor revisar el campo Lugar PQR');
            return false;
        }
        if($('#pqrComment').val() == ""){
            alert('Por favor revisar el campo Comentarios');
            return false;
        }
        if($('#pqrService').val() == ""){
            alert('Por favor revisar el Nivel de Satisfacción de Servicio ');
            return false;
        }
    });
});