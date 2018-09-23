<?php
session_start();
$user = (isset($_SESSION['usuario'])) ? $_SESSION['usuario'] : null;
require '../../../php/db/connect.php';

$idAlumno = $_POST['id_alumno'];
$idMateria = $_POST['id_materia'];
$nota = $_POST['nota'];

$sql = "INSERT INTO `alumno_materia_notas` (`id_alumno`, `id_materia`, `nota`) VALUES ('$idAlumno', '$idMateria', '$nota')";

$resultado = $mysqli->query($sql);

header("Location: materias.php?id_alumno={$idAlumno}");

?>
