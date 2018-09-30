<?php
include('../checkRole.php');
require '../../../php/db/connect.php';

$nombreAlumno = $_POST['nombreAlumno'];
$apellidoAlumno = $_POST['apellidoAlumno'];
$docAlumno = $_POST['docAlumno'];
$idAlumno = $_POST['idAlumno'];





$sql = "UPDATE `alumnos` SET `nombre_alumno` = '$nombreAlumno', `apellido_alumno` = '$apellidoAlumno', `doc_alumno` = '$docAlumno'
WHERE `alumnos`.`id_alumno` = $idAlumno";

$resultado = $mysqli->query($sql);


header("Location: index.php");

?>
