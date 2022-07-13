<?php 
$id = $_GET['id'];
require_once("../lib/functions.php");
$resultado = get_alumno($connect, $id);
$alumno = mysqli_fetch_array ($resultado);
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

    <small><a href="../alumnos/">regresar</a></small>
    <form action="update.php" method ="post">
        <class = "elem-group">
            <input type="hidden" id="id" name="id" value ="<?php echo $alumno['id']; ?>"> <br>
        <label for="nombre">nombre</label> <br>
        <input type= "text" id="nombre" name= "nombre" placeholder="Nombre" value ="<?php echo $alumno['nombre']; ?>"><br>
        <label for="apellido">apellido</label> <br>
        <input type= "text" id="apellido" name= "apellido" placeholder="apellido" value ="<?php echo $alumno['apellido']; ?>" ><br>
        <label for="telefono">telefono</label> <br>
        <input type= "text" id="telefono" name= "telefono " placeholder="telefono" value ="<?php echo $alumno['telefono']; ?>"> <br>
        <label for="correo">correo</label> <br>
        <input type= "text" id="correo" name= "correo" placeholder="correo" value ="<?php echo $alumno['correo']; ?>"><br>
        <label for ="licenciatura">licenciatura</label> <br>
        <input type="text" id="licenciatura" name= "licenciatura" placeholder="licenciatura" value ="<?php echo $alumno['licenciatura']; ?>"> <br>
        <label for="cuatrimestre">cuatrimestre</label> <br>
        <input type="text" id="cuatrimestre" name= "cuatrimestre" placeholder="cuatrimestre" value ="<?php echo $alumno['cuatrimestre']; ?>"> <br>
        <input type= "submit"><br>


    </form>
</body>
</html>