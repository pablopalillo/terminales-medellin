var body;
var errMessage;
    function armandoForm(){
    $('.armando-form-birth-year').click(function(){
        $(this).val('');
        $(this).css('color', '#000');
    });
     $('.armando-form-birth-year').keydown(function(event) {
        if ( event.keyCode == 46 || event.keyCode == 8 || event.keyCode == 9 || event.keyCode == 27 || event.keyCode == 13 || 
            (event.keyCode == 65 && event.ctrlKey === true) || 
            (event.keyCode >= 35 && event.keyCode <= 39)) {
                 return;
        }
        else {
            if (event.shiftKey || (event.keyCode < 48 || event.keyCode > 57) && (event.keyCode < 96 || event.keyCode > 105 )) {
                event.preventDefault(); 
            }   
        }
    });
    $('.armando-form-clear-btn :last').click(function(){
        clearArmandoForm();
        return false;
    })
    $('.armando-form-send-btn :last').click(function(){
        if(false == validateArmandoForm()){
            alert(errMessage);
        } else {
            $.ajax({
                type: "POST",
                dataType: "text",
                data: { option: 'com_mail', subject: "Nuevo Registro de Armando Paseo", body: body },
                url: "index.php",
                beforeSend: function() {
                    $('.armand-message').html('ENVIANDO TU SOLICITUD...');
                },
                success: function( text ) {
                    $('.armand-message').html('');
                    if("true" == text){
                        alert("Se ha enviado exitosamente");
                        clearArmandoForm();
                    }else{
                        alert("No se ha podido realizar la solicitud");
                    }
                }
            });
        }
        return false;
    })
}

function validateArmandoForm(){
    var ArmandoFormName = $('.armando-form-name :last').val();
    var ArmandoFormGenere = $('.armando-form-genere:checked').val();
    var ArmandoFormAge = $('.armando-form-age :last').val();
    var ArmandoFormBirthYear = $('.armando-form-birth-year :last').val();
    var ArmandoFormBirthMonth = $('.armando-form-birth-month :last').val();
    var ArmandoFormBirthDay = $('.armando-form-birth-day :last').val();
    var ArmandoFormAddress = $('.armando-form-address :last').val();
    var ArmandoFormPhone = $('.armando-form-phone :last').val();
    var ArmandoFormMail = $('.armando-form-mail :last').val();
    var ArmandoFormCity = $('.armando-form-city :last').val();
    var ArmandoFormSchool = $('.armando-form-school :last').val();
    var ArmandoFormGrade = $('.armando-form-grade :last').val();
    var ArmandoFormSports = $('.armando-form-sports :last').val();
    var ArmandoFormGuest = $('.armando-form-guest:checked').val();
    if(undefined != ArmandoFormName && null != ArmandoFormName && 0 != ArmandoFormName.length){
        if(undefined != ArmandoFormGenere && null != ArmandoFormGenere && 0 != ArmandoFormGenere.length){
            if(undefined != ArmandoFormAge && null != ArmandoFormAge && 0 != ArmandoFormAge.length){
                if(undefined != ArmandoFormBirthYear && "AÑO" != ArmandoFormBirthYear && null != ArmandoFormBirthYear && 4 == ArmandoFormBirthYear.length){
                    if(undefined != ArmandoFormBirthMonth && null != ArmandoFormBirthMonth && 0 != ArmandoFormBirthMonth.length){
                        if(undefined != ArmandoFormBirthDay && null != ArmandoFormBirthDay && 0 != ArmandoFormBirthDay.length){
                            if(true){
                                if(undefined != ArmandoFormPhone && null != ArmandoFormPhone && 0 != ArmandoFormPhone.length){
                                    if(true){
                                        if(undefined != ArmandoFormCity && null != ArmandoFormCity && 0 != ArmandoFormCity.length){
                                            if(true){
                                                if(true){
                                                    if(true){
                                                        if(undefined != ArmandoFormGuest && null != ArmandoFormGuest && 0 != ArmandoFormGuest.length){
                                                            body = "Nombre: "+ArmandoFormName+" \n"
                                                                +"Sexo: "+ArmandoFormGenere+" \n"
                                                                +"Edad: "+ArmandoFormAge+" \n"
                                                                +"E-mail: "+ArmandoFormMail+" \n"
                                                                +"Fecha de Nacimiento: "+ArmandoFormBirthYear+"/"+ArmandoFormBirthMonth+"/"+ArmandoFormBirthDay+" \n"
                                                                +"Teléfono: "+ArmandoFormPhone+" \n"
                                                                +"Ciudad: "+ArmandoFormCity+" \n"
                                                                +"Dirección: "+ArmandoFormAddress+" \n"
                                                                +"Colegio: "+ArmandoFormSchool+" \n"
                                                                +"Grado: "+ArmandoFormGrade+" \n"
                                                                +"Deportes: "+ArmandoFormSports+" \n"
                                                                +"Ya ha visitado las terminales? "+ArmandoFormGuest+" \n";
                                                            errMessage = body;
                                                            return true;
                                                        }else{errMessage = "Por favor selecciona si has visitado las Terminales de Transporte Medellín"; return false; }
                                                    }else{errMessage = ""; return false; }
                                                }else{errMessage = ""; return false; }
                                            }else{errMessage = ""; return false; }
                                        }else{errMessage = "Por favor escribe en que ciudad vives"; return false; }
                                    }else{errMessage = "Por favor escribe tu direccion de correo"; return false; }
                                }else{errMessage = "Por favor escribe tu teléfono"; return false; }
                            }else{errMessage = "Por favor escribe tu dirección"; return false; }
                        }else{errMessage = "Por favor escribe tu día de nacimiento"; return false; }
                    }else{errMessage = "Por favor escribe tu mes de nacimiento"; return false; }
                }else{errMessage = "Por favor escribe tu año de nacimiento"; return false; }
            }else{errMessage = "Por favor escribe tu edad"; return false; }
        }else{errMessage = "Por favor selecciona si eres Niño o Niña"; return false; }
    } else {errMessage = "Por favor escribe tu Nombre"; return false; }
}

function clearArmandoForm(){
    $('.armando-form-name :last').val('');
    $('.armando-form-age :last').val('');
    $('.armando-form-birth-year :last').val('');
    $('.armando-form-address :last').val('');
    $('.armando-form-phone :last').val('');
    $('.armando-form-mail :last').val('');
    $('.armando-form-city :last').val('');
    $('.armando-form-school :last').val('');
    $('.armando-form-grade :last').val('');
    $('.armando-form-sports :last').val('');
}