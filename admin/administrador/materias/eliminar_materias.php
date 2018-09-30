<?php
include('../checkRole.php');

require '../../../php/db/connect.php';

$idMateria = $_GET['id_materia'];


$sql = "DELETE FROM `materias` WHERE `materias`.`id_materia` = $idMateria";
$resultado = $mysqli->query($sql);
header("Location: ver_materias.php");
?>
