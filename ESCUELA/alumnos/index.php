<?php


$connect; 
require_once("../lib/functions.php");
$users = get_all_alumnos($connect);


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
<h1>alumnos <small><a href="formulario.php">insertar</a></small> </h1>

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
    <?php
 while ($fila = mysqli_fetch_array ($users)) {


?>
<tr>


  

                <td><?php echo $fila['id'];?></td>
                <td><?php echo $fila['nombre'];?></td>
                <td><?php echo $fila['apellido'];?></td>
                <td><?php echo $fila['telefono'];?></td>
                <td><?php echo $fila['correo'];?></td>
                <td><?php echo $fila['licenciatura'];?></td>
                <td><?php echo $fila['cuatrimestre'];?></td>
                <td><?php echo $fila['estatus:0o1'];?></td>
                <td><a href="detail.php?id=<?php echo $fila ['id']; ?>">datos</a></td>
                <td><a href="formaup.php?id=<?php echo $fila ['id']; ?>">editar</a></td>
                <td><a href="formeliminar.php?id=<?php echo $fila ['id']; ?>">ELIMINAR</a></td>
            
    </tr>

  
    
   <?php

}





?>
    <script> src="confirmacion.js"</script>

     
    </tbody>



    </table>

   

    


</body>
</html>