var tipoUsuario;
var nombreUsuario;
var contrasena;
var contrasena2;
var correo;
var correo2;
var nombre;
var tipoDoc;
var documento;
var telefono;
var fax;
var direccion;
var pais;
var depto;
var ciudad;
var comentario;
var validos = " abcdefghijklmnopqrstuvwxyz0123456789áéíóú";

$(document).ready(function(){
    $("#registration_btn").click(function(e){validarCampos(e)});
});

function validar_email(valor)
    {
        var filter = /[\w-\.]{3,}@([\w-]{2,}\.)*([\w-]{2,}\.)[\w-]{2,4}/;
        if(filter.test(valor))
            return true;
        else
            return false;
    } 

function validaUsuario(campo) { 
   var letra; 
   var userValidos = "abcdefghijklmnopqrstuvwxyz0123456789";
   var bien = true; 
   for (var i=0; i<campo.length; i++) { 
        letra=campo.charAt(i).toLowerCase() 
        if (userValidos.indexOf(letra) == -1){bien=false;}; 
   }
   return bien;
} 
function soloLetrasYNum(campo) { 
   var letra; 
   var bien = true; 
   for (var i=0; i<campo.length; i++) { 
        letra=campo.charAt(i).toLowerCase() 
        if (validos.indexOf(letra) == -1){bien=false;}; 
   }
   return bien;
} 

function validarCampos(e){
    
    //captura de datos
    tipoUsuario = $("#jform_group_id option:selected").val();
    nombreUsuario = $("#jform_username").val();
    contrasena = $("#jform_password1").val();
    contrasena2 = $("#jform_password2").val();
    correo = $("#jform_email1").val();
    correo2 = $("#jform_email2").val();
    nombre = $("#jform_name").val();
    tipoDoc = $("#jform_documenttype option:selected").val();
    documento = $("#jform_document").val();
    telefono = $("#jform_phone").val();
    fax = $("#jform_fax").val();
    direccion = $("#jform_address").val();
    pais = $("#jform_country").val();
    depto = $("#jform_state").val();
    ciudad = $("#jform_city").val();
    comentario = $("#jform_comment").val();
    if(nombreUsuario.length < 8){
        alert("el nombre del usuario debe ser de almenos 8 caracteres");
        return false;
    }else{
        if(!validaUsuario(nombreUsuario)){
            alert("El nombre de Usuario debe contener solo Letras y Numeros");
            e.preventDefault();
        }
    }
    if(contrasena != contrasena2){
        alert("Las contraseñas deben ser iguales");
            e.preventDefault();
    }else{
        if(contrasena.length < 6){
            alert("La contraseña debe ser de almenos 6 caracteres");
            e.preventDefault();
        }else{
            if(!soloLetrasYNum(contrasena)){
                alert("La contraseña debe tener letras y/o números");
            e.preventDefault();
            }
        }
    }   
    if(correo != correo2){
        alert("Los correos deben ser iguales.");
            e.preventDefault();
    }
    if(!soloLetrasYNum(nombre)){
        alert("El nombre o  razón social sólo debe tener letras y/o números");
        e.preventDefault();
    }
    if(documento.length == 0){
        alert("Verifique su documento de identificación");
            e.preventDefault();
    }
    if(telefono.length < 6){
        alert("El número telefónico debe ser de almenos 7 caracteres");
            e.preventDefault();
    }
    if(direccion.length < 5){
        alert("La dirección debe ser de almenos 5 caracteres");
            e.preventDefault();
    }
    if(pais.length < 1){
        alert("Seleccione el País");
            e.preventDefault();
    }
    if(depto.length < 1){
        alert("Seleccione el Departamento");
            e.preventDefault();
    }
    if(ciudad.length < 1){
        alert("Seleccione la Ciudad");
            e.preventDefault();
    }
    if(comentario.length > 140){
        alert("El comentario no debe exceder 140 caracteres, actualmente ha escrito :"+comentario.length);
            e.preventDefault();
    }
}