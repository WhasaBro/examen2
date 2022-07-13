<?php
require_once("../lib/connect.php");

function get_all_alumnos($connect){
    $consulta="SELECT * FROM alumnos";
    $resultado= mysqli_query($connect,$consulta);
    return $resultado;

}
function get_alumno($connect, $id){
    $consulta="SELECT * FROM alumnos  WHERE id = $id ";
    $resultado= mysqli_query($connect,$consulta);
    return $resultado;


}

function insertar_alumnos($nombre, $apellido, $telefono, $correo, $cuatrimestre, $licenciatura){
    global $connect;
    $consulta = "insert into alumnos(nombre, apellido, telefono, correo, cuatrimestre, licenciatura) values('$nombre','$apellido','$telefono','$correo','$licenciatura','$cuatrimestre')";
    $resultado = mysqli_query($connect, $consulta);







}

require_once("../lib/connect.php");

function get_all_materias($connect){
    $consulta="SELECT * FROM meterias";
    $resultado= mysqli_query($connect,$consulta);
    return $resultado;

}
function get_materia($connect, $id){
    $consulta="SELECT * FROM materias  WHERE id = $id ";
    $resultado= mysqli_query($connect,$consulta);
    return $resultado;


}

function insertar_materias($nombre, $cuatrimestre, $licenciatura){
    global $connect;
    $consulta = "insert into materias (nombre, cuatrimestre, licenciatura) values('$nombre','$cuatrimestre','$licenciatura')";
    $resultado = mysqli_query($connect, $consulta);
}



require_once("../lib/connect.php");

function get_all_profesores($connect){
    $consulta="SELECT * FROM profesores";
    $resultado= mysqli_query($connect,$consulta);
    return $resultado;

}
function get_profesore($connect, $id){
    $consulta="SELECT * FROM profesores  WHERE id = $id ";
    $resultado= mysqli_query($connect,$consulta);
    return $resultado;


}

function insertar_profesore($nombre, $apellido, $telefono, $correo){
    global $connect;
    $consulta = "insert into profesores (nombre, apellido, telefono, correo) values('$nombre','$apellido','$telefono','$correo')";
    $resultado = mysqli_query($connect, $consulta);
}


function update_alumnos($nombre, $apellido, $telefono, $correo, $cuatrimestre, $licenciatura, $id){
    global $connect;
    $consulta = $consulta = "update alumnos set nombre='$nombre', apellido='$apellido', telefono='$telefono', correo='$correo', cuatrimestre='$cuatrimestre', licenciatura='$licenciatura' where id=$id";
    $resultado = mysqli_query($connect, $consulta);
}






function update_materia($nombre, $cuatrimestre, $licenciatura, $id){
    global $connect;
    $consulta = $consulta = "update materias set nombre='$nombre', cuatrimestre='$cuatrimestre', licenciatura='$licenciatura' where id=$id";
    $resultado = mysqli_query($connect, $consulta);
}


function update_profesore($nombre, $apellido, $telefono, $correo, $id){
    global $connect;
    $consulta = $consulta = "update profesores set nombre='$nombre', apellido='$apellido', telefono='$telefono', correo='$correo' where id=$id";
    $resultado = mysqli_query($connect, $consulta);




}


function delete_alumnos($nombre, $apellido, $telefono, $correo, $cuatrimestre, $licenciatura, $id){
    global $connect;
    $consulta = "delete from alumnos where id=$id";
    $resultado = mysqli_query($connect, $consulta);
}


function delete_materia($nombre, $cuatrimestre, $licenciatura, $id){
    global $connect;
    $consulta = "delete from materias where id=$id";
    $resultado = mysqli_query($connect, $consulta);
}



function delete_profesore($nombre, $apellido, $telefono, $correo, $id){
    global $connect;
    $consulta = $consulta = "delete from profesores where id=$id";
    $resultado = mysqli_query($connect, $consulta);




}




?>

