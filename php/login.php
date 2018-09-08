<?php
session_start();
require 'db/connect.php';

$username = $_POST['username'];
$password = $_POST['password'];

if(!$username || !$password){
  header('Location: /?error=true');
}

$sql = "SELECT usuarios.id_usuario,id_alumno,id_docente,usuarios.usuario FROM usuarios
LEFT JOIN docentes ON usuarios.id_usuario = docentes.id_usuario
LEFT JOIN alumnos ON usuarios.id_usuario = alumnos.id_usuario
WHERE usuario = '{$username}' AND password = '{$password}'";

$resultado = $mysqli->query($sql);

if ($resultado->num_rows === 0) {
  header('Location: /?error=true');
} else {
  $user = $resultado->fetch_assoc();
  $_SESSION['usuario'] = $user;


  if(is_null($user['id_alumno']) && is_null($user['id_docente'])){
    header('Location: ../admin/administrador');
  }elseif(!is_null($user['id_docente'])){
    header('Location: ../admin/profesor');
  }elseif(!is_null($user['id_alumno'])){
    header('Location: ../admin/alumno');
  }
}
