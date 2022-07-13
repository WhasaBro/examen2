<?php
require_once("../lib/functions.php");

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$telefono = $_POST["telefono"];
$correo = $_POST["correo"];

$id = $_POST["id"];

delete_profesore($nombre, $apellido, $telefono, $correo, $id);

header("Location: index.php");
?>