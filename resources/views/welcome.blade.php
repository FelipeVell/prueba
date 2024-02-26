<!DOCTYPE html>
<html lang="es">
  <meta charset="UTF-8">
  <head>
  <!-- Otras etiquetas head -->
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.5/xlsx.full.min.js"></script>
</head>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title> X. Es lo que esta pasando / X</title>
  <link rel="icon" href="img/Twitter-X.jpg" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="estiloind.css">
    <style>
      body {
        zoom: 90%;
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #000;
        color: #fff;
        display: flex;
        align-items: stretch;
        justify-content: center;
        min-height: 100vh;
      }
      /*Iniciar Secion*/
      .modal {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        justify-content: center;
        align-items: center;
      }

      .modal-content {
        font-family: inherit;
        color: rgb(231, 233, 234);
        background-color: #000;
        padding: 75px;
        border-radius: 10px;
        max-width: 400px;
        margin: 0 auto;
        text-align: center;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
      }

      .modal-content button {
        font-family:"Google Sans",arial,sans-serif;
        margin-bottom: 10px;
        padding: 10px;
        font-size: 16px;
        cursor: pointer;
        background-color: #fff;
        color: #3c4043;
        border: none;
        border-radius: 20px;
        width: 300px;
      }

      .modal-content input {
        box-sizing: border-box;
        background-color: rgba(0,0,0,0.00);
        width: 100%;
        color: rgb(231, 233, 234);
        font-size: 17px;
        font-weight: 400;
        line-height: 24px;
      }

      .modal-content select {
        width: 33%;
        padding: 10px;
        margin: 10px 0;
      }

      .modal-content .textbox {
        width: 100%;
        padding: 10px;
        margin: 10px 0;
      }

      .modal-content .combobox-container {
        display: flex;
        justify-content: space-between;
      }

      .modal-content .button {
        background-color: white;
        color: rgb(15, 20, 25);
        font-family: TwitterChirp, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
        line-height: 20px;
        word-wrap: break-word;
        text-align: center;
        font-size: 15px;

        font-weight: 700;
        border: none;
        padding: 10px;
        cursor: pointer;
        border-radius: 5px;
      }

      .modal-content .close-button {
        background-color: #4285f4;
        color: #fff;
        border: none;
        padding: 10px;
        margin-top: 10px;
        cursor: pointer;
        border-radius: 5px;
        position: absolute;
        top: 10px;
        right: 10px;
        width: 70px;
      }


      .title{
          im
      }

      .combobox-container select{
        font-family: TwitterChirp, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
        background-color: rgb(0, 0, 0);
        color: rgb(231,233,234);
        scrollbar-color: rgb(62, 65, 68) rgb(22, 24, 28);
      }

      .container {
        display: flex;

        max-width: 100%;
        max-height: 100%;
        background-color: #000;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 0 10px rgba(255, 255, 255, 0.1); 
      }

      .left-side {
        flex: 1;
        max-height: 100vh;
        overflow: hidden;
      }

      .left-side img {
          width: 50%;
          height: 50%;
          padding:100px;
          object-fit: cover;
          display: block; /* Para asegurar que los márgenes automáticos funcionen correctamente */
          margin-left: auto;
          margin-right: auto;
          object-fit: cover;
          margin-top: 100px;
      }

      .right-side {
        width: 80%;
        height: 80%;
        flex: 1;
        padding: 20px;
        display: flex;
        flex-direction: column;
        justify-content: center;
      }

      .right-side h2 {
        font-family: "TwitterChirpExtendedHeavy","Verdana",-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Helvetica,Arial,sans-serif;
        text-overflow: unset;
        font-size: 64px;
        font-weight: 700;
        margin-top: 0;
        color: rgb(231, 233, 234);
      }
      .right-side h4{
        background-color: rgba(0,0,0,0.00);
        border: 0 solid black;
        box-sizing: border-box;
        color: inherit;
        display: inline;
        font: inherit;
        list-style: none;
        margin: 0px;
        padding: 0px;
        text-align: inherit;
        text-decoration: none;
        white-space: inherit;
        word-wrap: break-word;
        text-overflow: unset;
        color: rgb(231, 233, 234);
        line-height: 36px;
        font-family: "TwitterChirpExtendedHeavy","Verdana",-apple-system,BlinkMacSystemFont,"Segoe UI",Roboto,Helvetica,Arial,sans-serif;
        font-weight: 700;
      font-size: 31px;
      }

      .button-container {
        width: 45%;
        height: 45%;
        margin-top: 20px;
        display: flex;
        flex-direction: column;
      }

      .button-container button {
        font-family:"Google Sans",arial,sans-serif;
        margin-bottom: 10px;
        padding: 10px;
        font-size: 16px;
        cursor: pointer;
        background-color: #fff;
        color: #3c4043;
        border: none;
        border-radius: 20px;
        }
        .button-container a{
        color:rgb(29, 155, 240);
      }

      .register-link,
      .login-link {
        text-align: center;
        margin-top: 20px;
      }

      footer {
        font-family: TwitterChirp, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
        color: rgb(113, 118, 123);
        text-align: center;
        padding: 10px;
        background-color: #000;
        position: absolute;
        bottom: 0;

        padding: 20px; /* Ajusta el relleno según sea necesario */
        text-align: center; /* Centra el texto en el footer */
        width: 100%; /* Asegura que el footer ocupe todo el ancho de la página */
        position: fixed; /* Fija la posición del footer */
        bottom: 0; /* Lo coloca en la parte inferior de la ventana del navegador */
        left: 0; /* Alinea el footer a la izquierda */
        right: 0; /* Alinea el footer a la derecha */
      }
      footer a{
        font-family: TwitterChirp, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif;
            padding-right: 16px;
        color: rgb(113, 118, 123);
      }
      .google-button {
        font-family: "Google Sans", Arial, sans-serif;
        margin-bottom: 10px;
        padding: 20px;
        font-size: 20px;
        cursor: pointer;
        background-color: #fff;
        color: #3c4043;
        border: none;
        border-radius: 20px;
        background-image: url('img/google.png'); /* Reemplaza 'ruta_de_tu_imagen_icono.png' con la ruta de tu imagen */
        background-repeat: no-repeat;
        background-position: 65px center; /* Ajusta la posición del icono según sea necesario */
        background-size: 20px; /* Ajusta el tamaño del icono según sea necesario */
      }
      .google-button2 {
        font-family: "Google Sans", Arial, sans-serif;
        margin-bottom: 10px;
        padding: 20px;
        font-size: 20px;
        cursor: pointer;
        background-color: #fff;
        color: #3c4043;
        border: none;
        border-radius: 20px;
        background-image: url('img/google.png'); /* Reemplaza 'ruta_de_tu_imagen_icono.png' con la ruta de tu imagen */
        background-repeat: no-repeat;
        background-position: 20px center; /* Ajusta la posición del icono según sea necesario */
        background-size: 20px; /* Ajusta el tamaño del icono según sea necesario */
      }

      .apple-button{
        font-family: "Google Sans", Arial, sans-serif;
        margin-bottom: 10px;
        padding: 20px;
        font-size: 20px;
        cursor: pointer;
        background-color: #fff;
        color: #3c4043;
        border: none;
        border-radius: 20px;
        background-image: url('img/apple.png'); /* Reemplaza 'ruta_de_tu_imagen_icono.png' con la ruta de tu imagen */
        background-repeat: no-repeat;
        background-position: 65px center; /* Ajusta la posición del icono según sea necesario */
        background-size: 20px; /* Ajusta el tamaño del icono según sea necesario */
      }
      .apple-button2{
        font-family: "Google Sans", Arial, sans-serif;
        margin-bottom: 10px;
        padding: 20px;
        font-size: 20px;
        cursor: pointer;
        background-color: #fff;
        color: #3c4043;
        border: none;
        border-radius: 20px;
        background-image: url('img/apple.png'); /* Reemplaza 'ruta_de_tu_imagen_icono.png' con la ruta de tu imagen */
        background-repeat: no-repeat;
        background-position: 20px center; /* Ajusta la posición del icono según sea necesario */
        background-size: 20px; /* Ajusta el tamaño del icono según sea necesario */
      }
      
      
    </style>
