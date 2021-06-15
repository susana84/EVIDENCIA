<?php

session_start();

if(isset($_SESSION['nombredelusuario']))
{
	$usuarioingresado = $_SESSION['nombredelusuario'];
	echo "<h1>Bienvenido a mi Almacen: $usuarioingresado </h1>";
}
else
{
	header('location: index.php');
}

if(isset($_POST['btncerrar']))
{
	session_destroy();
	header('location:inicio.html');
}
?>

<link rel="stylesheet" href="login.css">
<body>
<form method="POST">
<input type="submit" value="ACEPTAR " name="btncerrar" />
</form>
</body>