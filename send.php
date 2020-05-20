<?php

    $destinatario = 'luis.deanda@gmail.com';

    $title = $_POST['title'];
    $mail = $_POST['email'];
    $mensaje = $_POST['message'];
    
    $header = "Enviado desde la página oficial de Grupo TMM";
    $header .= "X-Mailer: PHP/" . phpversion() . " \r\n";
    $header .= "Mime-Version: 1.0 \r\n";
    $header .= "Content-Type: text/plain";
    
    $mensajeCompleto .= $mensaje . "\nAtentamente: " . $mail;
    
    mail($destinatario, $asunto, $mensajeCompleto, $header);
    
    header("Location:index.html");
?>
