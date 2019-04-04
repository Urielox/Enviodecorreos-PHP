<?php
$fechar = $_POST['fechar'];
$fechae = $_POST['fechae'];
$nombre = $_POST['nombre'];
$telp = $_POST['telp'];
$nombrec = $_POST['nombrec'];
$telc = $_POST['telc'];
$mensaje = $_POST['mensaje'];
$tipom = $_POST['tipom'];

if(mail('aeruu09@gmail.com', $asunto, $mensaje, $nombre)){
	echo "$fechar","$fechae","$nombre","$telp","$nombrec","$telc","$mensaje","$tipom";
}else{
	echo "Envio fallido";
}
?>
<body style="background-color:rgba(30, 189, 249);">
<br><a href="https://persecare.000webhostapp.com/menuprincipal.php">REGRESAR</a>