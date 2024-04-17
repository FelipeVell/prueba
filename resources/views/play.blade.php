<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/estilo2.css">
	<link rel="stylesheet" type="text/css" href="css/estilo3.css">

	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Bungee+Spice&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

	<title>Galeria I</title>

    <style>
                *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
        font-family: 'Bungee Spice', sans-serif;
            font-family: 'Caveat', cursive;
            text-align:center ;
            background: #969696;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to top, #2c3e50, #5d5d5d);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to top, #2c3e50, #000000);
        }

        a{
            text-decoration: none;
        } 
        .parpadeo {
            animation: parpadeo 1s infinite alternate; /* Parpadeo */
            color:#fff;
        }

        @keyframes parpadeo {
            from {
                opacity: 1;
            }

            to {
                opacity: 0.5;
            }
        }
        .contenedor-principal{
            max-width: 1300px;
            max-height: 1300px;
            margin: 80px auto;
            display: flex;
            flex-direction: row;
            flex-wrap: wrap;
            justify-content: center; 
            margin-bottom: 90px;
        }

        .contenedor_tarjeta {
            margin: 25px;
            transition: transform 0.3s; /* Agregamos una transición para un cambio suave */
        }

        .contenedor_tarjeta:hover {
            transform: scale(1.2); /* Escalamos la tarjeta al pasar el mouse por encima */
        }

        .contenedor_tarjeta a{
            display: inline-block;
        }

        .contenedor_tarjeta:hover figure{
            transform: perspective(600px) rotateY(180deg);
        }

        .contenedor_tarjeta:hover figure img{
            filter: blur(2.5px);
        }

        figure {
            width: 330px;
            height: 465px;
            margin: 0;
            position: relative;
            transition: all ease 0.4s;
            transform-style: preserve-3d;
            transform: perspective(600px) rotateY(0deg);
        }

        figure .frontal,
        figure .trasera{
            width: 100%;
            height: 100%;
            border-radius: 10px;
        }

        figure .frontal{
            display: block;
            background: #000000;
        }

        figure .trasera{
            position: absolute;
            top: 0px;
            padding: 20px;
            color: white;
            transform: perspective(600PX) rotateY(180deg);
            backface-visibility: hidden; 
            background-color: rgba(0, 0, 0, 0.5); 
        }

        figure .trasera p{
            font-size: 15px;
            color: #FFFFFF;
            text-shadow: #ffffff 1px 0 10px;
        }

        figure .trasera h1{
            font-size: 25px;
            color: #FFFFFF;
            font-weight: 700;
            text-shadow: #ffffff 1px 0 10px;
        }

        hr{
            border: 0;
            height: 3px;
            background:linear-gradient(90deg, rgba(36,0,33,1) 0%, rgba(121,9,71,1) 50%, rgba(223,0,139,1) 100%);
            margin-bottom: 10px;
            margin-top: 10px;
        }

        h2{
            margin-top: 15px;
            display: inline-block;
            position: relative;
            font-size: 55px;
            color: #ffffff;
            text-shadow: 2px 2px 0px #afafaf, 5px 4px 0px rgba(255, 255, 255, 0.2);
        }

        h2::after,h2::before{
            content: '';
            position: absolute;
            width: 90px;
            height: 6px;
            background-color: rgb(34, 28, 145);
            top: 0.7em;
            transform: scale(1.0);
            transition: all 0.5s ease-in;
        }

        h2:hover::after,h2:hover::before{
            transform: scale(0);
        }

        h2::after{
            left: -100px;
        }

        h2::before{
            right: -100px;
        }

        .contenedor-boton .btn{
            display: inline-block;
            color: #fff;
            flex-direction: column;
            margin: 0;
            top: -200px;
            max-width: 1300px;
            align-items: center;
            font-size:30px ;
            animation: efecto 2s linear infinite; 
            transition: 0.8s ease;
        }

        .contenedor-boton .btn:hover{
            color: #170014;
            font-size: 22px;
            border: 2px solid #3B0033;
            background: #ffffff;
            animation: none;
        }
        @keyframes efecto{
            0%, 42%, 46%, 50%, 100%{
                opacity: 1;
            }
            43%, 45%, 47%, 48%, 50%{
                opacity: 0;
            } 
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
					<li><a href="{{ route('xbox') }}">Xbox</a></li>
					<li><a href="{{ route('welcome') }}">Página principal</a></li>
				</ul>
			</nav>
		</div>
	</header>

	<div class="titulo">
		<h2>Juegos Disponibles</h2>
	</div><br>
    <h1 class="parpadeo">Selecciona una carta para más información</h1>

	<div class="contenedor-principal">
		<div class="contenedor_tarjeta">
			<a href="https://www.playstation.com/es-mx/games/uncharted-4-a-thiefs-end/" class="enlace-card">
				<figure>
					<img src="imgsplay/uncharted.jpeg" class="frontal" alt="animales">
					<figcaption class="trasera">
						<h1>Uncharted 4</h1>
						<hr>
						<p>Drake’s Deception, se supone que Nathan Drake se retiró del mundo de los cazafortunas. Sin embargo, el destino no tarda en golpear su puerta cuando su hermano Sam reaparece en busca de ayuda para salvar su propia vida, una aventura demasiado tentadora e irresistible para Drake.  
                            Sam y Drake salen en busca del tesoro perdido del capitán Henry Avery y emprenden camino hacia Libertalia, una presunta colonia pirata utópica ubicada en lo profundo de los bosques de Madagascar. UNCHARTED 4: En A Thief’s End, los jugadores emprenden un viaje alrededor del mundo, en el que pasan por islas selváticas, ciudades remotas y picos nevados en busca del tesoro de Avery.</p>
					</figcaption>
				</figure>
			</a>

		</div>
		<div class="contenedor_tarjeta">
			<a href="https://www.playstation.com/es-mx/games/the-last-of-us-part-ii/" class="enlace-card" >
				<figure>
					<img src="imgsplay/tlou2.jpeg" class="frontal" alt="animales">
					<figcaption class="trasera">
						<h1>The Last Of Us Part 2</h1>
						<hr>
						<p> 
                            Cinco años después de su peligroso viaje a través de unos Estados Unidos pospandemia, Ellie y Joel logran establecerse en Jackson, Wyoming. Vivir entre una próspera comunidad de sobrevivientes les ha concedido paz y estabilidad, a pesar de la amenaza constante de los infectados y de otros sobrevivientes más desesperados. 
                            Cuando un evento violento interrumpe esa paz, Ellie se embarca en un viaje incesante para obtener justicia y llegar a un cierre. A medida que caza a los responsables uno por uno, deberá enfrentarse a las devastadoras repercusiones físicas y emocionales de sus acciones.
                        </p>
					</figcaption>
				</figure>
			</a>
			
		</div>
		<div class="contenedor_tarjeta">
			<a href="https://www.playstation.com/es-mx/games/bloodborne/" class="enlace-card">
				<figure>
					<img src="imgsplay/blood.jpeg" class="frontal" alt="animales">
					<figcaption class="trasera">
						<h1>Bloodborne</h1>
						<hr>
						<p> Enfrenta tus pesadillas mientras buscas respuestas en la antigua ciudad de Yharnam, ahora maldecida por una enfermedad endémica que se propaga por las calles como un fuego arrasador. El peligro, la muerte y la locura merodean en cada esquina de este mundo oscuro y espantoso, y debes descubrir sus secretos más oscuros para poder sobrevivir.</p>
					</figcaption>
				</figure>
			</a>
			
		</div>
		<div class="contenedor_tarjeta">
			<a href="https://www.playstation.com/es-mx/games/death-stranding/" class="enlace-card">
				<figure>
					<img src="imgsplay/deadstrading.jpeg" class="frontal" alt="animales">
					<figcaption class="trasera">
						<h1>Dead Strading</h1>
						<hr>
						<p>En este mundo distópico, Sam Porter Bridges, un portador (personas que reparten suministros), deberá cruzar Estados Unidos de este a oeste para reconectar el país con la Red Quiral, un red que permite el envío de grandes cantidades de información al instante, y así poder evitar la extinción de la humanidad.</p>
					</figcaption>
				</figure>
			</a>
			
		</div>
        <div class="contenedor_tarjeta">
			<a href="https://www.playstation.com/es-mx/games/ghost-of-tsushima/" class="enlace-card">
				<figure>
					<img src="imgsplay/ghost.jpeg" class="frontal" alt="animales">
					<figcaption class="trasera">
						<h1>Ghost of Tsushima</h1>
						<hr>
						<p> Descubre las maravillas ocultas de Tsushima en esta aventura de acción en un mundo abierto creada por Sucker Punch Productions y PlayStation Studios, disponible en PS5 y PS4.
                            Forja un nuevo camino y emplea tácticas de guerra poco convencionales para liberar Tsushima. Desafía a tus enemigos con tu katana, domina el arco para eliminar las amenazas lejanas, aprende tácticas de sigilo para emboscar a los enemigos y explora una nueva historia en la Isla Iki.</p>
					</figcaption>
				</figure>
			</a>
			
		</div>
        <div class="contenedor_tarjeta">
			<a href="https://www.playstation.com/es-mx/games/marvels-spider-man-2/" class="enlace-card">
				<figure>
					<img src="imgsplay/spiderman.jpg" class="frontal" alt="animales">
					<figcaption class="trasera">
						<h1>Spider-Man 2</h1>
						<hr>
						<p> Peter Parker y Miles Morales han cambiado desde sus juegos anteriores, por lo tanto, también su estilo de juego. Ya sea que sea tu primer acercamiento o aun si ya eres prácticamente una araña que conoce todos sus trucos, hay muchas cosas que te atraparán.

                            Los accesorios de los trepamuros han sido mejorados para integrarse aún mejor al sistema de combos, lo que le agrega toque adicional a la diversión improvisada que te hace sentir como un verdadero Spider-Man, ya que puedes comenzar combos aéreos cuando lanzas por los aires a un enemigo con el Golpe de simbionte o puedes juntar a tus desafortunados oponentes con la Telaraña de captura y encadenarla con más ataques.</p>
					</figcaption>
				</figure>
			</a>
		</div>
	</div>
	<div class="contenedor-boton">
    <a href="{{ route('welcome') }}" class="btn">Regresar al inicio</a>
	</div><br>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        // Obtén todos los enlaces con la clase enlace-card
        const enlaces = document.querySelectorAll('.enlace-card');

        // Itera sobre cada enlace
        enlaces.forEach(enlace => {
        // Agrega un event listener para el clic en cada enlace
        enlace.addEventListener('click', function(event) {
            // Evita el comportamiento predeterminado del enlace (navegar a otra página)
            event.preventDefault();

            // Muestra el Sweet Alert de confirmación
            Swal.fire({
                title: '¿Estás seguro?',
                text: 'Se redirigirá a la página oficial de PlayStation para obtener más información acerca del juego',
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sí, continuar'
            }).then((result) => {
                // Si el usuario hace clic en el botón de confirmar, puedes redirigirlo o realizar otra acción
                if (result.isConfirmed) {
                    // Aquí puedes agregar la acción que deseas realizar
                    window.location.href = enlace.href; // Redirige al enlace
                }
                });
            });
        });
    </script>
</body>
</html>