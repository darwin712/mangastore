<html>
	<head>
	<style>
        /* Estilos de página */
        body{
			background-image: url('bg.jpg');
			background-size: cover;
			color: rgb(137, 24, 84);
			font-family: Arial;
			display: flex;
		}
		h1,h2{
			text-align: center;
		}
        #logo{
			width:300px;
			height:80px;
			border: 2px solid rgb(123, 20, 75);
			border-radius: 5px;
			margin-bottom: 1%;
		}
        #title{
			font-size:20px;
			background-color: #F8CCCC;
            border: 2px solid rgb(102, 14, 61);
            border-radius: 5px;
			height: 80px;
			width: 1132px;
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
		.contenedor{
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
            margin-top:1%;
            font-size:20px;
			background-color: rgb(249, 221, 226);
			width: 940px;
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
            width:80px;
        }
        input[type="submit"] {
        font-size: 18px;
        border: 2px solid rgb(102, 14, 61); border-radius: 15px;
        background-color: rgb(241, 186, 195); color: rgb(102, 14, 61);
        }
        input[type="submit"]:hover{
        border: 2px solid rgb(123, 20, 75);
        background-color: rgb(247, 204, 211); color: rgb(128, 20, 78);
        cursor: grab;
        }
		input[type="checkbox"]{
			background-color: white;
			border: 2px solid black;
			border-radius: 25px;
			width: 25px;
			height: 25px;
			appearance: none;
		}
		input[type="checkbox"]:hover{
			background-color:  rgb(247, 204, 216);
		}
		input[type="checkbox"]:checked{
			background-color: rgb(252, 164, 195);
		}
        #scroll{
			background-color: rgb(249, 221, 226);
			margin-top: 1.5%;
			margin-bottom: 1.5%;
		    max-height: 600px;
			overflow: auto;
			border: 3px solid rgb(102, 14, 61);
            border-radius: 15px;
			width: 1000px;
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
		#btn{
        margin-bottom: 2%;
        font-size: 20px;
        border: 2px solid rgb(102, 14, 61); border-radius: 25px;
        background-color: rgb(241, 186, 195); color: rgb(102, 14, 61);
        width: 190px; height: 45px;
        }
        #btn:hover{
        border: 2px solid rgb(123, 20, 75);
        background-color: rgb(247, 204, 211); color: rgb(128, 20, 78);
        cursor: grab;
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
        .custom-file-upload {
            font-size: 15px;
            display: inline-block;
            background-color: rgb(167, 80, 126);
            color: #fff;
            text-decoration: none;
            border-radius: 30px;
            border: 2px solid rgb(119, 45, 85);;
            cursor: pointer;
        }
        input[type="file"] {
			display: none;
        }
		#vistaprevia{
			width: 100px;
			height: 100px;
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
        <div id="title"> <h1> Inventarios </h1> </div>

    <div id="scroll";> 
	
		<?php 
		
		$id = $_REQUEST['id'];

		$sql = "SELECT * FROM inventario WHERE No_Producto = '$id'";
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();
		?>
		
		<center>
			<form action="Modificacion.php?id=<?php echo $row['No_Producto'];?>&user=<?php echo $usu;?>" method="POST" enctype="multipart/form-data">
	<table>
	  <tr class="table">
                    <th>Imagen</th>
                    <th>Producto</th>
                    <th>Descripcion</th>
                    <th>$ Compra</th>
                    <th>$ Venta</th>
                    <th>Existencias</th>
      </tr>
	  <tr>
            <form id="visualizacion">
			<td><label for="file-upload" class="custom-file-upload">
			<input type="File" accept="image/*" name="Imagen" id="file-upload">
			<img src="data:image/jpg;base64,<?php echo base64_encode($row['Imagen']);?>" id="vistaprevia" class="contenedor"> </form>
		    </label>
			<br>
		    </form>
		    </td>
			<td><input type="text" maxlength="30" name="Producto" value="<?php echo $row['Nombre_Producto'];?>"></td>
			<td><input type="text" maxlength="200" name="Descripcion" value="<?php echo $row['Descripcion_Producto'];?>"></td>
			<td><input type="number" name="PrecioCompra" value="<?php echo $row['Precio_Compra'];?>"></td>
			<td><input type="number" name="PrecioVenta" value="<?php echo $row['Precio_Venta'];?>"></td>
			<td><input type="number" name="CodProducto" value="<?php echo $row['No_Producto'];?>"></td>
	</tr>
	</table>
		<center><br><input type="submit" value="Aceptar" class="button"></center><br>
	</form>
			
		</center>
         </div>
		</section>
        <script>
	        const defaultFile = 'Image Icon.png';
	
	        const file = document.getElementById( 'file-upload' );
	        const img = document.getElementById( 'vistaprevia' );
	        file.addEventListener( 'change', e => {
		        if( e.target.files[0] ){
			        const reader = new FileReader( );
			        reader.onload = function( e ){
				        img.src = e.target.result;
			        }
			        reader.readAsDataURL(e.target.files[0])
		        }else{
			        img.src = defaultFile;
		        }
	        } );
        </script>

	</body>

</html>