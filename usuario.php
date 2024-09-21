<html>
	<head>
		<title>Mostrar</title>
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
			max-width: 800px;
            margin: 0 auto;
            background-color: #f2f2f2;
            padding: 15px;
            border: 2px solid rgb(123, 20, 75);
            box-shadow: 8px 8px rgba(0, 0, 0, 0.1);
			border-radius: 30px;
			text-align:center;
		}
		#inventario{
			margin-top: 1%;
			background-color: rgb(249, 221, 226);
			width: 1000px;
		}
		#inventario:th, #inventario:tr, #inventario:td{
			margin-top: 1%;
			background-color: rgb(249, 221, 226);
			text-align: center;
		}
		#inventario:th{
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
		#userBtn:hover{
			cursor: pointer;
		}
		#btn{
	    margin-top: 10%;
		font-family: Arial; font-size: 17px;
        border: 2px solid rgb(102, 14, 61); border-radius: 25px;
        background-color: rgb(241, 186, 195); color: rgb(102, 14, 61);
		width: 160px;
		height: 40px;
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
		#scroll{
			background-color: rgb(249, 221, 226);
			margin-bottom: 1.5%;
		    max-height: 530px;
			overflow: auto;
			border: 3px solid rgb(102, 14, 61);
            border-radius: 15px;
			width: 1050px;
		}
		#busqueda{
			font-family: Arial; font-size: 17px;
			border: 2px solid rgb(102, 14, 61); border-radius: 30px;
			background-color: rgb(255, 239, 242); color: rgb(102, 14, 61);
			width: 900px;
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
		
		table{
			
			text-align:center;
			
		}

		  #form1{
            display: inherit;
            margin-left: 3%;
            margin-right: 3%;
            margin-bottom: 3%;
			
		  }
		  
		  
		  select, input[type="text"], input[type="date"], input[type="number"], input[type="password"]{
        font-family: Arial; font-size: 15px;
        border: 2px solid rgb(102, 14, 61); border-radius: 15px;
        background-color: rgb(255, 239, 242); color: rgb(102, 14, 61);
        margin-left: 2.5%;
        width: 180px;
        text-align: center;
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
			<div id="title"> <h1> Administracion del Usuario </h1> </div><br><br>

		<div id="scroll";>
		<?php
        $mensaje = ""; 
		$bandera = "";
		
		$user = $_REQUEST['user'];
		
		$sql = "SELECT * FROM clientes WHERE Usuario = '$user' OR Correo = '$user'";
		$result = $conn->query($sql);
		$row = $result->fetch_assoc();
		
		if(isset($_POST['btn1'])){
	
		$usuario = $_POST['usuario'];
		$correo = $_POST['correo'];
		$password = $_POST['pass'];
		$telefono = $_POST['telefono'];
		$nombre = $_POST['nombre'];
		$edad = $_POST['edad'];
		$calle = $_POST['calle'];
		$colonia = $_POST['colonia'];
		$ciudad = $_POST['ciudad'];
		$numero = $_POST['numero'];
		$codigopostal = $_POST['codigoPostal'];
		$pais = $_POST['pais'];
		$estado = $_POST['estado'];
		$titular = $_POST['titular'];
		$notarjeta = $_POST['tarjeta'];
		$CVC = $_POST['CVC'];
		$fechacaducidad = $_POST['fecha'];
	
		$sql2="UPDATE clientes SET Usuario = '$usuario', Correo= '$correo', Contraseña ='$password',Nombre_Usuario='$nombre', Edad='$edad',
		Telefono ='$telefono',Calle='$calle', Colonia='$colonia', Numero = '$numero',Codigo_Postal= '$codigopostal', Pais = '$pais', Estado = '$estado', Ciudad = '$ciudad',
		No_Tarjeta='$notarjeta', Nom_Titular='$titular', Fecha_Caducidad = '$fechacaducidad', CVC = '$CVC'
		WHERE usuario = '$user' OR correo = '$user'";
		
		$result2 = $conn->query($sql2);

		if(! headers_sent()){
            header('Location: usuario.php?user='.$usu);
            }else{
                echo "<script type='text/javascript'> window.location.replace('usuario.php?user=" . $usu . "'); </script>";
            }
    }else if(isset(($_POST['btn2']))){
		
		$sql3 = "DELETE FROM clientes WHERE Usuario = '$user' OR Correo = '$user'";
		$result3 = $conn->query($sql3);
		
		if(! headers_sent()){
            header('Location: login.php');
            }else{
                echo '<script type="text/javascript"> window.location.replace("login.php"); </script>';
            }
		}
	?>
	
	
	
	 <form action="" Method="POST">
            <h1 style="font-size: 24px;"> ➤ Datos Personales: </h1>

            <table>
              <tr> 
                  <td> <h2> Usuario: </h2> </td>
                  <td> <h2> Correo: </h2> </td>
              </tr>
              <tr>
                <td> <input type="text" name="usuario" id="smallform" value="<?php echo $row['Usuario'];?>" oninput="validateForm()"> </td>
                <td> <input type="text" name="correo" id="smallform"  value="<?php echo $row['Correo'];?>"oninput="validateForm()"> </td>
              </tr>
            </table>
            <br>

            <table>
                <tr> 
                    <td> <h2> Contraseña: </h2> </td>
                    <td> <h2> Num. Telefono: </h2> </td>
                </tr>
                <tr>
                  <td> <input type="text" name="pass" id="smallform"  value="<?php echo $row['Contraseña'];?>"oninput="validateForm()"> </td>
                  <td> <input type="text" name="telefono" id="smallform" maxlength="10" oninput="charLimit(this);validateForm()" 
                    onkeypress="return onlyNumbers(event)"  value="<?php echo $row['Telefono'];?>"> </td>
                </tr>
              </table>
              <br>

              <table>
                <tr> 
                    <td> <h2> Nombre: </h2> </td>
                    <td> <h2> Edad: </h2> </td>
                </tr>
                <tr>
                  <td> <input type="text" name="nombre" id="smallform" oninput="validateForm()"  value="<?php echo $row['Nombre_Usuario'];?>"> </td>
                  <td> <input type="number" name="edad" id="smallform" oninput="validateForm()"  value="<?php echo $row['Edad'];?>"> </td>
                </tr>
              </table>
  
       
		  
		 
            <h1 style="font-size: 24px;"> ➤ Dirección: </h1>
            <table>
              <tr> 
                  <td> <h2> Calle: </h2> </td>
                  <td> <h2> Colonia: </h2> </td>
              </tr>
              <tr>
                <td> <input type="text" name="calle" id="smallform" oninput="validateForm()"  value="<?php echo $row['Calle'];?>"> </td>
                <td> <input type="text" name="colonia" id="smallform" oninput="validateForm()"  value="<?php echo $row['Colonia'];?>"> </td>
              </tr>
            </table>
            <br>

            <table>
                <tr> 
                    <td> <h2> Ciudad: </h2> </td>
                    <td> <h2> Número: </h2> </td>
                    <td> <h2> Cod. Postal: </h2> </td>
                </tr>
                <tr>
                <td> <input type="text" name="ciudad" id="tinyform" oninput="validateForm()" value="<?php echo $row['Ciudad'];?>"> </td>
                  <td> <input type="number" name="numero" id="tinyform" maxlength="4" oninput="charLimit(this);validateForm()"  value="<?php echo $row['Numero'];?>"> </td>
                  <td> <input type="number" name="codigoPostal" id="tinyform" maxlength="5" oninput="charLimit(this);validateForm()"  value="<?php echo $row['Codigo_Postal'];?>"> </td>
                </tr>
              </table>
              <br>

              <table>
                <tr> 
                    <td> <h2> País: </h2> </td>
                    <td> <h2> Estado: </h2> </td>
                </tr>
                <tr>
                  <td> <input type="text" name="pais" id="smallform" oninput="validateForm()"  value="<?php echo $row['Pais'];?>"> </td>
                  <td> <input type="text" name="estado" id="smallform" oninput="validateForm()" value="<?php echo $row['Estado'];?>"> </td>
                </tr>
              </table>
  
         
		  
		  
            <h1 style="font-size: 24px;"> ➤ Metodo de Pago: </h1>
            <table>
              <tr> 
                  <td> <h2> Titular: </h2> </td>
              </tr>
              <tr>
                <td> <input type="text" name="titular" oninput="validateForm()"  value="<?php echo $row['Nom_Titular'];?>"> </td>
              </tr>
              </table> <br>

              <table>
              <tr>
                <td> <h2> Num. Tarjeta: </h2> </td>
              </tr>
              <tr>
                <td> <input type="text" name="tarjeta" pattern="\d*" maxlength="16" oninput="charLimit(this);validateForm()" 
                    onkeypress="return onlyNumbers(event)"  value="<?php echo $row['No_Tarjeta'];?>"> </td>
              </tr>
            </table>
            <br>

              <table>
                <tr> 
                    <td> <h2> CVC: </h2> </td>
                    <td> <h2> Fecha Expiración: </h2> </td>
                </tr>
                <tr>
                  <td> <input type="number" name="CVC" id="smallform" maxlength="3" oninput="charLimit(this);validateForm()"  value="<?php echo $row['CVC'];?>"> </td>
                  <td> <input type="date" name="fecha" id="smallform" oninput="validateForm()"  value="<?php echo $row['Fecha_Caducidad'];?>"> </td>
                </tr>
				
				<tr >
				<td colspan="2">
				<br><input type="submit" value="Modificar" name="btn1">
				</td>
				</tr>
              </table>
         
	</form>
	
	<table>
		<tr>
			<td><form action="Login.php" method="POST"><input type="submit" value="Cerrar sesion"></form></td>
			<td><form action="" method="POST"><input type="submit" value="Eliminar cuenta" name='btn2'></form></td>
		</tr>
	</table>
	
	
	</section>

	
	
	</body>
</html>