<?php
if (isset($_POST['enviar'])) {
    $to = 'tonitotanote1@gmail.com'; // Dirección de correo electrónico de destino
    $subject = $_POST['subject'];
    $name = $_POST['name'];
    $email = $_POST['mail'];
    $message = $_POST['message'];

    // Formatear el contenido del correo
    $email_message = "Nombre: $name\n";
    $email_message .= "E-mail: $email\n";
    $email_message .= "Asunto: $subject\n";
    $email_message .= "Mensaje: $message\n";

    // Ajusta el remitente del correo (puede variar según la configuración del servidor)
    $headers = 'From: ' . $email . "\r\n" .
        'Reply-To: ' . $email . "\r\n" .
        'X-Mailer: PHP/' . phpversion();

    // Intentar enviar el correo
    if (@mail($to, $subject, $email_message, $headers)) {
        echo '<p>Mensaje enviado correctamente. Gracias por contactarnos.</p>';
    } else {
        echo '<p>Hubo un error al enviar el mensaje. Por favor, inténtalo de nuevo más tarde.</p>';
    }
}
?>
