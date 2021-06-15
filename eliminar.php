<?php
include_once("conn.php");
 
$Id_Prod = $_GET['Id_Prod'];
 
mysqli_query($conn, "DELETE FROM producto WHERE Id_Prod=$Id_Prod");
 
header("Location:1.php");

?>