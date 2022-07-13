
<?php

$id = $_GET['id'];
require_once("../lib/functions.php");
$resultado = get_materia($connect, $id);
$materias = mysqli_fetch_array ($resultado);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>materias</title>
</head>
<body>

<h1>detalles del alumno <small><a href="../materias/"></small>regresar</a></h1> 
    <hr>
    <table>
        <thead>
            <tr>
                <th>id               </th>
                <th>nombre            </th>
                <th>cuatrimestre       </th>
                <th>licenciatura      </th>
            </tr>
        </thead>
        <tbody>    
            
            <tr> 
                <td><?php echo $materias['id'];?></td>
                <td><?php echo $materias['nombre'];?></td>
                <td><?php echo $materias['Cuatrimestre'];?></td>
                <td><?php echo $materias['Licenciatura'];?></td>
                


            </tr>        
            <?php
                    
            ?> 
        </tbody>
    </table>
</body>
</html>

