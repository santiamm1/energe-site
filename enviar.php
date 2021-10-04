<?php

$nombre= $_POST ['nombre'];
$correo= $_POST ['correo'];
$telefono= $_POST ['telefono'];
$mensaje= $_POST ['mensaje'];

$destinatario = "smolina@msa-projects.com";
$asunto = "Contacto desde web Energe";

$carta = "De; $nombre \n";
$carta.= "Correo; $correo \n";
$carta.= "Teléfono; $telefono \n";
$carta.= "Mensaje; $mensaje";


mail($destinatario, $asunto, $carta);
header('Location:pages/Agradecimiento.html')

?>