<?php
	
	include("conexion.php");
	include("user.php");
	
	$id = $_REQUEST['id'];
	
	$sql2="DELETE FROM inventario WHERE No_Producto = '$id'";
			
	$result2 = $conn->query($sql2);
	
	if($result2){
		header("Location: inventarios.php?user=".$usu);
	}else{
		echo "No se elimino";
	}
	

	
?>