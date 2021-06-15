<?php
include_once("conn.php"); 
?>

<html>
<head>    
		<title>Mi almacen</title>
		<meta charset="UTF-8">
		<link rel="stylesheet" href="style.css">
</head>
<body>
    <table>
	<img src="logo.png">
			<div id="barrabuscar">
		<form method="POST">
		<input type="submit" value="Buscar" name="btnbuscar"><input type="text" name="txtbuscar" id="cajabuscar" placeholder="&#128270;Ingresar producto">
		</form>
		</div>
		
		
		
			<tr><th colspan="7"><h1>LISTAR PRODUCTOS</h1><th><a style="font-weight: normal; font-size: 14px;" onclick="abrirform()">Agregar</a></th></tr>
			<tr>
		 
		    <th>Id_Prod</th>
            <th>Producto</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Precio</th>
			<th>Cantidad</th>
			<th>Proveedor</th>
						</tr>
        <?php 

if(isset($_POST['btnbuscar']))
{
$buscar = $_POST['txtbuscar'];
$queryprod = mysqli_query($conn, "SELECT Producto, Marca, Modelo, Precio, Cantidad, Proveedor, Tipo  FROM producto where Id_Prod like '".$buscar."%'");
}
else
{
$queryprod = mysqli_query($conn, "SELECT * FROM producto ORDER BY Id_Prod asc");
}
		$numerofila = 0;
        while($mostrar = mysqli_fetch_array($queryprod)) 
		{    $numerofila++;    
            echo "<tr>";
			echo "<td>".$numerofila."</td>";
           
            echo "<td>".$mostrar['Producto']."</td>";
            echo "<td>".$mostrar['Marca']."</td>";    
			echo "<td>".$mostrar['Modelo']."</td>";  
			echo "<td>".$mostrar['Precio']."</td>";  
			echo "<td>".$mostrar['Cantidad']."</td>";  
			echo "<td>".$mostrar['Proveedor']."</td>"; 
			
			echo "<td style='width:26%'><a href=\"modificar.php?Id_Prod=$mostrar[Id_Prod]\">Modificar</a> | <a href=\"eliminar.php?Id_Prod=$mostrar[Id_Prod]\" onClick=\"return confirm('¿Estás seguro de eliminar a $mostrar[Producto]?')\">Eliminar</a></td>";           
}
        ?>
    </table>
	 <script>
function abrirform() {
  document.getElementById("formregistrar").style.display = "block";
  
}

function cancelarform() {
  document.getElementById("formregistrar").style.display = "none";
}

</script>
<div class="caja_popup" id="formregistrar">
  <form action="agregar.php" class="contenedor_popup" method="POST">
        <table>
		<tr><th colspan="2">Nuevo Producto</th></tr>
            <tr> 
                <td>Producto</td>
                <td><input type="text" name="txtProducto" required></td>
            </tr>
            <tr> 
                <td>Marca</td>
                <td><input type="text" name="txtMarca" required></td>
            </tr>
            <tr> 
                <td>Modelo</td>
                <td><input type="text" name="txtModelo" required></td>
            </tr>
            <tr> 	
            <td>Precio</td>
                <td><input type="decimal" name="txtPrecio" required></td>
            </tr>
            <tr> 	
              <td>Cantidad</td>
                <td><input type="number" name="txtCantidad" required></td>
            </tr>
            <tr> 	
            <td>Proveedor</td>
                <td><input type="text" name="txtProveedor" required></td>
            </tr>
            
            <tr> 	
               <td colspan="2">
				   <button type="button" onclick="cancelarform()">Cancelar</button>
				   <input type="submit" name="btnregistrar" value="Registrar" onClick="javascript: return confirm('¿Deseas registrar este producto?');">
			</td>
            </tr>
        </table>
    </form>
</div>
</body>
</html>