<body>
<div class="container">
  <div class="left-side">
    <img src="img/Twitter-X.jpg">
  </div>
  <div class="right-side">
    <h2>Lo que está pasando ahora</h2>
    <h4>Unete Hoy</h4>
      <div class="button-container">
        <button class="google-button"> Regístrate con Google</button>
        <button class="apple-button"> Registrate con Apple</button>

        <p>------------------------------- o -------------------------------</p>

        <button onclick="showRegisterModal()" style="background-color: rgb(29, 155, 240); color: white;">Crear cuenta</button>
        <p style=" font-size: 13px;">
        Al registrarte, aceptas los <a href="#" >Términos de servicio</a> y <a href="#">la Política de privacidad</a> , incluida la política de <a href="#">Uso de Cookies</a>.
        </p>
        <p>¿Ya tienes una cuenta?</p>

        <button onclick="showModal()" style="background-color: rgba(0,0,0,0.00); border: rgb(83, 100, 113) solid; color: rgb(29, 155, 240);">Iniciar sesión</button>
      </div>
  </div>
  <!---------------------------------  Iniciar Secion -->
  <div id="myModal" class="modal">
    <div class="modal-content">
      <img src="img/Twitter-X.jpg" alt="Imagen Modal" style="width: 20%;">

      <p style=" font-size: 31px;">Inicia sesión en X</p>

      <button class="google-button2">Iniciar sesión con Google</button><br>
      <button class="apple-button2">Iniciar sesión con Apple</button>

       <p>----------------------------- O ----------------------------------</p>
      
      <input type="text" placeholder="Teléfono, correo electrónico o nombre" style="max-width: 70%;  "><br><br>

      <button  >Siguiente</button><br>
      <button  style="background-color: rgba(0,0,0,0.00);
      border: rgb(83, 100, 113) solid; color: rgb(239, 243, 244) ;">¿Olvidaste tu contraseña?</button><br><br>
      <p style="color: rgb(113, 118, 123);">¿No tienes una cuenta?</p>
       <a href="#" style="color: rgb(29, 155, 240);">Regístrate</a><br><br>
       <button class="close-button" onclick="hideModal()" style="">Cerrar</button>
    </div>
  </div>
  <!---------------------------------------------------- Crear Cuenta ---->
  <div id="registerModal" class="modal">
    <div class="modal-content">
      <button class="close-button" onclick="hideRegisterModal()">X</button>
      <img src="img/Twitter-X.jpg" alt="Imagen Modal" style="width: 10%;">
      <p style="font-size: 31px; font-family:Arial Black; text-align: left;" >Crea tu cuenta</p>

      <form action="{{ route('send.emails') }}" method="POST">
        @csrf
        <input type="text" placeholder="Nombre" class="textbox" id="nombre" name="nombre" >
        <input type="email"  placeholder="Correo electrónico" class="textbox" id="email" name="email" required>
        
        <p style="font-size: 15px; font-family:Arial Black; text-align: left;">Fecha de nacimiento</p>
        <p style="font-family:Segoe UI, Roboto, Helvetica, Arial, sans-serif; ;color: rgb(113, 118, 123); text-align: left;">Esta información no será pública. Confirma tu propia edad, incluso si esta cuenta es para una empresa, una mascota u otra cosa.</p>

        <div class="combobox-container">
          <select >
            <option value="enero">enero</option>
            <option value="febrero">febrero</option>
            <option value="marzo">marzo</option>
            <option value="abril">abril</option>
            <option value="mayo">mayo</option>
            <option value="junio">junio</option>
            <option value="julio">julio</option>
            <option value="agost">agost</option>
            <option value="septiembre">septiembre</option>
            <option value="octubre">octubre</option>
            <option value="noviembre">noviembre</option>
            <option value="diciembre">diciembre</option>
          </select>
          <select >
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
            <option value="9">9</option>
            <option value="10">10</option>
            <option value="11">11</option>
            <option value="12">12</option>
            <option value="13">13</option>
            <option value="14">14</option>
            <option value="15">15</option>
            <option value="16">16</option>
            <option value="17">17</option>
            <option value="18">18</option>
            <option value="19">19</option>
            <option value="20">20</option>
            <option value="21">21</option>
            <option value="22">22</option>
            <option value="23">23</option>
            <option value="24">24</option>
            <option value="25">25</option>
            <option value="26">26</option>
            <option value="27">27</option>
            <option value="28">28</option>
            <option value="29">29</option>
            <option value="30">30</option>
            <option value="31">31</option>
          </select>
          <select >
            <option value="opcja">Opción X</option>
            <option value="opcjb">Opción Y</option>
            <option value="opjcc">Opción Z</option>
          </select>
        </div><br><br>
        <button type="submit" class>Aceptar</button>
      </form>
    </div> 
  </div>
