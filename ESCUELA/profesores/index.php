<?php 
require_once("../lib/connect.php");
$consulta = "SELECT * FROM profesores";
$resultado = mysqli_query($connect, $consulta);
$array = mysqli_fetch_array($resultado);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profesores</title>
</head>
<body>
<h1>PROFESORES <small><a href="formulario.php">insertar</a></small> </h1>


    <hr>
    <table>
        <thead>
            <tr>
                <th>id           </th>
                <th>nombre         </th>
                <th>apellido       </th>
                <th>telefono       </th>
                <th>correo         </th>
                <th>status:0o1        </th>
            </tr>
        </thead>
        <tbody>   
            <?php
                while ($fila = mysqli_fetch_array ($resultado)) {

            ?>
            <tr> 
                <td><?php echo $fila['id'];?></td>
                <td><?php echo $fila['nombre'];?></td>
                <td><?php echo $fila['apellido'];?></td>
                <td><?php echo $fila['telefono'];?></td>
                <td><?php echo $fila['correo'];?></td>
                <td><?php echo $fila['estatus:0o1'];?></td>

                <td><a href="detail.php?id=<?php echo $fila ['id']; ?>">datos</a></td>
                <td><a href="formaup.php?id=<?php echo $fila ['id']; ?>">editar</a></td>
                <td><a href="formeliminar.php?id=<?php echo $fila ['id']; ?>">ELIMINAR</a></td>





            </tr>        
            <?php
                    }
            ?> 
        </tbody>
    </table>
</body>
</html>
