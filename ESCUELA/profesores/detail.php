





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
    <title>profesores</title>
</head>
<body>


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
          
            <tr> 
                <td><?php echo $profesore['id'];?></td>
                <td><?php echo $profesore['nombre'];?></td>
                <td><?php echo $profesore['apellido'];?></td>
                <td><?php echo $profesore['telefono'];?></td>
                <td><?php echo $profesore['correo'];?></td>
                <td><?php echo $profesore['estatus:0o1'];?></td>
            </tr>        
            <?php
                    
            ?> 
        </tbody>
    </table>
</body>
</html>
