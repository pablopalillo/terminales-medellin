<?php
if(JRequest::getVar('subject', false) && JRequest::getVar('body', false)){
    
    $mail = JFactory::getMailer();
    $mail->addRecipient(JRequest::getVar('recipient', 'informacion@terminalesmedellin.com'));
    $mail->setSubject(JRequest::getVar('subject'));
    $mail->setBody(JRequest::getVar('body', false));

    echo $mail->Send() ? "true" : "false"; exit;
} else {
    echo "false"; exit;
}
?>
