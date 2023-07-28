<?php
// Capturar los datos del formulario
$nombre = $_POST['nombre'];
$email = $_POST['email'];
$fecha = $_POST['fecha'];
$hora = $_POST['hora'];

// Mensaje para el correo electrónico
$mensaje = "Se ha realizado una nueva cita:\n";
$mensaje .= "Nombre: $nombre\n";
$mensaje .= "Email: $email\n";
$mensaje .= "Fecha: $fecha\n";
$mensaje .= "Hora: $hora\n";

// Enviar el correo a tu dirección
$destinatario = 'tu_correo@example.com'; // Coloca aquí tu dirección de correo
$asunto = 'Nueva cita';
$headers = 'From: ' . $email . "\r\n";

mail($destinatario, $asunto, $mensaje, $headers);

// Mensaje de confirmación para el cliente
$confirmacion = "Gracias por reservar tu cita, $nombre.\n";
$confirmacion .= "Fecha: $fecha\n";
$confirmacion .= "Hora: $hora\n";
$confirmacion .= "Nos pondremos en contacto contigo pronto para confirmar la cita.";

mail($email, 'Confirmación de cita', $confirmacion);

// Redirigir a una página de confirmación
header('Location: confirmacion.html');
?>
