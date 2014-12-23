$('document').ready(
    function(){
        $("#share_mail_a").click(function(){
            if($("#share_email").attr('class') == 'showContent'){
                $("#share_email").attr('class', 'hiddenContent');
            } else {
                $("#share_email").attr('class', 'showContent');
            }
            $('#share_email').mouseleave(function(){
                $(this).attr('class', 'hiddenContent');
            })
            return false;
        });
        $("#share_send_btn").click(function(){
            if(ValidarCampos()){
                $.ajax({
                    type: "POST",
                    url: "index.php",
                    beforeSend: function(){
                        $("#share_email_response").replaceWith("<div style='margin-bottom: 5px; height: 20px;' id='share_email_response'><p>Enviando...</p></div>");
                    },
                    data: { 
                        option: "com_mail", 
                        recipient: $("#share_to").val(),
                        subject: $("#share_from").val()+" Te recomienda...",
                        body: "Hola, <strong>"+$("#share_from").val()+"</strong> te ha recomendado el siguiente enlace en el portal de Terminales de Transporte Medellín: "+location.href
                    }
                  }).done(function( response ) {
                    $("#share_email_response").replaceWith("<div style='margin-bottom: 5px; height: 20px; border-top: solid 2px #425FFF; border-bottom: solid 2px #425FFF; background-color:#758AFF; color:#fff; padding-left:10px; padding-top:5px; font-weight:bold;' id='share_email_response'>El correo ha sido enviado</div>");
                    setTimeout(function(){$("#share_email").attr('class', 'hiddenContent')}, 4000);
                  });
        } else {
            $("#share_email_response").replaceWith("<div style='margin-bottom: 5px; height: 20px;' id='share_email_response'>Campo inválido</div>");
        }
    });
});

function ValidarCampos(){
    var resp = true;
    var strFrom = $("#strFrom").val();
    var strTo = $("#strTo").val();
    var strMss = $("#strMss").val();
    return resp;
}
    