<?php

require_once('../Model/Usuarios.php');
include('db.php');

$documento_usu = $_POST["numDocum"];
$p_nombre_usu = $_POST["pNom"];
$s_nombre_usu = $_POST["sNom"] ;
$p_apellido_usu = $_POST["pApell"];
$s_apellido_usu = $_POST["sApell"];
$telefono = $_POST["tel"];
$correo = $_POST["corr"];
$usuario = $_POST["usu"];
$contraseña = $_POST["contr"];
$fkpk_rol_usu = $_POST["rol"];
$fkpk_t_documento = $_POST["tipoDocum"];

$guardarRegistro = new Usuarios($documento_usu,$p_nombre_usu,$s_nombre_usu,$p_apellido_usu,$s_apellido_usu,
$telefono,$correo,$usuario,$contraseña,$fkpk_rol_usu,$fkpk_t_documento );



?>