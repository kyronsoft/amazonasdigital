<?php
$to         = 'contacto@amazonasdigital.co';
$subject    = 'Contacto desde página web';
$message    = $_POST['mensaje'];
$headers    = array(
    'From' => $_POST['email'],
    'Reply-To' => 'javier.ruiz@kyronsoft.com',
    'X-Mailer' => 'PHP/' . phpversion()
);

mail($to, $subject, $message, $headers);
header('location: index.html');
