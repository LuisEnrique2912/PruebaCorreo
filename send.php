<?php

    $destinatario = 'luis.deanda2912@gmail.com';

    $title = $_POST['title'];
    $mail = $_POST['email'];
    $mensaje = $_POST['message'];
    
    $header = "Enviado desde la página oficial de Grupo TMM";
    
    $mensajeCompleto = $mensaje . "\nAtentamente: " . $mail;
    
    mail($destinatario, $asunto, $mensajeCompleto, $header);
    
    header("Location:index.html");
?>
