<?php
$to = 'marcelorodrigues042006@gmail.com';
$subject = 'Teste de envio de e-mail';
$message = 'Olá, você é programador web?';
$headers = 'From: exemplo@exemplo.com' . "\r\n" .
    'Reply-To: exemplo@exemplo.com';

mail($to, $subject, $message, $headers);

print "Enviado!";
?>

