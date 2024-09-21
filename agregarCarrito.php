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
        #mensaje1{
            font-size: 28px;
        }
        #mensaje2{
            font-size:20px;
        }
		#contenedor{
            margin-left: 2%;
            margin-top: 2%;
            margin-bottom: 2%;
			position: relative;
            background-color: #f2f2f2;
            padding: 15px;
            box-shadow: 8px 8px rgba(0, 0, 0, 0.1);
			border: 2px solid rgb(123, 20, 75);
			border-radius: 30px;
		}
		th, tr, td{
			margin-top: 1%;
			background-color: rgb(249, 221, 226);
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
        font-size: 25px;
        border: 2px solid rgb(102, 14, 61); border-radius: 15px;
        background-color: rgb(241, 186, 195); color: rgb(102, 14, 61);
        }
        input[type="submit"]:hover{
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
        #btn:hover{
        border: 2px solid rgb(123, 20, 75);
        background-color: rgb(247, 204, 211); color: rgb(128, 20, 78);
        cursor: grab;
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
		    max-height: 600px;
			overflow: auto;
			border: 3px solid rgb(102, 14, 61);
            border-radius: 15px;
			width: 900px;
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
    
            <div id="scroll";>
            <?php
            date_default_timezone_set("America/Tijuana");

            $numVenta = rand(10,100);
            $fecha = date("Y-m-d h:i:sa");
            $producto = $_POST['producto'];
            $unidades = $_POST['unidades'];

            $sql = "INSERT INTO ventas (No_Venta, Cliente, Producto, Cantidad, FechaHora) 
                    VALUES ('$numVenta', '$usu', '$producto', '$unidades', '$fecha')";
            $result = $conn->query($sql);

                 ?>
                 <h1 id="mensaje1"> Producto agregado al carrito exitosamente! </h1>
                 <h2 id="mensaje2"> Se han añadido <?php echo $unidades ?> unidad(es) del manga num <?php echo "$producto" ?> a su carrito! </h2>


                 <table>
                    <tr>
                        <td> <form action="main.php?user=<?php echo $usu;?>" Method="POST"> <input type="submit" id="btn" value="Volver"> </form> </td>
                        <td> <form action="carrito.php?user=<?php echo $usu;?>" Method="POST"> <input type="submit" id="btn" value="Carrito"> </form> </td>
                    </tr>
                 </table>

                <?php
                    
                ?>


            </div>
        </section>
    
        
        
        </body>
    </html>