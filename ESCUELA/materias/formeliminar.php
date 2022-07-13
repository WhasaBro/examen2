<?php 
$id = $_GET['id'];
require_once("../lib/functions.php");
$resultado = get_materia($connect, $id);
$materia = mysqli_fetch_array ($resultado);
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

<h1>QUE DESEA eliminar</h1>
<small><a href="../materias/">regresar</a></small>
    <form action="eliminar.php" method ="post">
        <class = "elem-group">
            <input type="hidden" id="id" name="id" value ="<?php echo $materia['id']; ?>"> <br>
        <label for="nombre">nombre</label> <br>
        <input type= "text" id="nombre" name= "nombre" placeholder="nombre" value ="<?php echo $materia['nombre']; ?>"><br>
        <label for ="Licenciatura">licenciatura</label> <br>
        <input type="text" id="Licenciatura" name= "licenciatura" placeholder="licenciatura" value ="<?php echo $materia['Licenciatura']; ?>"> <br>
        <label for="Cuatrimestre">cuatrimestre</label> <br>
        <input type="text" id="Cuatrimestre" name= "Cuatrimestre" placeholder="Cuatrimestre" value ="<?php echo $materia['Cuatrimestre']; ?>"> <br>
        <input type= "submit"><br>


    </form>
</body>
</html>