<!DOCTYPE html>

<html lang="en">
<head>

     <meta charset="UTF-8">
     <title>FAQ</title>
     <link rel="stylesheet" href="helpdesk.css">
     <style>
     label{
     width: 50px;
     display: inline-block;}
</style>
</head>
<body style="background-color:rgba(30, 189, 249);">

    <h2> FAQ </h2>
    <form class="form" method="post" action="pagina4.php">
    <label for="name">Nombre del solucionador:</label><br>
    <input type="text" name="nombre" id="nombre"><br>
    <label for="email">Pregunta:</label><br>
    <input type="text" name="asunto" id="asunto"><br>
    <label for="mensaje">Respuesta: </label><br>
    <textarea name="mensaje" id="mensaje" cols="25" rows="5"></textarea><br>
    <input type="submit"><br>
</form>
</body>
</html>