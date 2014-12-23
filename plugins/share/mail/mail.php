<?php

// no direct access
defined('_JEXEC') or die;
?>
<div class="share_mail_container">
    <a href="#" id="share_mail_a">
        <div style="float: left"><img src="images/share_mail.png" /></div>
        <div style="float: left; padding-top: 2px; padding-left: 2px;">Compartir por E-mail</div>
    </a>
</div>
<div id="share_email" class="hiddenContent">
    <div style="margin-bottom: 5px; height: 20px;"><div style="width:100px; float: left;">De :<span style="color:#ccc;"> (Nombre)</span></div>
        <div style="width:160px; float: left;">
            <input id="share_from" type="text" />
        </div>
    </div>
    <div style="margin-bottom: 5px; height: 20px;"><div style="width:100px; float: left;">Para :<span style="color:#ccc;"> (e-mail)</span></div>
        <div style="width:160px; float: left;">
            <input id="share_to" type="text" />
        </div>
    </div>
    <div style="margin-bottom: 5px; height: 20px;"><div style="width:100px; float: left;"></div>
        <div style="width:160px; float: left;">
            <input id="share_send_btn" type="button" value="Enviar" />
        </div>
    </div>
    <div style="margin-bottom: 5px; height: 20px;" id="share_email_response">
        
    </div>
</div>