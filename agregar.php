<?php include_once("conn.php"); 
   
    $Producto= $_POST['txtProducto'];
	$Marca=$_POST['txtMarca'];
	$Modelo=$_POST['txtModelo'];
	$Precio=$_POST['txtPrecio'];
	$Cantidad=$_POST['txtCantidad'];
	$Proveedor=$_POST['txtProveedor'];
	$Tipo=$_POST['txtTipo'];
mysqli_query($conn, "INSERT INTO producto (Producto, Marca, Modelo, Precio, Cantidad, Proveedor, Tipo) VALUES ('$Producto', '$Marca', '$Modelo', '$Precio', '$Cantidad', '$Proveedor', '$Tipo')");

header("Location:1.php");
	?>
