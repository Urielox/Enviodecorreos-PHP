<!DOCTYPE html>

<html lang="en">
<head>

     <meta charset="UTF-8">
     <title>Reporte</title>
     <link rel="stylesheet" href="helpdesk.css">
     <style>
     label{
     width: 50px;
     display: inline-block;}
</style>
</head>
<body style="background-color:rgba(30, 189, 249);">

    <h2> REPORTE </h2>
    <form class="form" method="post" action="pagina3.php">
	<label for="name1">Fecha de recepción:</label><br>
    <input type="text" name="fechar" id="fechar"><br>
	<label for="name2">Fecha de entrega:</label><br>
    <input type="text" name="fechae" id="fechae"><br>
    <label for="name3">Nombre del progamador asignado:</label><br>
    <input type="text" name="nombre" id="nombre"><br>
    <label for="email">Numero de telefono del programador:</label><br>
    <input type="text" name="telp" id="telp"><br>
	<label for="name4">Nombre del cliente asignado:</label><br>
    <input type="text" name="nombrec" id="nombrec"><br>
    <label for="email2">Numero de telefono del cliente:</label><br>
    <input type="text" name="telc" id="telc"><br>
    <label for="mensaje">Diagnostico del problema: </label><br>
    <textarea name="mensaje" id="mensaje" cols="25" rows="5"></textarea><br>
	<select name="tipo de mantenimiento" id="tipom">
   <option value="1">Correctivo</option> 
   <option value="2">Preventivo</option> 
   </select>
    <input type="submit"><br>
</form>
</body>
</html>