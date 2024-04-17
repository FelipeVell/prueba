<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="css/estilo6.css">
	<link rel="stylesheet" type="text/css" href="css/estilo3.css">

	<link href='https://unpkg.com/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
	<title>Portada</title>

  <style>
        *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    /* Define la animación */
    @keyframes fadeAndGrow {
      from {
          opacity: 0.2;
          transform: scale(0.5);
      }
      to {
          opacity: 1;
          transform: scale(1.2);
      }
    }

    /* Aplica la animación a tu contenedor */
    .contenedor.head {
      animation: fadeAndGrow 2s ease-in-out infinite alternate;
      max-width: 80%;
    }

    body{
      font-family: "Arial Black";
      font-weight: 400;
      font-style: normal;

      background: #000000;  /* fallback for old browsers */
    }

    a {
        color: #ffffff;
    }

    .menu-navegacion {
        max-width: 70%;
        background: #1900ff;  
      background: -webkit-linear-gradient(to right, #24243e, #302b63, #0f0c29); 
      background: linear-gradient(to right, #24243e, #302b63, #0f0c29); 
    }

    :root{
    scroll-behavior: smooth;
    }

    .contenedor{
      width: 90%;
      max-width: 1200px;
      overflow: hidden;
      margin: auto;
      padding: 60px 0;
    }

    .header{
      height: 100vh;
      background-image: linear-gradient(to top, rgba(0, 0, 0, 0.486) 0%, hsla(218, 68%, 79%, 0.514) 100%), url(../img/FondoVid.jpg);
      background-repeat: no-repeat;
      background-position: center;
      background-size: cover;
      animation: movimiento 7s infinite linear alternate;

    }

    @keyframes movimiento{
    from{
      background-position: bottom left;
    }to{
      background-position: top right;
    }
}

    .head{
      padding: 0;
      height: 100%;
      display: flex;
      flex-direction: column;
      justify-content: center;
      text-align: center;
      color: #ffffff;
      text-shadow: 10px 10px 10px rgb(0, 0, 0);
    }

    .hamburgues{
      position: flex;
      top: 30px;
      right: 30px;
      background: #ffffff;
      width: 40px;
      height: 40px;
      cursor: pointer;
      border-radius: 10px;
      box-shadow: 0 0 6px rgba(255, 0, 0, 0.5);
    }

    .menu-navegacion{
      position: fixed;
      top: 0;
      width: 31vw;
      height: 100%;
      background-image: linear-gradient(to top, #2c0092 0%, #0c0025 100%);
      background-image: linear-gradient(135deg, #2b008e 0%, #69004b 100%);
      display: fLex;
      flex-direction: column;
      justify-content: space-evenLy;
      align-items: center;
      right: 0;
      transform : transLateX(120%) ;
      transition: transform 0.35s ease-in-out;
      box-shadow: 0 0 6px rgba(255, 0, 0, 0.5);
      }
      .spread {
        transform: transLateX(0); 
      }

      .menu-navegacion a{
          text-decoration :none;
          color: rgb(103, 32, 203);
          font-size: 22px;
      }

      .titulo{
        font-size: 62px;
        font-weight: 700;
      }

      .copy {
        color: #ffffff;
        font-size: 42px;
        text-aLign: center;
      }

      .subtitulo {
        color: #ffffff;
        font-size: 45px;
        text-align: center;
        font-weight: 499;
        margin-bottom: 50px;
      }

      .contenedor-servicio{
        display: fLex;
        justify-content: space-evenLy;
        align-items: center;
        flex-wrap: wrap;
        margin-bottom: 50px;

      }

      .contenedor-servicio img{
        width: 35%;
      }

      .checklist-servicio{
        width: 40%;
      }

      .n-service{
        margin-bottom: 7px;
        color: #ffffff;
      }

      .number{
        display: inLine-bLock;
        background-image: linear-gradient(135deg, #2b008e 0%, #69004b 100%);
        Line-height: 39px;
        text-aLign: center;
        border-radius: 50%;
        margin-right: 5px;
        width: 36px;
        height: 30px;
        color: #ffffff;
      }

      .p{
        margin-bottom: 7px;
        color: #dddcff;
      }

      .gallery{
        background: #969696;  /* fallback for old browsers */
        background: -webkit-linear-gradient(to top, #2c3e50, #5d5d5d);  /* Chrome 10-25, Safari 5.1-6 */
        background: linear-gradient(to top, #2c3e50, #000000); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
        

      }
      .contenedor-galeria{
        display: flex;
        flex-wrap: wrap;
        margin-top: 30px;
      }

      .img-consola{

        justify-content: center;
        padding: 20px;
        gap: 0px; /* Espacio entre las imágenes */
      }

      .img-consola a {
        text-decoration: none; /* Quita el subrayado del enlace */
      }

      .img-galeria{
        align-items: center;
        justify-content: center;
        width:40%;
        margin-bottom: 15px;
        box-shadow: 0 0 6px rgba(0, 0, 0, 0.6);
        transition: transform 0.2s ease;
      }



      .img-galeria:hover {
        transform: scale(1.1); 
        box-shadow: 0 0 15px rgba(255, 255, 255, 0.8); 
      }


    .imagenes-ligth{
      position: fixed;
      display: flex;
      align-items: center;
      justify-content: center;
      width: 100%;
      height: 100%;
      top: 0;
      left: 0;
      background: rgba(0, 0, 0, 0.53);
      transform: translate(120%);
      transform: transform 0.2s ease-in-out;
    }
    .agregar-imagen{
      width: 60%;
      transform: scale(0);
      border-radius: 10px;
      transform: transfom 0.3s 0.2s;
    }

    .showImage{
      transform: scale(1.0);
    }
    .show{
      transform: translate(0);
    }
    .close{
      position: absolute;
      top: 15px;
      right: 15px;
      width: 40px;
      cursor: pointer;
    }
      .showImage{
      transform: scale(1.0);
    }
    .show{
      transform: translate(0);
    }
    .close{
      position: absolute;
      top: 15px;
      right: 15px;
      width: 40px;
      cursor: pointer;
    }
    .experts{
      width: 100%;
      display: flex;
      justify-content: space-evenly;
      align-items: center;
    }
    .contenedor-expert{
      width: 30%;
      text-align: center;
      margin-bottom: 20px;

    }
    .contenedor-expert img{
      display: block;
      margin: auto;
      width: 90%;
    }

    footer{
      background: #16222A;  /* fallback for old browsers */
      background: -webkit-linear-gradient(to top, #3A6073, #16222A);  /* Chrome 10-25, Safari 5.1-6 */
      background: linear-gradient(to top, #3A6073, #000000); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
      
      padding-bottom: 0.2px;
    }
    .footer-contect{
      display: flex;
      justify-content: space-between;
      align-items: center;
      flex-wrap: wrap;
      padding-top: 45px;
      padding-bottom: 40px;
    }
    .contact-us{
      width: 40%;
      color: #fff;
    }
    .brand{
      font-size: 45px;
      font-weight: 500;
    }
    .brand+p{
      font-size: 25px;
    }

    .container-map {
      border-radius: 10px;
      overflow: hidden; 
      width: 800px; 
      height: 300px; 
      margin: 0 auto;
    }

    .container-map iframe {
      width: 100%;
      height: 100%;
      border: 0;
    }

    ::-webkit-scrollbar {
      width: 12px; 
      border-radius: 8px; 
    }

    ::-webkit-scrollbar-track {
      background: #0f0c29; 
    background: -webkit-linear-gradient(to bottom, #24243e, #302b63, #0f0c29);  
    background: linear-gradient(to bottom, #24243e, #302b63, #0f0c29);

    }

    ::-webkit-scrollbar-thumb {
      background: #bdc3c7;  
      background: -webkit-linear-gradient(to top, #2c3e50, #ffffff);  
      background: linear-gradient(to top, #2c3e50, #ffffff); 

      border-radius: 8px; 
    }

    ::-webkit-scrollbar-thumb:hover {
      background: #ffffff; 
    }

    h3{
      color: #bdc3c7;
    }


    .icon {
      font-size: 200px; /* Tamaño del icono */
      color: white; /* Color del icono */
    }

    .icon2 {
      font-size: 100px;
      transition: transform 0.3s ease-in-out;
    }
    /* Define el tamaño grande cuando el mouse está sobre el icono */
    .icon2:hover {
      transform: scale(1.5);
    }

  </style>
  <style>
        *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body{

      background-position: center;
      background-repeat: no-repeat;
      background-size: 400vh;
    }
    hr{
      border: 0;
      height: 3px;
      max-width: 80%;
      background:linear-gradient(90deg, rgb(255, 255, 255) 0%, rgb(116, 116, 116) 50%, rgb(255, 255, 255) 100%);

    }

    .content-all{
      width: 220px;
      margin: auto;
      perspective: 820px;
      position: relative;
      margin-top: 100px;
    }

    .content-mov{
      width: 100px;
      position: absolute;
      animation: rotar 20s infinite linear;
      transform-style: preserve-3d;
    }

    .content-mov:hover{
      animation-play-state: paused;
      cursor: pointer	;
    }

    .content-mov figure{
      width: 220%;
      height: 130px;
      overflow: hidden;
      position: absolute;
      box-shadow: 0px 0px 20px 0px black;
      transition: all 300ms;
    }

    .content-mov figure:hover{
      box-shadow: 0px 0px 20px 0px white;
      transition: all 300ms;
    }

    .content-mov figure:nth-child(1){transform: rotateY(0deg) translateZ(300px);}
    .content-mov figure:nth-child(2){transform: rotateY(40deg) translateZ(300px);}
    .content-mov figure:nth-child(3){transform: rotateY(80deg) translateZ(300px);}
    .content-mov figure:nth-child(4){transform: rotateY(120deg) translateZ(300px);}
    .content-mov figure:nth-child(5){transform: rotateY(160deg) translateZ(300px);}
    .content-mov figure:nth-child(6){transform: rotateY(200deg) translateZ(300px);}
    .content-mov figure:nth-child(7){transform: rotateY(240deg) translateZ(300px);}
    .content-mov figure:nth-child(8){transform: rotateY(280deg) translateZ(300px);}
    .content-mov figure:nth-child(9){transform: rotateY(320deg) translateZ(300px);}
    .content-mov figure:nth-child(10){transform: rotateY(360deg) translateZ(300px);}

    .content-mov img{
      width: 100%;
      transition: all 300ms;
    }

    .content-mov img:hover{
      transform: scale(1.2);
      transition: all 600ms;
    }
    @keyframes rotar{
      from{
        transform: rotateY(0deg);
      }
      to{
        transform: rotateY(400deg);
      }
    }

    .container{
      margin: 0;
      background: #16222A;  /* fallback for old browsers */
      background: -webkit-linear-gradient(to top, #3A6073, #16222A);  /* Chrome 10-25, Safari 5.1-6 */
      background: linear-gradient(to top, #3b3e6e, #000000); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
    }

    .header{
      max-width: 100%;
    }

    .header a{
      color: rgb(98, 119, 182);
      text-decoration: none;
    }

    .logo-nav-container{
      display: flex;
      justify-content: space-between;/distribuye de forma automatica/
      align-items: center;
    }

    .logo{
      letter-spacing: 5px;
      font-size: 1.5em;
      margin-left: 45px;
    }

    .navigation ul{
      margin: 0;
      padding: 0;
      list-style: none;
    }
    .navigation ul li{
      display: inline-block;
    }
    .navigation ul li a{
      display: block;
      padding: 0.5rem 1rem;
      text-replace: all 0.6s linear;
      border-radius: 5px;
    }
    .navigation ul li a:hover{
      background: #469DA0;
        color: #FFFFFF;
    }

    footer{
      width: 100%;
      font-family: "Arial", sans-serif;	

    }
    .footer-container{
      width: 100%;
      margin-top: 380px;
    background: #780206;  /* fallback for old browsers */
    background: -webkit-linear-gradient(to right, #061161, #780206);  /* Chrome 10-25, Safari 5.1-6 */
    background: linear-gradient(to right, #061161, #780206); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


    color: white;
    }
    .footer-main{
      width: 98%;
      max-width: 1000px;
      margin: auto;
      padding: 55px 0;
      display: flex;
      flex-wrap: wrap;
    }
    .footer-main .footer-columna{
      width: calc(100%/3);
      text-align: justify;
    }
    .footer-main .footer-columna:nth-child(2){
      padding: 0 25px;

    }

    .footer-main .footer-columna h4{
      font-size: 35px;
      color:red;
      margin-bottom:20px;
    }

    .footer-main .footer-columna input [type="email"]{
      border: none;
      width: 100%;
      border:2px solid white ;
      font-size: 19px;n
    }

  </style>
</head>
<body>
	<header class="header">
		<div class="container logo-nav-container">
			<a href="#1" class="logo"></a>
			<nav class="navigation">
				<ul>
					<li><a href="{{ route('formulario') }}">Contáctanos</a></li>
					<li><a href="{{ route('play') }}">Playstation</a></li>
					<li><a href="{{ route('xbox') }}">Xbox</a></li>
				</ul>
			</nav>
		</div>
		<div class="contenedor head">
			<h1 class="titulo">Tus videojuegos Favoritos</h1>
			<p class="copy">A menor precio</p>
		</div>
	</header>


	<!-- segunda fase -->

		<section class="gallery" id="galeria">
			<div class="contenedor">
				<h2 class="subtitulo">Playstation & Xbox</h2>
				<center>

					<div class="img-consola">
            <a href="{{ route('play') }}">
							<img src="img/play.jpg" alt="luces de noche" class="img-galeria" onmouseenter="playAudio('sonido1')" onmouseleave="pauseAudio('sonido1')">
						</a>
						&emsp;&emsp;&emsp;
						<a href="{{ route('xbox') }}">
							<img src="img/xbox.jpg" alt="luces de noche" class="img-galeria" onmouseenter="playAudio('sonido1')" onmouseleave="pauseAudio('sonido1')">
						</a>
					</div>
				</center>

				<audio id="sonido1">
					<source src="audio/sonido1.mp3" type="audio/mpeg">
					Tu navegador no soporta el elemento de audio.
				</audio>

				
				<audio id="sonido2">
					<source src="audio/sonido1.mp3" type="audio/mpeg">
					Tu navegador no soporta el elemento de audio.
				</audio>
			</div>
		</section>

		<div class="imagenes-ligth">
			<img src="img/close.svg" alt="close" class="close">

			<img src="" alt="" class="agregar-imagen">
		</div>

		<section class="contenedor" id="expertos">
			<h2 class="subtitulo">Reserva ahora!!</h2>
			<center><h3>Métodos de pago:</h3></center><br>
			<section class="experts">
				<div class="contenedor-expert">
					<i class="bi bi-paypal icon"></i>
					<h3>PayPal</h3>
				</div>
				<div class="contenedor-expert">
					<i class="bi bi-credit-card icon"></i>
					<h3>Tarjetas de Crédito</h3>
				</div>
				<div class="contenedor-expert">
					<i class="bi bi-google-play icon"></i>
					<h3>Google Play</h3>
				</div>
			</section>
		</section>

		
		
	</main>
	
	<footer id="footer">		
		<div class="contenedor footer-content">
			<div class="contact-us">
				<h2 class="brand">Visítanos en:</h2>
			</div>
			<!-- <div class="social">
				<a href="#7" class="social-media">
					<i class="bx bxl-facebook"></i>
				</a>
				<a href="#8" class="social-media">
					<i class="bx bxl-twitter"></i>
				</a>
				<a href="#8" class="social-media">
					<i class="bx bxl-instagram"></i>
				</a>
			</div> -->
		</div>
		<div class="linea"></div>
		<br>

		<div class="container-map">
			<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15065.894500985236!2d-99.6291818!3d19.261759!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85cd8bd472f28543%3A0x8c820f9e09beb655!2sUniversidad%20IUEM!5e0!3m2!1ses!2smx!4v1709842084008!5m2!1ses!2smx" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div><br><br><br><br>
		<center><hr></center>
		<section class="contenedor" id="expertos">
			<h2 class="subtitulo">Redes Sociales</h2>
			<section class="experts">
				<div class="contenedor-expert">
					<a href="https://www.facebook.com/playstation/?locale=es_LA" class="social-media">
						<i class="bx bxl-facebook icon2"></i>
					</a>
				</div>
				<div class="contenedor-expert">
					<a href="https://twitter.com/PlayStation" class="social-media">
						<i class="bx bxl-twitter icon2"></i>
					</a>
				</div>
				<div class="contenedor-expert">
					<a href="https://www.instagram.com/xboxmexico/?hl=es-la" class="social-media">
						<i class="bx bxl-instagram icon2"></i>
					</a>
				</div>
				<div class="contenedor-expert">
        <a href="{{ route('formulario') }}" class="social-media">
						<i class="bi bi-envelope icon2"></i>
					</a>
				</div>
			</section>
		</section>

	</footer>
	
	<script type="js/menu.js"></script>
	<script type="js/ligthbox.js"></script>

	<script>
		function playAudio(audioId) {
			var audio = document.getElementById(audioId);
			audio.play();
		}

		function pauseAudio(audioId) {
			var audio = document.getElementById(audioId);
			audio.pause();
		}
	</script>
</body>
</html>