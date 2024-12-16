<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$to = "kibito172@gmail.com"; // Reemplaza con tu dirección de correo electrónico
$subject = "Test Email";
$message = "Este es un correo de prueba desde Postfix.";
$headers = "From: no-reply@localhost.local";

if (mail($to, $subject, $message, $headers)) {
    echo "Correo enviado con éxito.";
} else {
    echo "Error al enviar correo.";
}
?>
</body>
</html>