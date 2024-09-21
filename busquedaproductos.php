<html>
	<head>
		<title>Alexa's Manga Store</title>
	</head>
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
		h1,h2{
			text-align: center;
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
		#contenedor{
			position: relative;
			height: 270px;
            margin: 0 auto;
            background-color: #f2f2f2;
            padding: 10px;
            box-shadow: 8px 8px rgba(0, 0, 0, 0.1);
			border: 2px solid rgb(123, 20, 75);
			border-radius: 30px;
			text-align:center;
		}
		#imagesize{
			width: 170px; height: 170px;
			border-radius: 30px;
			border: 2px solid rgb(123, 20, 75);
			box-shadow: 4px 4px rgba(0, 0, 0, 0.1);
		}
		#infoBox{
			color:  rgb(137, 24, 84);
			background-color: white;
			box-shadow: 4px 4px rgba(0, 0, 0, 0.1);
			position: sticky;
            border: 1px solid rgb(123, 20, 75);
			width: 210px;
			height: 90px;
			border-radius: 30px;
			margin: 0 auto;
		}
		table{
			margin-top: 1%;
			background-color: rgb(249, 221, 226);
			width: 900px;
		}
		th, tr, td{
			margin-top: 1%;
			background-color: rgb(249, 221, 226);
			text-align: center;
		}
		th{
			font-size: 110%;
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
		input[type="checkbox"]{
			background-color: white;
			border: 2px solid black;
			border-radius: 25px;
			width: 25px;
			height: 25px;
			appearance: none;
		}
		button{
			border: 0px none white;
			background-color: rgba(123, 20, 75, 0);
			border-radius: 30px;
            margin: 0 auto;
            padding: 1px;
		}
		button:hover {
			background-color: rgba(123, 20, 75, 1);
			cursor: pointer;
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
		#busqueda{
			margin-top: 1%;
			font-family: Arial; font-size: 17px;
			border: 2px solid rgb(102, 14, 61); border-radius: 30px;
			background-color: rgb(255, 239, 242); color: rgb(102, 14, 61);
			width: 1050px;
			height: 40px;
			text-align: left;
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
            <div id="title"> <h1> Productos </h1> </div>
			<form action="busquedaproductos.php" Method="POST"><input type="text" placeholder="Buscar productos..." name = "busqueda" id="busqueda"></form>
    
            <div id="scroll";>
		<?php

		$busqueda = $_POST["busqueda"];
		
		$sql = "SELECT * FROM inventario WHERE Nombre_Producto LIKE '%".$busqueda."%'"; 
		
		$result = $conn->query($sql);

		if ($result->num_rows > 0) {
			
			echo "<table>";

			$columnas = 0;

		while($row = $result->fetch_assoc()) {
			if($columnas % 4 == 0){
				echo "<tr>";
			}
		?>
			<td> 
			    <form action="verproducto.php" method="GET">
				<input type="hidden" name="ID" value="<?php echo $row['No_Producto']; ?>">
				<button type="submit"> <div id="contenedor"> 
					<img alt="" width="160px" height="160px" id="imagesize" src="data:image/jpg;base64,<?php echo base64_encode($row['Imagen']); ?>">
					<div id="infoBox">
					<h2> <?php echo $row['Nombre_Producto']; ?> </h2>
					<h3> $<?php echo $row['Precio_Venta']; ?> </h3>
		            </div>
				    </div> </button> </form>
	        </td>
	    <?php
			if($columnas % 4 == 3){
				echo "</tr>";
			}
			$columnas++;
		}

		if($columnas % 4 != 0){
			echo "</tr>";
		}
		echo "</table>";
		}
	    ?>

				
            </div>
        </section>
    
        
        
        </body>
    </html>