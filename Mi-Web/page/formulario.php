<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Recoge los datos del formulario
    $nombre = $_POST["nombre"];
    $tipoDocumento = $_POST["tipoDocumento"];
    $identificacion = $_POST["Identificacion"];
    $correo = $_POST["correo"];
    $telefono = $_POST["telefono"];
    $direccion = $_POST["Direccion"];
    $mensaje = $_POST["mensaje"];
    $fechaAtencion = $_POST["fechaAtencion"];

    // Configura la dirección de correo del destinatario
    $destinatario = "Adr-Tecnology@Outlook.com"; // Reemplaza esto con tu dirección de correo electrónico

    // Configura el asunto del correo
    $asunto = "Solicitud de Soporte Técnico de $nombre";

    // Construye el contenido del correo
    $contenido = "Nombre: $nombre\n";
    $contenido .= "Tipo de Documento: $tipoDocumento\n";
    $contenido .= "Identificación: $identificacion\n";
    $contenido .= "Correo: $correo\n";
    $contenido .= "Teléfono: $telefono\n";
    $contenido .= "Dirección: $direccion\n";
    $contenido .= "Fecha y Hora de Atención: $fechaAtencion\n";
    $contenido .= "Mensaje:\n$mensaje";

    // Envía el correo electrónico
    mail($destinatario, $asunto, $contenido);

    // Redirige a una página de confirmación

    exit();
}
?>

