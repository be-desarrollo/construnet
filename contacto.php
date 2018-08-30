<?php

// ----------- LLAMAR CAMPOS -----------

$nombre = $_POST['nombre'];
$telefono = $_POST['telefono'];
$empresa = $_POST['empresa'];
$email = $_POST['email'];
$ciudad = $_POST['ciudad'];
$asuntocliente = $_POST ['asunto'];
$mensaje = $_POST['mensaje'];


// ----------- DATOS PARA EL CORREO -----------

$destinatario = "contacto@construnet.mx";
$asunto = "Contacto desde nuestra web";

$carta = "De: $nombre \n";
$carta .= "Telefono: $telefono \n";
$carta .= "Empresa: $empresa  \n";
$carta .= "E-mail: $email \n";
$carta .= "Ciudad: $ciudad \n";
$carta .= "Asunto: $asuntocliente  \n";
$carta .= "Mensaje: $mensaje";

// ----------- ENVIO DE MENSAJE -----------

mail($destinatario, $asunto, $carta);
header('Location:mensajeEnvio.html'); // NUEVA HOJA DE MENSAJE ENVIADO


 ?>
