<?php
include('../checkRole.php');

require '../../../php/db/connect.php';

$idDocente = $_GET['id_docente'];


$sql = "DELETE FROM `docentes` WHERE `docentes`.`id_docente` = $idDocente";
$resultado = $mysqli->query($sql);
header("Location: ver_profesores.php");
?>
