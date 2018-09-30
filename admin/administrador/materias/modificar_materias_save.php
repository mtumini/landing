<?php
include('../checkRole.php');
require '../../../php/db/connect.php';

$nombreMateria = $_POST['nombreMateria'];
$idMateria = $_POST['idMateria'];



$sql = "UPDATE `materias` SET `nombre_materia` = '$nombreMateria' WHERE `materias`.`id_materia` = $idMateria";

$resultado = $mysqli->query($sql);


header("Location: ver_materias.php");

?>
