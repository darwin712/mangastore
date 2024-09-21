<?php
	
	include("conexion.php");
	include("user.php");
	
	$id = $_REQUEST['id'];

	$producto = $_POST["Producto"];
	$descripcion = $_POST["Descripcion"];
	$preciocompra = $_POST["PrecioCompra"];
	$precioventa = $_POST["PrecioVenta"];
	
	if(!empty($_FILES['Imagen']['tmp_name'])){
		$imagen = addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));
		$sql2="UPDATE inventario SET Imagen = '$imagen',Nombre_Producto='$producto',Descripcion_Producto='$descripcion',Precio_Compra='$preciocompra',
			Precio_Venta='$precioventa' WHERE CONCAT(`inventario`.`No_Producto`) = '$id'";
	} else {
		$sql2="UPDATE inventario SET Nombre_Producto='$producto',Descripcion_Producto='$descripcion',Precio_Compra='$preciocompra',
			Precio_Venta='$precioventa' WHERE CONCAT(`inventario`.`No_Producto`) = '$id'";
	}
	
	$result2 = $conn->query($sql2);
	
	header("Location: inventarios.php?user=".$usu);
	

?>