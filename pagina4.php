<?php
$nombre = $_POST['nombre'];
$asunto = $_POST['asunto'];
$mensaje = $_POST['mensaje'];

if(mail('aeruu09@gmail.com', $asunto, $mensaje, $nombre)){
	echo "$nombre","asunto","mensaje";
}else{
	echo "Envio fallido";
}
?>
<body style="background-color:rgba(30, 189, 249);">
<br><a href="https://persecare.000webhostapp.com/menuprincipal.php">REGRESAR</a>