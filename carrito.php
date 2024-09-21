<html>
	<head>
		<title>Alexa's Manga Store</title>
	<link rel="shortcut icon" href="https://static.wikia.nocookie.net/memes-pedia/images/7/79/Padoru.jpg/revision/latest/scale-to-width-down/350?cb=20221202034528&path-prefix=es" type="image/x-icon">
	<meta charset="utf-8">

	<style>
		body{
			background-image: url('bg.jpg');
			background-size: cover;
			color: rgb(137, 24, 84);
			font-family: Arial;
			display: flex;
		}
		#title{
			font-size:20px;
			background-color: #F8CCCC;
            border: 2px solid rgb(102, 14, 61);
            border-radius: 5px;
			height: 80px;
			width: 1132px;
		}
		#logo{
			width:300px;
			height:80px;
			border: 2px solid rgb(123, 20, 75);
			border-radius: 5px;
			margin-bottom: 1%;
		}
		#navegator{
			background-color: #F8CCCC;
			border: 3px solid rgb(102, 14, 61); 
			border-radius: 10px;
			width: 303px;
			order: 1;
		}
		#navegacion{
			background-color: rgba(248, 204, 204, 0.5);
			order: 2;
		}
		#background{
			margin-left:1%;
			margin-right:1%;
			background-color: rgba(248, 202, 203, 0.5);
			border: 3px solid rgb(123, 20, 75);
			border-radius: 10px;
			order: 3;
			overflow: hidden;
			max-height: 720px;
		}
        #imgProducto{
            width: 350px;
        }
        #infoProducto{
            width: 800px;
            background-color: gray;
			background-color: rgb(249, 221, 226);
        }
        #info{
            margin-left: 10%;
            margin-right: 10%;
        }
        #nombreProducto{
            font-size: 35px;
        }
        #precioProducto{
            font-size: 28px;
        }
        #descProducto{
            font-size:20px;
        }
		#contenedor{
			max-width: 800px;
            margin: 0 auto;
            background-color: #f2f2f2;
            padding: 15px;
            border: 2px solid rgb(123, 20, 75);
            box-shadow: 8px 8px rgba(0, 0, 0, 0.1);
			border-radius: 30px;
			text-align:center;
		}
		table{
			margin-top: 1%;
			background-color: rgb(249, 221, 226);
			width: 1000px;
		}
		th, tr, td{
			margin-top: 1%;
			background-color: rgb(249, 221, 226);
			text-align: center;
		}
		th{
			font-size: 110%;
		}
        select, input[type="text"], input[type="date"], input[type="number"], input[type="password"]{
        font-family: Arial; font-size: 15px;
        border: 2px solid rgb(102, 14, 61); border-radius: 15px;
        background-color: rgb(255, 239, 242); color: rgb(102, 14, 61);
        margin-left: 2.5%;
        width: 180px;
        text-align: center;
        }
        input[type="number"] {
        width:70px;
        }
		input[type="submit"] {
        font-size: 15px;
        border: 2px solid rgb(102, 14, 61); border-radius: 15px;
        background-color: rgb(241, 186, 195); color: rgb(102, 14, 61);
        }
        input[type="submit"]:hover{
        border: 2px solid rgb(123, 20, 75);
        background-color: rgb(247, 204, 211); color: rgb(128, 20, 78);
        cursor: grab;
        }
        #addCarrito{
        margin-top: 4%;
        font-size: 20px;
        border: 2px solid rgb(102, 14, 61); border-radius: 25px;
        background-color: rgb(241, 186, 195); color: rgb(102, 14, 61);
        width: 120px; height: 45px;
        }
        #addCarrito:hover{
        border: 2px solid rgb(123, 20, 75);
        background-color: rgb(247, 204, 211); color: rgb(128, 20, 78);
        cursor: grab;
        }
		#btn{
        margin-bottom: 2%;
        font-size: 20px;
        border: 2px solid rgb(102, 14, 61); border-radius: 25px;
        background-color: rgb(241, 186, 195); color: rgb(102, 14, 61);
        width: 120px; height: 45px;
        }
		button:hover{
			cursor: pointer;
		}
        #btn:hover{
        border: 2px solid rgb(123, 20, 75);
        background-color: rgb(247, 204, 211); color: rgb(128, 20, 78);
        cursor: grab;
        }
		#seccion{
		font-size: 20px;
		border: 1px solid rgb(102, 14, 61); border-radius: 50px;
        background-color: #ffd7d7; color: rgb(102, 14, 61);
		box-shadow: 2px 2px rgba(0, 0, 0, 0.1);
		width: 260px; height: 50px;
		}
		#userCard{
			margin-top: 8px;
			border-radius: 25px;
			margin-right: 5px; margin-left: 5px; 
		}
		#userImg{
			margin-right: 2%;
			vertical-align: middle;
		}
		#userBtn{
		font-size: 20px;
		border: 3px solid rgb(123, 20, 75);
		border-radius: 46px;
        background-color: #FFE1E1; color: #FF2260;
		box-shadow: 2px 2px rgba(0, 0, 0, 0.1);
		width: 280px; height: 100px;
		}
        #btnCarrito{
			background-color: #ffd7d7;
			border: 1px solid rgb(123, 20, 75); border-radius: 50px;
            box-shadow: 2px 2px rgba(0, 0, 0, 0.1);
			font-size: 27px;
			position: absolute;
			bottom: 30px; left: 35px;
			color: rgb(137, 24, 84);
			padding-top: 3px;
			width: 240px; height: 50px;
		}
		#scroll{
			background-color: rgb(249, 221, 226);
			margin-top: 1.5%;
			margin-bottom: 1.5%;
		    max-height: 550px;
			overflow: auto;
			border: 3px solid rgb(102, 14, 61);
            border-radius: 15px;
			width: 1050px;
		}
		/* width */
		::-webkit-scrollbar {
			width: 10px;
		}
		/* Track */
		::-webkit-scrollbar-track {
			background-color: rgba(52, 8, 31, 0.5);
			border-radius: 10px;
		}

		/* Handle */
		::-webkit-scrollbar-thumb {			
		background: rgb(102, 14, 61);
		border-radius: 10px;
	    }
		
		/* Handle on hover */
		::-webkit-scrollbar-thumb:hover {
		background: rgb(137, 24, 84);
	    }
        </style>

        <?php 
		
		include("user.php");
		include("conexion.php");
			
		?>

	</head>

        <body>
		<header id="navegator">
                <img src="banner manga.png" id="logo">
            <nav id="navegacion"> <br>
			    <center> <form action="usuario.php?user=<?php echo $usu;?>" Method="POST"> 
				         <button type="submit" id="userBtn">
						 <h3 id="userCard"> <img src="User Icon.png" width="75" height="75" id="userImg"> <?php echo $usu;?> </h3>
	                     </button></form> 
				</center>
                <center> <form action="main.php?user=<?php echo $usu;?>" Method="POST"> <input type="submit" id="seccion" value="Productos"> </form> </center>
                <center> <form action="inventarios.php?user=<?php echo $usu;?>" Method="POST"> <input type="submit" id="seccion" value="Inventarios"> </form> </center>
                <center> <form action="ventas.php?user=<?php echo $usu;?>" Method="POST"> <input type="submit" id="seccion" value="Ventas"> </form> </center>

				<center> <form action="carrito.php?user=<?php echo $usu;?>" Method="POST"> 
					     <input type="hidden"> 
						 <button type="submit" id="btnCarrito">
						 <img src='Cart Icon.png' width="25" height="25"> 0 </button>
						</form> 
				</center>
            </nav>
    
        </header>
            
        <section id="background">
            <center>
            <div id="title"> <h1> Carrito </h1> </div>
    
            <div id="scroll";>
            <?php
			
			$total = 0;
		
		
		$sql = "SELECT * FROM ventas WHERE Cliente = '" . $usu . "'";
		$result = $conn->query($sql);
		
		if ($result->num_rows > 0) {
			
			echo "<table>
			<thead>
				<tr>
				    <th>Imagen</th>
				    <th>Producto</th>
					<th>ID</th>
					<th>Descripcion</th>
					<th>Precio</th>
					<th>Cantidad</th>
					<th colspan='2' >Operaciones</th>
				</tr>
			</thead>";

		while($row = $result->fetch_assoc()) {
			$idProducto = $row['Producto'];
			$sql2 = "SELECT * FROM inventario WHERE No_Producto = " . $idProducto;
			$result2 = $conn->query($sql2);
			$row2 = $result2->fetch_assoc();
		?>
			
			<tbody>
			<tr>
			    <td><img alt="" width="100px" height="100px" src="data:image/jpg;base64,<?php echo base64_encode($row2['Imagen']); ?>" id="contenedor"><br></td>
			    <td><?php echo $row2['Nombre_Producto']; ?></td>
				<td><?php echo $row['Producto']; ?></td>
				<td><?php echo $row2['Descripcion_Producto']; ?></td>
				<td>$<?php echo $row2['Precio_Venta']; ?></td>
				<td><?php echo $row['Cantidad']; ?> </td>
				<td><form action="eliminarCarrito.php?id=<?php echo $row['Producto'];?>&user=<?php echo $usu;?>" method="POST"><input type="submit" value="Eliminar"></form></td>
			</tr> 
	<?php
	
		$total += $row2['Precio_Venta'] * $row['Cantidad'];
		$venta = "No_Venta";
		$idventa = $row[$venta];
		
		}
		echo "</tbody></table>";
        echo "<h2 id='precioTotal'> Total: $" . number_format($total, 2) . "</h2>";
		
		?>
		<form action="comprar.php?user=<?php echo $usu;?>" method="POST"> <button type="submit" id="btn" name="total" value=<?php echo $total;?>"> Comprar </button></form>";
		<?php

		}else{
			echo "<h2> No hay productos en tu carrito. </h2>";
		}


	?>
            </div>
        </section>
    
        
        
        </body>
    </html>