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
  
    <title>ALUMNOS</title>
</head>
<body>
<h1>detalles del alumno <small><a href="../alumnos/"></small>regresar</a></h1> 

<br>
<table> <thead>


    <tr>
<th>id</th>
<th>nombre</th>
<th>apellido</th>
<th>telefono</th>
<th>correo</th>
<th>licenciatura</th>
<th>cuatrimestre</th>
<th>estatus:0o1</th>

    </tr>
    </thead>
    <tbody>

<tr>


  

                <td><?php echo $alumno['id'] ?></td>
                <td><?php echo $alumno['nombre'] ?></td>
                <td><?php echo $alumno['apellido'] ?></td>
                <td><?php echo $alumno['telefono'] ?></td>
                <td><?php echo $alumno['correo'] ?></td>
                <td><?php echo $alumno['licenciatura'] ?></td>
                <td><?php echo $alumno['cuatrimestre'] ?></td>
                <td><?php echo $alumno['estatus:0o1'] ?></td>




  
    </tr>
    



     
    </tbody>
    </table>

   

    


</body>
</html>