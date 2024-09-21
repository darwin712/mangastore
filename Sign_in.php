<HTML>  <meta charset="UTF-8">
    <head>
        <title> 
            Sign In
        </title>
    <style>
        body{
			background-image: url('bg.jpg');
			background-size: cover;
			color: rgb(137, 24, 84);
			font-family: Arial;
            display:flex;
		}
        td{
            font-size:85%;
        }
        #background{
            background-color: rgb(249, 221, 226);
            border: 4px solid rgb(102, 14, 61);
            border-radius: 25px;
            margin-left: 30%; margin-right: 30%; margin-top: 2%; margin-bottom: 2%;
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
        #form1{
            display: inherit;
            margin-left: 3%;
            margin-right: 3%;
            margin-bottom: 3%;
        }
        #form2{
            display: none;
            margin-left: 3%;
            margin-right: 3%;
            margin-bottom: 3%;
        }
        #form3{
            display: none;
            margin-left: 3%;
            margin-right: 3%;
            margin-bottom: 3%;
        }
        #smallform{
            width: 245px;
        }
        #tinyform{
            width: 161px;
        }
        p{
            margin-left: 4%;
        }
        select, input[type="text"], input[type="date"], input[type="month"], input[type="number"], input[type="password"]{
        font-family: Arial; font-size: 15px;
        border: 2px solid rgb(102, 14, 61); border-radius: 15px;
        background-color: rgb(255, 239, 242); color: rgb(102, 14, 61);
        width: 490px; height: 30px;
        }
        #nextpage, #previouspage{
        width: 40px; height: 40px; font-size: 22px;
        border: 2px solid rgb(102, 14, 61); border-radius: 50px;
        background-color: rgb(241, 186, 195); color: rgb(102, 14, 61);
        margin-left: 7%; margin-right: 7%;
        }
        #nextpage:hover, #previouspage:hover{
        border: 2px solid rgb(123, 20, 75);
        background-color: rgb(247, 204, 211); color: rgb(128, 20, 78);
        cursor: grab;
        }
        #nextpage:disabled, #previouspage:disabled{
        opacity: 0.6;
        border: 2px solid rgb(123, 20, 75);
        background-color: rgb(247, 204, 211); color: rgb(128, 20, 78);
        cursor: default;
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
        var numPage = 1;

        function nextpage(){
            switch(numPage){
                case 1:
                    form1.style.display = "none";
                    form2.style.display = "inherit";
                    numPage++;
                    document.getElementById('pageIndicator').innerHTML = (`2/3`); 
                    document.getElementById('previouspage').disabled = false;
                    break;
                case 2:
                    form2.style.display = "none";
                    form3.style.display = "inherit";
                    numPage++;
                    document.getElementById('pageIndicator').innerHTML = (`3/3`);
                    document.getElementById('nextpage').disabled = true;
                    break;
            }
        }

        function previouspage(){
            switch(numPage){
                case 2:
                    form2.style.display = "none";

                    form1.style.display = "inherit";
                    numPage--;
                    document.getElementById('pageIndicator').innerHTML = (`1/3`);
                    document.getElementById('previouspage').disabled = true;
                    break;
                case 3:
                    form3.style.display = "none";
                    form2.style.display = "inherit";
                    numPage--;
                    document.getElementById('pageIndicator').innerHTML = (`2/3`);
                    document.getElementById('nextpage').disabled = false;
                    break;
            }
        }

        function charLimit(input){
            if (input.value.length > input.maxLength){
                input.value = input.value.slice(0, input.maxLength);
            }
        }

        function onlyNumbers(event) {
            var charCode = event.charCode;
            return (charCode >= 48 && charCode <= 57) || charCode == 0;
        }

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
        <?php
        $mensaje = ""; 
		$bandera = "";
	
		include('conexion.php');
		
		if(isset($_POST['btn'])){
	
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
	
		$sql = "SELECT Usuario FROM clientes WHERE Usuario = '$usuario'";
		$result = $conn->query($sql);
	
		$sql2 = "SELECT Correo FROM clientes WHERE Correo = '$correo'";
		$result2 = $conn->query($sql2);
		
		$sql3= "INSERT INTO clientes (Usuario,Correo,Contraseña,Nombre_Usuario,Edad,Telefono,Calle,Colonia,Numero,Codigo_Postal,Pais,Estado,Ciudad,No_Tarjeta,Nom_Titular,Fecha_Caducidad,CVC)
			VALUES('$usuario','$correo','$password','$nombre','$edad','$telefono','$calle','$colonia','$numero','$codigopostal','$pais','$estado','$ciudad','$notarjeta','$titular','$fechacaducidad','$CVC')";
		

		if ($result->num_rows > 0 && $result2->num_rows > 0) {
			$mensaje = "El Usuario y el Correo ya son existentes";
		} else if ($result->num_rows > 0) {
			$mensaje = "El Usuario ya es Existente";
		} else if ($result2->num_rows > 0) {
			$mensaje = "El Correo ya es Existente";
		} else {
			$result3 = $conn->query($sql3);
			
            if(! headers_sent()){
			header('Location: Login.php');
            }else{
                echo '<script type="text/javascript"> window.location.replace("Login.php"); </script>';
            }
		}
    }?>
	
    <div id="background"> 
        <div id="title"> <h1> <img src="icon manga.png" width="100px" height="100px" id="logo"> Registrarse </h1></div>
        <p> Este proceso es necesario para poder realizar compras en nuestra tienda. </p>

        <div id="FORMS"> <form id="registerForm" action="Sign_in.php" method="POST">
        <div id="form1">
            <h1 style="font-size: 24px;"> ➤ Datos Personales: </h1>

            <table>
              <tr> 
                  <td> <h2> Usuario: </h2> </td>
                  <td> <h2> Correo: </h2> </td>
              </tr>
              <tr>
                <td> <input type="text" name="usuario" id="smallform" oninput="validateForm()"> </td>
                <td> <input type="text" name="correo" id="smallform" oninput="validateForm()"> </td>
              </tr>
            </table>
            <br>

            <table>
                <tr> 
                    <td> <h2> Contraseña: </h2> </td>
                    <td> <h2> Num. Telefono: </h2> </td>
                </tr>
                <tr>
                  <td> <input type="password" name="pass" id="smallform" oninput="validateForm()"> </td>
                  <td> <input type="text" name="telefono" id="smallform" maxlength="10" oninput="charLimit(this);validateForm()" 
                    onkeypress="return onlyNumbers(event)"> </td>
                </tr>
              </table>
              <br>

              <table>
                <tr> 
                    <td> <h2> Nombre: </h2> </td>
                    <td> <h2> Edad: </h2> </td>
                </tr>
                <tr>
                  <td> <input type="text" name="nombre" id="smallform" oninput="validateForm()"> </td>
                  <td> <input type="number" name="edad" id="smallform" oninput="validateForm()"> </td>
                </tr>
              </table>
  
          </div>

          <div id="form2">
            <h1 style="font-size: 24px;"> ➤ Dirección: </h1>
            <table>
              <tr> 
                  <td> <h2> Calle: </h2> </td>
                  <td> <h2> Colonia: </h2> </td>
              </tr>
              <tr>
                <td> <input type="text" name="calle" id="smallform" oninput="validateForm()"> </td>
                <td> <input type="text" name="colonia" id="smallform" oninput="validateForm()"> </td>
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
                <td> <input type="text" name="ciudad" id="tinyform" oninput="validateForm()"> </td>
                  <td> <input type="number" name="numero" id="tinyform" maxlength="4" oninput="charLimit(this);validateForm()"> </td>
                  <td> <input type="number" name="codigoPostal" id="tinyform" maxlength="5" oninput="charLimit(this);validateForm()"> </td>
                </tr>
              </table>
              <br>

              <table>
                <tr> 
                    <td> <h2> País: </h2> </td>
                    <td> <h2> Estado: </h2> </td>
                </tr>
                <tr>
                  <td> <input type="text" name="pais" id="smallform" oninput="validateForm()"> </td>
                  <td> <input type="text" name="estado" id="smallform" oninput="validateForm()"> </td>
                </tr>
              </table>
  
          </div>

          <div id="form3">
            <h1 style="font-size: 24px;"> ➤ Metodo de Pago: </h1>
            <table>
              <tr> 
                  <td> <h2> Titular: </h2> </td>
              </tr>
              <tr>
                <td> <input type="text" name="titular" oninput="validateForm()"> </td>
              </tr>
              </table> <br>

              <table>
              <tr>
                <td> <h2> Num. Tarjeta: </h2> </td>
              </tr>
              <tr>
                <td> <input type="text" name="tarjeta" pattern="\d*" maxlength="16" oninput="charLimit(this);validateForm()" 
                    onkeypress="return onlyNumbers(event)"> </td>
              </tr>
            </table>
            <br>

              <table>
                <tr> 
                    <td> <h2> CVC: </h2> </td>
                    <td> <h2> Fecha Expiración: </h2> </td>
                </tr>
                <tr>
                  <td> <input type="number" name="CVC" id="smallform" maxlength="3" oninput="charLimit(this);validateForm()"> </td>
                  <td> <input type="date" name="fecha" id="smallform" oninput="validateForm()"> </td>
                </tr>
              </table>
          </div>

          <center>
        <h4 ><?php echo $mensaje; ?> </h4>
          <input type="submit" value="Confirmar" id="confirmar" disabled name="btn"> 
        </form>
    </div> 

    <center> 
            <table>
                <tr>
                    <td> <button id="previouspage" onclick="previouspage()" disabled> <img src ="LeftArrow.png" width="20" height="20"> </button> </td>
                    <td> <p id="pageIndicator"> 1/3 </p> </td>
                    <td> <button id="nextpage" onclick="nextpage()"> <img src ="RightArrow.png" width="20" height="20"> </button> </td>
                </tr>
            </table>
        </center>

    </div>
    </body>

</HTML>