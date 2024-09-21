<?php

	include("conexion.php");
	include("user.php");
	
	$imagen = addslashes(file_get_contents($_FILES["Imagen"]["tmp_name"]));
	$producto = $_POST["Producto"];
	$descripcion = $_POST["Descripcion"];
	$preciocompra = $_POST["PrecioCompra"];
	$precioventa = $_POST["PrecioVenta"];
	$existencias = $_POST["Existencias"];
	
	do {
		$no_producto = rand(1,100000);
		$sql = "SELECT No_Producto FROM Inventario WHERE No_Producto=$no_producto";
		$result = $conn->query($sql);
	} while ($result->num_rows > 0);
	
	$sql2="INSERT INTO inventario(Imagen,Nombre_Producto,Descripcion_Producto,Precio_Compra,Precio_Venta,Existencias,No_Producto)
			VALUES('$imagen','$producto','$descripcion','$preciocompra','$precioventa','$existencias','$no_producto')";
			
	$result2 = $conn->query($sql2);
	
	if($result2){
		
		header("Location: inventarios.php?user=".$usu);
		
	}else{
		
		echo "Producto no guardado";
		
	}


?>