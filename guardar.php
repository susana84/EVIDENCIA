<?php
	
	require 'conn.php ';
	
	$Producto= $_POST['Producto'];
	$Marca=$_POST['Marca'];
	$Modelo=$_POST['Modelo'];
	$Precio=$_POST['Precio'];
	$Cantidad=$_POST['Cantidad'];
	$Proveedor=$_POST['Proveedor'];
	$Tipo=$_POST['Tipo'];
	
	
	
	mysqli_query($conn, "INSERT INTO producto (Producto, Marca, Modelo, Precio, Cantidad, Proveedor) VALUES ('$Producto', '$Marca', '$Modelo', '$Precio', '$Cantidad', '$Proveedor')";
	header("Location:1.php");
?>
 