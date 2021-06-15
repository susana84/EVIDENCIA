<?php 
include_once("conn.php");
include_once("1.php");

$Id_Prod = $_GET['Id_Prod'];
 
$querybuscar = mysqli_query($conn, "SELECT * FROM producto WHERE Id_Prod=$Id_Prod");
 
while($mostrar = mysqli_fetch_array($querybuscar))
{
    $Id_Prod = $mostrar['Id_Prod'];
    $Producto= $mostrar['Producto'];
	$Marca=$mostrar['Marca'];
	$Modelo=$mostrar['Modelo'];
	$Precio=$mostrar['Precio'];
	$Cantidad=$mostrar['Cantidad'];
	$Proveedor=$mostrar['Proveedor'];
	
	
}
?>
<html>
<head>    
		<title>VaidrollTeam</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="style.css">
</head>
<body>
<div class="caja_popup2" id="formmodificar">
  <form method="POST" class="contenedor_popup" >
        <table>
		<tr><th colspan="2">Modificar producto</th></tr>
		     <tr> 
                <td>Id_Prod</td>
                <td><input type="text" name="txtId_Prod" value="<?php echo $Id_Prod;?>" required ></td>
            </tr>
            <tr> 
                <td>Producto</td>
                <td><input type="text" name="txtProducto" value="<?php echo $Producto;?>" required></td>
            </tr>
            <tr> 
                <td>Marca</td>
                <td><input type="text" name="txtMarca" value="<?php echo $Marca;?>" required></td>
            </tr>
            <tr> 
                <td>Modelo</td>
                <td><input type="text" name="txtModelo" value="<?php echo $Modelo;?>"required></td>
            </tr>
            <tr>
				<td>Precio</td>
                <td><input type="text" name="txtPrecio" value="<?php echo $Precio;?>"required></td>
            </tr>
            <tr>
			
			<td>Cantidad</td>
                <td><input type="text" name="txtCantidad" value="<?php echo $Cantidad;?>"required></td>
            </tr>
            <tr>
			<td>Proveedor</td>
                <td><input type="text" name="txtProveedor" value="<?php echo $Proveedor;?>"required></td>
            </tr>
          
            <tr>
				
                <td colspan="2">
				<a href="1.php">Cancelar</a>
				<input type="submit" name="btnmodificar" value="Modificar" onClick="javascript: return confirm('¿Deseas modificar a este producto?');">
				</td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>

<?php
	
	if(isset($_POST['btnmodificar']))
{    
    $Id_Prod1 = $_POST['txtId_Prod'];
	$Producto1 	= $_POST['txtProducto'];
    $Marca1 	= $_POST['txtMarca'];
    $Modelo1 	= $_POST['txtModelo']; 
	  $Precio1 	= $_POST['txtPrecio'];
  $Cantidad1 	= $_POST['txtCantidad']; 	
  $Proveedor1 	= $_POST['txtProveedor'];   

      
    $querymodificar = mysqli_query($conn, "UPDATE producto SET Producto='$Producto1',Marca='$Marca1',Modelo='$Modelo1',Precio='$Precio1',Cantidad='$Cantidad1',Proveedor'$Proveedor1' WHERE Id_Prod=$Id_Prod1");

  	echo "<script>window.location= '1.php' </script>";
    
}
?>
