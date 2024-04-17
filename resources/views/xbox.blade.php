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
					<li><a href="{{ route('play') }}">PlayStation</a></li>
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
			<a href="https://www.xbox.com/es-MX/games/state-of-decay-2" class="enlace-card">
				<figure>
					<img src="imgxbox/decay.jpeg" class="frontal" alt="animales">
					<figcaption class="trasera">
						<h1>State of decay 2</h1>
						<hr>
						<p>
							State of Decay: Year One trae la exitosa franquicia de fantasía de supervivencia zombi a Xbox One. Bellamente remasterizado en 1080p, con texturas, animaciones y mecánicas de combate mejoradas, State of Decay: Year One te sumergirá más profundamente en el mundo post-epidemia. Enfréntate al colapso de la sociedad en el juego definitivo de fantasía de supervivencia zombi.  Explora un mundo abierto lleno de peligros y oportunidades que responde a cada decisión que tomes. Recluta a una comunidad de sobrevivientes jugables, cada uno con sus propias habilidades y talentos especiales.
						</p>
					
					</figcaption>
				</figure>
			</a>

		</div>
		<div class="contenedor_tarjeta">
			<a href="https://www.xbox.com/es-mx/games/forza-horizon-5?ef_id=_k_CjwKCAjww_iwBhApEiwAuG6ccJz0TYXz_Rfk_GYRrLbxV_B10SRv1mzHce6lJV1XEicvnpQJCuosbxoCWt4QAvD_BwE_k_&OCID=AIDcmm3jadyopc_SEM__k_CjwKCAjww_iwBhApEiwAuG6ccJz0TYXz_Rfk_GYRrLbxV_B10SRv1mzHce6lJV1XEicvnpQJCuosbxoCWt4QAvD_BwE_k_&gad_source=1&gclid=CjwKCAjww_iwBhApEiwAuG6ccJz0TYXz_Rfk_GYRrLbxV_B10SRv1mzHce6lJV1XEicvnpQJCuosbxoCWt4QAvD_BwE" class="enlace-card">
				<figure>
					<img src="imgxbox/Forza.jpeg" class="frontal" alt="animales">
					<figcaption class="trasera">
						<h1>Forza Horizon 5</h1>
						<hr>
						<p> 
                            Lidera expediciones asombrosas entre los cambiantes paisajes animados de mundo abierto de México, con una divertida acción de conducción sin límites en cientos de los mejores autos del mundo <br><br>
							Explora un mundo de impresionantes contrastes y belleza. Descubre desiertos vivientes, selvas frondosas, ciudades históricas, ruinas ocultas, playas salvajes, cañones amplios y un enorme volcán de pico nevado.
                        </p>
					</figcaption>
				</figure>
			</a>
			
		</div>
		<div class="contenedor_tarjeta">
			<a href="https://www.xbox.com/es-mx/games/gears-5?ef_id=_k_CjwKCAjww_iwBhApEiwAuG6ccEpP_zfZmq4W4W3vKyE_N7Ho56AKa4B81nXqMeGbwPsY8OaKDkyw4RoCLpMQAvD_BwE_k_&OCID=AIDcmm3jadyopc_SEM__k_CjwKCAjww_iwBhApEiwAuG6ccEpP_zfZmq4W4W3vKyE_N7Ho56AKa4B81nXqMeGbwPsY8OaKDkyw4RoCLpMQAvD_BwE_k_&gad_source=1&gclid=CjwKCAjww_iwBhApEiwAuG6ccEpP_zfZmq4W4W3vKyE_N7Ho56AKa4B81nXqMeGbwPsY8OaKDkyw4RoCLpMQAvD_BwE" class="enlace-card">
				<figure>
					<img src="imgxbox/Gears5.JPEG" class="frontal" alt="animales">
					<figcaption class="trasera">
						<h1>Gears of War 5</h1>
						<hr>
						<p>
							Gears 5 es la séptima entrega de la saga Gears of War. Es un videojuego de género shooter en tercera persona, desarrollado por The Coalition y publicado por Microsoft Studios. Se estrenó el 10 de septiembre de 2019 para Xbox One y Windows 10 y el 10 de noviembre de 2020 para Xbox Series X y Series S. Fue anunciado oficialmente durante la conferencia de prensa de Xbox en la E3 de 2018.
						</p>
					</figcaption>
				</figure>
			</a>
			
		</div>
		<div class="contenedor_tarjeta">
			<a href="https://www.xbox.com/es-mx/games/store/halo-5-guardians/BRRC2BP0G9P0?ef_id=_k_CjwKCAjww_iwBhApEiwAuG6ccAH3md9ZWGDMiUUgaggGgKEaQG48subE_kNfXyEyuceFwlWONwh4-RoCBD4QAvD_BwE_k_&OCID=AIDcmm3jadyopc_SEM__k_CjwKCAjww_iwBhApEiwAuG6ccAH3md9ZWGDMiUUgaggGgKEaQG48subE_kNfXyEyuceFwlWONwh4-RoCBD4QAvD_BwE_k_&gad_source=1&gclid=CjwKCAjww_iwBhApEiwAuG6ccAH3md9ZWGDMiUUgaggGgKEaQG48subE_kNfXyEyuceFwlWONwh4-RoCBD4QAvD_BwE" class="enlace-card">
				<figure>
					<img src="imgxbox/halo.jpeg" class="frontal" alt="animales">
					<figcaption class="trasera">
						<h1>Halo 5</h1>
						<hr>
						<p>
							Cuando se pierde toda esperanza y el destino de la humanidad pende de un hilo, el Jefe Maestro está listo para enfrentarse al enemigo más despiadado que jamás haya enfrentado. Colócate la armadura del mayor héroe de la humanidad para disfrutar de una aventura épica y explorar la escala masiva del anillo de Halo.
						</p>
					</figcaption>
				</figure>
			</a>
			
		</div>
        <div class="contenedor_tarjeta">
			<a href="https://www.xbox.com/es-mx/games/sea-of-thieves?ef_id=_k_CjwKCAjww_iwBhApEiwAuG6ccKwVRBy68Y7Fjpy3uPKwrbOj0p765gAh7BPCtRZM0ykGPE8TfXtazhoC1foQAvD_BwE_k_&OCID=AIDcmm3jadyopc_SEM__k_CjwKCAjww_iwBhApEiwAuG6ccKwVRBy68Y7Fjpy3uPKwrbOj0p765gAh7BPCtRZM0ykGPE8TfXtazhoC1foQAvD_BwE_k_&gad_source=1&gclid=CjwKCAjww_iwBhApEiwAuG6ccKwVRBy68Y7Fjpy3uPKwrbOj0p765gAh7BPCtRZM0ykGPE8TfXtazhoC1foQAvD_BwE" class="enlace-card">
				<figure>
					<img src="imgxbox/sea.jpg" class="frontal" alt="animales">
					<figcaption class="trasera">
						<h1>Sea of Thieves</h1>
						<hr>
						<p>
							Sea of Thieves ofrece la experiencia de piratería por excelencia, lleno de aventuras de navegación, exploración y saqueos, acertijos por resolver y tesoros por descubrir... todo lo que necesitas para vivir la vida de pirata con la que siempre has soñado. Sin roles establecidos, tienes total libertad para interactuar con el mundo, y otros jugadores, de la manera que quieras.


						</p>
					</figcaption>
				</figure>
			</a>
			
		</div>
        <div class="contenedor_tarjeta">
			<a href="https://www.xbox.com/es-MX/games/store/titanfall-2/c0x2hnvh08fb" class="enlace-card">
				<figure>
					<img src="imgxbox/titanfall.jpg" class="frontal" alt="animales">
					<figcaption class="trasera">
						<h1>Titanfall 2</h1>
						<hr>
						<p>
							Armas más grandes implican mejores amigos en Titanfall 2, la épica secuela de Titanfall, único en su género. Respawn Entertainment te ofrece la tecnología titánica más novedosa junto con una campaña de un jugador y una experiencia multijugador únicas.

                            Combina y conquista con nuevos titanes y pilotos, armas más letales y un sistema de personalización y progreso más variado que ayudarán a que tu titán y tú sean una fuerza imparable y letal. Únanse y destruyan. Sean uno.
						</p>
					</figcaption>
				</figure>
			</a>
		</div>
	</div>
	<div class="contenedor-boton mb-4">
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
                text: 'Se redirigirá a la página oficial de Xbox para obtener más información acerca del juego',
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