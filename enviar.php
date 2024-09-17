<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitizar y validar las entradas del formulario
    $anime = htmlspecialchars($_POST['anime']);
    $comida = htmlspecialchars($_POST['comida']);
    $color = htmlspecialchars($_POST['color']);
    $peliculas = htmlspecialchars($_POST['peliculas']);
    $videos = htmlspecialchars($_POST['videos']);

    // Dirección de correo electrónico a la que se enviarán las respuestas
    $to = "poncejesusalonso@gmail.com";
    $subject = "Encuesta de Preferencias";

    // Cuerpo del correo
    $message = "Anime favorito: $anime\n";
    $message .= "Comida favorita: $comida\n";
    $message .= "Color favorito: $color\n";
    $message .= "Tipo de películas que gustan: $peliculas\n";
    $message .= "Clase de videos que gustan: $videos\n";

    // Encabezados del correo
    $headers = "From: no-reply@tudominio.com\r\n";
    $headers .= "Reply-To: no-reply@tudominio.com\r\n";

    // Enviar el correo
    if (mail($to, $subject, $message, $headers)) {
        echo "Gracias por tu respuesta. ¡Tu encuesta ha sido enviada!";
    } else {
        echo "Lo sentimos, hubo un problema al enviar el correo.";
    }
} else {
    echo "Método de solicitud no permitido.";
}
?>
