<?php
	
	include("conexion.php");
	include("user.php");
	
	$id = $_REQUEST['id'];

	
	$sql2="DELETE FROM ventas WHERE Producto = '$id' AND  Cliente = '$usu'";
			
	$result2 = $conn->query($sql2);
	
	if($result2){
		header("Location: carrito.php?user=".$usu);
	}else{
		echo "No se elimino";
	}
	

	
?>