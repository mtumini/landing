<?php
include('../checkRole.php');
require '../../../php/db/connect.php';

$nombreProf = $_POST['nombre'];
$apellidoProf = $_POST['apellido'];
$documentoProf = $_POST['documento'];
$passwordProf = $_POST['password'];
$mailProf = $_POST['email'];
$aliasUsuario = $_POST['alias'];


$sql = "INSERT INTO `usuarios` (`id_usuario`, `usuario`, `password`, `email`) VALUES (NULL, '$aliasUsuario', '$passwordProf', '$mailProf')";
$resultado = $mysqli->query($sql);


$last_id = mysqli_insert_id($mysqli);
$sql2 = "INSERT INTO `docentes` (`id_docente`, `nombre_docente`, `apellido_docente`, `doc_docente`, `id_usuario`) VALUES (NULL,
   '$nombreProf', '$apellidoProf', '$documentoProf', '$last_id')";



$resultado2 = $mysqli->query($sql2);
header("Location: ver_profesores.php");

?>
