<?php 
    $ass = "Form Contact";
    $text = "Name: $first_name $last_name \r\n Email: $email \r\n Phone: $phone";
    $headers = "MIME-Version: 1.1\r\n";
    $headers .= "Content-type: text/plain; charset=UTF-8\r\n";
    $headers .= "From: contato@ricardodn.com.br\r\n";  
    $headers .= "Return-Path: contato@ricardodn.com.br\r\n";  
    $send = mail("ricardodnn1@gmail.com", "$ass", "$text", $headers);
    
    if($send)
        $msg = "Mensagem enviada com sucesso";
    else
        $msg = "A mensagem não pode ser enviada";
?>