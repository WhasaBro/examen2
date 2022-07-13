<?php
require_once("../lib/functions.php");

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$telefono = $_POST["telefono"];
$correo = $_POST["correo"];



insertar_profesore($nombre, $apellido, $telefono, $correo );

header("Location: index.php");
?>