<?php
include('../checkRole.php');

require '../../../php/db/connect.php';

$idAlumno = $_POST['nombreMateria'];



$sql = "INSERT INTO `materias` (`id_materia`, `nombre_materia`, `id_docente`) VALUES (NULL, '$idAlumno', '1')";

$resultado = $mysqli->query($sql);


header("Location: ver_materias.php");

?>
