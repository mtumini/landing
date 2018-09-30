<?php
include('../checkRole.php');
require '../../../php/db/connect.php';

$nombreAlumno = $_POST['nombre'];
$apellidoAlumno = $_POST['apellido'];
$documentoAlumno = $_POST['documento'];
$passwordAlumno = $_POST['password'];
$mailAlumno = $_POST['email'];
$aliasUsuario = $_POST['alias'];


$sql = "INSERT INTO `usuarios` (`id_usuario`, `usuario`, `password`, `email`) VALUES (NULL, '$aliasUsuario', '$passwordAlumno', '$mailAlumno')";
$resultado = $mysqli->query($sql);


$last_id = mysqli_insert_id($mysqli);

$sql2 = "INSERT INTO `alumnos` (`id_alumno`, `nombre_alumno`, `apellido_alumno`, `doc_alumno`, `id_usuario`) VALUES (NULL, '$aliasUsuario',
   '$apellidoAlumno', '$documentoAlumno', '$last_id')";



$resultado2 = $mysqli->query($sql2);
header("Location: index.php");

?>
