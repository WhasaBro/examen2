<?php 
$id = $_GET['id'];
require_once("../lib/functions.php");
$resultado = get_profesore($connect, $id);
$profesore = mysqli_fetch_array ($resultado);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDITAR ALUMNOS</title>
</head>
<body>

<h1>QUE DESEA EDITAR</h1>

    <small><a href="../profesores/">regresar</a></small>
    <form action="eliminar.php" method ="post">
        <class = "elem-group">
            <input type="hidden" id="id" name="id" value ="<?php echo $profesore['id']; ?>"> <br>
        <label for="nombre">nombre</label> <br>
        <input type= "text" id="nombre" name= "nombre" placeholder="Nombre" value ="<?php echo $profesore['nombre']; ?>"><br>
        <label for="apellido">apellido</label> <br>
        <input type= "text" id="apellido" name= "apellido" placeholder="apellido" value ="<?php echo $profesore['apellido']; ?>" ><br>
        <label for="telefono">telefono</label> <br>
        <input type= "text" id="telefono" name= "telefono " placeholder="telefono" value ="<?php echo $profesore['telefono']; ?>"> <br>
        <label for="correo">correo</label> <br>
        <input type= "text" id="correo" name= "correo" placeholder="correo" value ="<?php echo $profesore['correo']; ?>"><br>
        
        <input type= "submit"><br>


    </form>
</body>
</html>