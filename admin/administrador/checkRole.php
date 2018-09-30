<?php
session_start();
$user = $_SESSION['usuario'];
if(is_null($user) || !is_null($user['id_alumno'])){
  header('Location: ../../index.php');
}
?>
