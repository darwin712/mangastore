<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Sign In</title>
    <link rel="stylesheet" href="style.css">
    <script>
        var numPage = 1;

        function nextpage() {
            switch(numPage) {
                case 1:
                    document.getElementById('form1').style.display = "none";
                    document.getElementById('form2').style.display = "inherit";
                    numPage++;
                    document.getElementById('pageIndicator').innerHTML = "2/3"; 
                    document.getElementById('previouspage').disabled = false;
                    break;
                case 2:
                    document.getElementById('form2').style.display = "none";
                    document.getElementById('form3').style.display = "inherit";
                    numPage++;
                    document.getElementById('pageIndicator').innerHTML = "3/3";
                    document.getElementById('nextpage').disabled = true;
                    break;
            }
        }

        function previouspage() {
            switch(numPage) {
                case 2:
                    document.getElementById('form2').style.display = "none";
                    document.getElementById('form1').style.display = "inherit";
                    numPage--;
                    document.getElementById('pageIndicator').innerHTML = "1/3";
                    document.getElementById('previouspage').disabled = true;
                    break;
                case 3:
                    document.getElementById('form3').style.display = "none";
                    document.getElementById('form2').style.display = "inherit";
                    numPage--;
                    document.getElementById('pageIndicator').innerHTML = "2/3";
                    document.getElementById('nextpage').disabled = false;
                    break;
            }
        }

        function charLimit(input) {
            if (input.value.length > input.maxLength) {
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

        // Función para guardar los datos en localStorage
        function saveFormData() {
            const usuario = document.querySelector('input[name="usuario"]').value;
            const correo = document.querySelector('input[name="correo"]').value;
            const password = document.querySelector('input[name="pass"]').value;
            const telefono = document.querySelector('input[name="telefono"]').value;
            const nombre = document.querySelector('input[name="nombre"]').value;
            const edad = document.querySelector('input[name="edad"]').value;
            const calle = document.querySelector('input[name="calle"]').value;
            const colonia = document.querySelector('input[name="colonia"]').value;
            const ciudad = document.querySelector('input[name="ciudad"]').value;
            const numero = document.querySelector('input[name="numero"]').value;
            const codigoPostal = document.querySelector('input[name="codigoPostal"]').value;
            const pais = document.querySelector('input[name="pais"]').value;
            const estado = document.querySelector('input[name="estado"]').value;
            const titular = document.querySelector('input[name="titular"]').value;
            const tarjeta = document.querySelector('input[name="tarjeta"]').value;
            const CVC = document.querySelector('input[name="CVC"]').value;
            const fechaCaducidad = document.querySelector('input[name="fecha"]').value;

            // Guardar los datos en localStorage
            localStorage.setItem('usuario', usuario);
            localStorage.setItem('correo', correo);
            localStorage.setItem('password', password);
            localStorage.setItem('telefono', telefono);
            localStorage.setItem('nombre', nombre);
            localStorage.setItem('edad', edad);
            localStorage.setItem('calle', calle);
            localStorage.setItem('colonia', colonia);
            localStorage.setItem('ciudad', ciudad);
            localStorage.setItem('numero', numero);
            localStorage.setItem('codigoPostal', codigoPostal);
            localStorage.setItem('pais', pais);
            localStorage.setItem('estado', estado);
            localStorage.setItem('titular', titular);
            localStorage.setItem('tarjeta', tarjeta);
            localStorage.setItem('CVC', CVC);
            localStorage.setItem('fechaCaducidad', fechaCaducidad);

            alert('Datos guardados correctamente.');
            window.location.href = 'Login.html'; // Redirige al login
        }
    </script>
</head>

<body>
    <div id="background"> 
        <div id="title">
            <h1><img src="icon_manga.png" width="100px" height="100px" id="logo"> Registrarse</h1>
        </div>
        <p>Este proceso es necesario para poder realizar compras en nuestra tienda.</p>

        <div id="FORMS">
            <form id="registerForm" onsubmit="event.preventDefault(); saveFormData();">
                <div id="form1">
                    <h1 style="font-size: 24px;"> ➤ Datos Personales: </h1>
                    <table>
                        <tr>
                            <td><h2>Usuario:</h2></td>
                            <td><h2>Correo:</h2></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="usuario" id="smallform" oninput="validateForm()"></td>
                            <td><input type="text" name="correo" id="smallform" oninput="validateForm()"></td>
                        </tr>
                    </table>
                    <br>

                    <table>
                        <tr>
                            <td><h2>Contraseña:</h2></td>
                            <td><h2>Num. Teléfono:</h2></td>
                        </tr>
                        <tr>
                            <td><input type="password" name="pass" id="smallform" oninput="validateForm()"></td>
                            <td><input type="text" name="telefono" id="smallform" maxlength="10" oninput="charLimit(this); validateForm()" onkeypress="return onlyNumbers(event)"></td>
                        </tr>
                    </table>
                    <br>

                    <table>
                        <tr>
                            <td><h2>Nombre:</h2></td>
                            <td><h2>Edad:</h2></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="nombre" id="smallform" oninput="validateForm()"></td>
                            <td><input type="number" name="edad" id="smallform" oninput="validateForm()"></td>
                        </tr>
                    </table>
                </div>

                <div id="form2" style="display: none;">
                    <h1 style="font-size: 24px;"> ➤ Dirección: </h1>
                    <table>
                        <tr>
                            <td><h2>Calle:</h2></td>
                            <td><h2>Colonia:</h2></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="calle" id="smallform" oninput="validateForm()"></td>
                            <td><input type="text" name="colonia" id="smallform" oninput="validateForm()"></td>
                        </tr>
                    </table>
                    <br>

                    <table>
                        <tr>
                            <td><h2>Ciudad:</h2></td>
                            <td><h2>Número:</h2></td>
                            <td><h2>Código Postal:</h2></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="ciudad" id="tinyform" oninput="validateForm()"></td>
                            <td><input type="number" name="numero" id="tinyform" maxlength="4" oninput="charLimit(this); validateForm()"></td>
                            <td><input type="number" name="codigoPostal" id="tinyform" maxlength="5" oninput="charLimit(this); validateForm()"></td>
                        </tr>
                    </table>
                    <br>

                    <table>
                        <tr>
                            <td><h2>País:</h2></td>
                            <td><h2>Estado:</h2></td>
                        </tr>
                        <tr>
                            <td><input type="text" name="pais" id="smallform" oninput="validateForm()"></td>
                            <td><input type="text" name="estado" id="smallform" oninput="validateForm()"></td>
                        </tr>
                    </table>
                </div>

