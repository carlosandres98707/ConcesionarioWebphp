<?php

//mysqli_connect("127.0.0.1", "mi_usuario", "mi_contraseña", "mi_bd");
$conn = mysqli_connect(
    'localhost',
    'root',
    '',
    'consecionario'
);

//Comprobamos la conexion
if ($conn->connect_error) {
    die("Conexion Fallida: " . $conn->connect_error);
  }
  echo "Conexion establecida exitosamente";
?>