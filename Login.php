<HTML>  <meta charset="UTF-8">
    <head>
        <title> 
            Log in
        </title>
    <style>
        body{
			background-image: url('bg.jpg');
			background-size: cover;
			color: rgb(137, 24, 84);
			font-family: Arial;
            display:flex;
        }
        #background{
            background-color: rgb(249, 221, 226);
            border: 4px solid rgb(102, 14, 61);
            border-radius: 25px;
            margin-left: 30%; margin-right: 30%; margin-top: 7%; margin-bottom: 7%;
        }
        #logo{
            margin-left: 2%;
            vertical-align: middle;
            display: inline-block;
        }
        #title{
            background-color: rgb(241, 186, 195);
            border-radius: 25px;
            margin-left: 3%; margin-right: 3%;
        }
        #form{
            margin-left: 5%;
            margin-right: 3%;
            margin-bottom: 3%;
        }
        p{
            margin-left: 4%;
        }
        select, input[type="text"], input[type="date"], input[type="number"], input[type="password"]{
        font-family: Arial; font-size: 15px;
        border: 2px solid rgb(102, 14, 61); border-radius: 15px;
        background-color: rgb(255, 239, 242); color: rgb(102, 14, 61);
        width: 465px; height: 30px;
        }
        #confirmar{
        width: 130px; height: 30px; font-size: 20px;
        border: 2px solid rgb(102, 14, 61); border-radius: 15px;
        background-color: rgb(241, 186, 195); color: rgb(102, 14, 61);
        }
        #confirmar:hover{
        border: 2px solid rgb(123, 20, 75);
        background-color: rgb(247, 204, 211); color: rgb(128, 20, 78);
        cursor: grab;
        }
        #confirmar:disabled{
        opacity: 0.7;
        border: 2px solid rgb(123, 20, 75);
        background-color: rgb(247, 204, 211); color: rgb(128, 20, 78);
        cursor: default;
        }


    </style>

    <script>
            function validateForm() {
            var textFields = document.querySelectorAll('#registerForm input[type="text"], #registerForm input[type="password"], #registerForm input[type="number"], #registerForm input[type="month"]');
            var isValid = true;

            textFields.forEach(function (textField) {
                if (textField.value.trim() === '') {
                    isValid = false;
                }
            });

            document.getElementById('confirmar').disabled = !isValid;
        }
    </script>


    </head>
    <body>    
	
	<?php $mensaje = ""; 
	
		$bandera = false;
	
		include('conexion.php');
		
		if(isset($_POST['btn'])){
	
		$usuario = $_POST['usuario'];
		$password = $_POST['pass'];
	
		$sql = "SELECT Usuario, Correo FROM clientes WHERE Usuario = '$usuario' OR Correo = '$usuario'";
		$result = $conn->query($sql);
	
	
		$sql2 = "SELECT Contraseña FROM clientes WHERE Contraseña = '$password'";
		$result2 = $conn->query($sql2);
		
		
		if ($result->num_rows > 0) {
		
		if ($result2->num_rows > 0) {
	    $bandera = true;

        header('user: '.$usuario);
		header('Location: main.php?user='.$usuario);

		} else {
		
		$mensaje = "Contraseña Incorrecta";
		}
		
		} else {
		
	$mensaje = "Usuario o Correo Inexistente";
	
	
}
		}
	
	?>
	
    <div id="background"> 
        <h1 id="title"> <img src="icon manga.png" width="100px" height="100px" id="logo"> Iniciar Sesión </h1>
        <p> Este proceso es necesario para poder realizar compras en nuestra tienda. </p>
        <p> No tienes una cuenta creada? <a href="Sign_In.php"> Registrate aqui! </a> </p>

        <form id="registerForm" action="Login.php" method="POST">
		
		
		
        <div id="form">
            <h2> Usuario/Correo: </h2> 
            <input type="text" name="usuario" oninput="validateForm()">  
            <h2> Contraseña: </h2> 
            <input type="password" name="pass" oninput="validateForm()"> 

        </div>
		
		 <center>
            <h3><?php echo $mensaje ?></h3>
            <input type="submit" id="confirmar" value="Confirmar" name="btn" disabled> 
            </center>
		
    </form>
        
    </div>
    </body>

</HTML>