</div>

<div class="hola">
  <footer>
      <a href="#">Información</a>
      <a href="#">Descarga la app de X</a>
      <a href="#">Centro de Ayuda</a>
      <a href="#">Condiciones de Servicio</a>
      <a href="#">Política de Privacidad</a>
      <a href="#">Política de cookies</a>
      <a href="#">Accesibilidad</a>
      <a href="#">Información de anuncios</a>
      <a href="#">Blog</a>
      <a href="#">Estado</a>
      <a href="#">Empleos</a>
      <a href="#">Recursos para marcas</a>
      <a href="#">Publicidad</a>
      <a href="#">Marketing</a>
      <a href="#">X para empresas</a>
      <a href="#">Desarrolladores</a>
      <a href="#">Guía</a>
      <a href="#">Configuración</a>
      <a href="#">© 2024 X Corp.</a>
    </footer>
</div>
 

    <script>
    function showModal() {
      document.getElementById("myModal").style.display = "flex";
    }

    function hideModal() {
      document.getElementById("myModal").style.display = "none";
    }

    function showRegisterModal() {
      document.getElementById("registerModal").style.display = "flex";
    }

    function hideRegisterModal() {
      document.getElementById("registerModal").style.display = "none";
    }
    // Función para ejecutar al hacer clic en el botón "Siguiente"
    function guardarEnExcel() {
      // Obtener los valores de los campos de entrada
      var nombre = document.querySelector('input[placeholder="Nombre"]').value;
      var correo = document.querySelector('input[placeholder="Correo electrónico"]').value;
      var mes = document.querySelector('.combobox-container select:nth-child(1)').value;
      var dia = document.querySelector('.combobox-container select:nth-child(2)').value;
      var opcion = document.querySelector('.combobox-container select:nth-child(3)').value;

      // Crear un objeto con los datos
      var datos = {
        Nombre: nombre,
        'Correo electrónico': correo,
        Mes: mes,
        Día: dia,
        Opción: opcion
      };

      // Crear una matriz con los encabezados de columna
      var encabezados = ['Nombre', 'Correo electrónico', 'Mes', 'Día', 'Opción'];

      // Crear una matriz con los valores
      var valores = [encabezados.map(function (encabezado) { return datos[encabezado]; })];

      // Crear un libro de trabajo de Excel
      var libro = XLSX.utils.book_new();
      var hoja = XLSX.utils.aoa_to_sheet(valores);

      // Añadir la hoja al libro de trabajo
      XLSX.utils.book_append_sheet(libro, hoja, 'Datos');

      // Descargar el archivo Excel
      XLSX.writeFile(libro, 'datos.xlsx');
    }
  </script>
</body>
</html>