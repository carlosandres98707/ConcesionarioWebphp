<?php

include('../Controller/db.php');
require_once('../Model/TipoDocum.php');
require_once('../Model/Roles.php');

$traerTDocumento = new TipoDocum("","");
$traerRol = new Roles("");

$consulta1 = mysqli_query($conn,$traerTDocumento->traerTipoDocumento());
$consulta2 = mysqli_query($conn,$traerRol->traerRol());


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <title>Registrar Usuarios</title>
</head>
<body>
<header>
<h1>REGISTRO</h1>
</header>
<main>
<form action="" method="post">

<label for="">Tipo Documento</label>
<select name="tipoDocum">
    <option value="">Seleccione un tipo de documento</option>
    <?php
    while ($filas = mysqli_fetch_assoc($consulta1)) {
    ?>
    <option value="<?php echo $filas['t_documento'] ?>"><?php echo $filas['t_documento'] ?></option>
    <?php } ?>
</select> <br><br>

<label for="">Numero Documento</label>
<input type="text" name="numDocum" id=""> <br><br>
<label for="">Primer Nombre</label>
<input type="text" name="pNom" id=""> <br><br>
<label for="">Segundo Nombre</label>
<input type="text" name="sNom" id=""> <br><br>
<label for="">Primer Apellido</label>
<input type="text" name="pApell" id=""> <br><br>
<label for="">Segundo Apellido</label>
<input type="text" name="sApell" id=""> <br><br>
<label for="">Telefono</label>
<input type="number" name="tel" id=""> <br><br>
<label for="">Correo</label>
<input type="text" name="corr" id=""> <br><br>
<label for="">Usuario</label>
<input type="text" name="usu" id=""> <br><br>
<label for="">Contraseña</label>
<input type="text" name="contr" id=""> <br><br>
<label for="">Rol</label>
<select name="rol">
    <option value="">Seleccione un rol</option>
    <?php
    while ($filas = mysqli_fetch_assoc($consulta2)) {
    ?>
    <option value="<?php echo $filas['rol_usu'] ?>"><?php echo $filas['rol_usu'] ?></option>
    <?php } ?>
</select> <br><br>
<input type="submit" value="Registrarme">

</form>
</main>
<footer>
</footer>
    
</body>
</html>