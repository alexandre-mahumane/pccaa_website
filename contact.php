<?php
ob_start();
ini_set('smtp_port', 587);

if($_POST) {

    $visitor_name = "";
    $visitor_email = "";
    $visitor_message = "";
    $email_body = "<div>";
     
    if(isset($_POST['visitor_name'])) {
        $visitor_name = filter_var($_POST['visitor_name'], FILTER_UNSAFE_RAW);
        $email_body .= "<div> 
<label><b>Nome:</b></label>&nbsp;<span>".$visitor_name."</span> 
</div>";
    }

    if(isset($_POST['visitor_email'])) {
        $visitor_email = str_replace(array("\r", "\n", "%0a", "%0d"), '', $_POST['visitor_email']);
        $visitor_email = filter_var($visitor_email, FILTER_VALIDATE_EMAIL);
        $email_body .= "<div> 
<label><b>E-mail:</b></label>&nbsp;<span>".$visitor_email."</span> 
</div>";
    }
     
    if(isset($_POST['visitor_message'])) {
        $visitor_message = htmlspecialchars($_POST['visitor_message']);
        $email_body .= "<div> 
<label><b>Menssagem:</b></label> 
<div>".$visitor_message."</div> 
</div>";
    }
     
    // if($concerned_department == "billing") {
    //     $recipient = "billing@domain.com";
    // }
    // else if($concerned_department == "marketing") {
    //     $recipient = "marketing@domain.com";
    // }
    // else if($concerned_department == "technical support") {
    //     $recipient = "tech.support@domain.com";
    // }
    // else {
    //     $recipient = "contact@domain.com";
    // }

    $recipient = "info@pccaa.gov.mz";
    $email_title = "Mensagem de " . $visitor_name;
    $email_body .= "</div>";
    $headers  = 'MIME-Version: 1.0' . "\r\n"
    .'Content-type: text/html; charset=utf-8' . "\r\n"
    .'From: ' . $visitor_email . "\r\n";
     
    if(mail($recipient, $email_title, $email_body, $headers)) {
        
        echo "<p>Obrigado por enviar-nos está mensagem, $visitor_name. Responderemos-lhe dentro de 24 horas.</p>";
        header('refresh:3; url=https://www.pccaa.gov.mz');

    } else {
        echo '<p>Lamentamos, volte a tentar mais tarde!</p>';
    }
     
} else {
    echo '<p>Erro - Abnormal</p>';
}
?>