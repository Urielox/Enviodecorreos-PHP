<!DOCTYPE html>

<html lang="en">
<head>

     <meta charset="UTF-8">
     <title>Help Desk</title>
     <link rel="stylesheet" href="helpdesk.css">
     <style>
     label{
     width: 50px;
     display: inline-block;}
</style>
</head>
<body style="background-color:rgba(30, 189, 249);">

    <h2> HELP DESK </h2>
    <form class="form" method="post" action="pagina2.php">
    <label for="name">Nombre:</label><br>
    <input type="text" name="nombre" id="nombre"><br>
    <label for="email">Asunto:</label><br>
    <input type="text" name="asunto" id="asunto"><br>
    <label for="mensaje">Descripción: </label><br>
    <textarea name="mensaje" id="mensaje" cols="25" rows="5"></textarea><br>
    <input type="submit"><br>
</form>
</body>
</html>