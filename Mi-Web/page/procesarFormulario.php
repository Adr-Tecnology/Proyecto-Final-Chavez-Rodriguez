<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = $_POST["nombre"];
    $correo = $_POST["correo"];
    $telefono = $_POST["telefono"];
    $fechaAtencion = $_POST["fechaAtencion"];
    $mensaje = $_POST["mensaje"];

    $destinatario = "Adr-Tecnology@Outlook.com"; // Reemplaza esto con tu dirección de correo electrónico

    $asunto = "Solicitud de Soporte Técnico de $nombre";

    $contenido = "Nombre: $nombre\n";
    $contenido .= "Correo: $correo\n";
    $contenido .= "Teléfono: $telefono\n";
    $contenido .= "Fecha y Hora de Atención: $fechaAtencion\n";
    $contenido .= "Mensaje:\n$mensaje";

    mail($destinatario, $asunto, $contenido);

    // Redirige a una página de confirmación
    header("Location: confirmacion.html");
    exit();
}
?>
