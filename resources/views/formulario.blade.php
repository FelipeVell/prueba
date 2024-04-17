<!DOCTYPE html>
	<html lang="es">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Formulario 1</title>
		<link rel="stylesheet" type="text/css" href="css/estilo5.css">
		<link rel="stylesheet" type="text/css" href="css/font-awesome.css">
		<script src="js/jquery-3.6.0.js" ></script>
		<script src="js/script.js"></script>
		 <!-- Agrega el enlace al script de la biblioteca xlsx -->
		 <script src="https://cdnjs.cloudflare.com/ajax/libs/xlsx/0.17.4/xlsx.full.min.js"></script>
		 <!-- Agrega el enlace al script de la biblioteca FileSaver.js -->
		 <script src="https://cdnjs.cloudflare.com/ajax/libs/FileSaver.js/2.0.5/FileSaver.min.js"></script>
	 	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

		<link href='https://unpkg.com/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <style>
        
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
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /*Pendiente el Focus*/
        :focus{ /*para borrar los bordes*/
            outline: none;
        }

        body{
            background: #000000;  

            font-family: Arial;
        }

        .form_wrap{
            width: 1100px;
            height: 550px;
            margin: 50px auto;
            display: flex;
            background: white;
            border-radius: 10px;
            overflow: hidden; 
            box-shadow: 6px 3px 9px 8px rgba(48, 48, 48, 0.94);

        }

        .contact_info::before{
            content: '';
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            background: #000000 ;
            opacity: 0.4;
        }

        .contact_info{
            width: 35%;
            position: relative;
            background-image: url('../img/21.jpg');
            background-size: cover;
            background-position: center center;

            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center; 
            animation: movimiento 15s infinite linear alternate;
        }

            @keyframes movimiento{
        from{
            background-position: bottom left;
        }to{
            background-position: top right;
        }
    }

            .title_info,
            .info_mail{
            position: relative;
            z-index: 99; /mandar adelante/
            color: #000000;
            }

            .title_info{
                margin-bottom: 80px;
            }

            .title_info span{
                font-size: 80px;
                display: block;
                text-align: center;
            }

            .title_info h1{
                text-align: center;
                font-size: 25px;
                margin-bottom: 20px;
                font-weight: 700;
                text-shadow: 0px 0px 10px rgb(255, 255, 255);
            }

            .info_mail p{
                display: flex;
                text-align: center;
                font-size: 16px;
                margin-bottom: 20px;
                font-weight: 700;
            }

            .info_mail p:nth-child(1) span{
                margin-right: 10px;
                font-size: 20PX;
            }
            .info_mail p:nth-child(2) span{
                margin-right: 20px;
                margin-left: 5PX;
                font-size: 20PX;
            }

            .contact_form{
                width: 63%;
                padding: 30px 30px;
            }

            .contact_form h2{
                text-align: center;
                font-size: 42px;
                font-weight: 600;
                color: rgb(0, 0, 0);
                margin-bottom: 35px;
            }

            .contact_form .user_info{
                display: flex;
                flex-direction: column;
            }

            .user_info label{
                    font-size: 20px;
                    font-weight: 600;
                }
                .contact_form input,
    .contact_form textarea {
        width: 100%;
        padding: 8px 0px 5px;
        margin-bottom: 25px;
        border: none;
        border-bottom: 2px solid #CCD1D1;
        color: #566573;
        font-family: Century Gothic;
        font-size: 17px;
        font-weight: 700;
        transition: border-color 0.3s; /* Agregamos una transición para un cambio suave */
    }

    /* Efecto hover */
    .contact_form input:hover,
    .contact_form textarea:hover {
        border-bottom-color: #3498db; 
        cursor: pointer;/* Cambia el color del borde al pasar el mouse por encima */
    }

    /* Efecto focus */
    .contact_form input:focus,
    .contact_form textarea:focus {
        outline: none; /* Quita el borde de enfoque predeterminado */
        border-bottom-color: #2ecc71; /* Cambia el color del borde al enfocar */
    }

            .contact_form textarea{
                max-width: 100%;
                min-width: 100%;
                max-height: 90px;
                min-height: 90px;
            }
            .contact_form input[type="button"]{
                background: rgb(19, 12, 112);
                color: #ffffff;
                width: 160px;
                border: none;
                border-radius: 5px;
                align-self: flex-end;
                font-family: Century Gothic;
                cursor: pointer;
            }
        .modal_wrap{
            width: 100%;
            height: 100vh;
            background: rgba(252, 243, 207 , 0.5);
            position: fixed;
            top: 0;
            left: 0;
            z-index: 3;

            display: flex;
            justify-content: center;
            align-items:center;
        }
        .message_modal{
            background: white;
            box-shadow: -6px 3px 9px 8px #566573;
            width: 300px;
            padding: 25px 20px 159x;
        }
        .message_modal h4{
            text-align: center;
            color: black;
            font-size: 20px;
            font-weight: 500;
            font-family: Century Gothic;
        }
        .message_modal h4:after{
            content:'';
            display: block;
            width: 100%;
            height: 1px;
            background: red;
            margin: 10px 0 15px;
        }
        .message_modal p{
            font-size: 16px;
            color: black;
        }
        .message_modal p:before{
            content: "\f00d";
            font-family: FontAwesome;
            display: inline-block;	
            color: red;
            margin-right: 9px;
        }
        #btnClose{
            display: inline-block;
            padding: 4px 9px;
            margin-bottom: 14px;
            background: #C39BD3 ;
            color: black;
            border: 2px solid #8E44AD;
            cursor: pointer;
            float: right;
        }
    </style>
	</head>
	<body>
			<!--<div class="modal_wrap">
			<div class="message_modal">
					<h4>
						Faltan datos por llenar:
					</h4>
					<p>*Falta el nombre</p>
					<p>*Falta Teléfono </p>
					<p>*Falta e-mail</p>
					<p>*Falta mensaje</p>
					<span id="btnClose">Cerrar</span>
			</div>
		</div>-->
		<section class="form_wrap">
			<section class="contact_info">
				<section class="title_info">
					<!-- <span class="fa fa-user-circle"></span>
					<h1>Tú opinion es <br> importante para nosotros </h1>
				</section>
			<section class="info_mail">
				<p>
					<span class="fa fa-envelope"> </span>
					info@universidadiuem.edu.mx
				</p>
				<p>
					<span class="fa fa-whatsapp"></span>
					7291261380
				</p> -->
			</section>
		</section>

        <form method="POST" action="{{ route('enviar.email') }}" class="contact_form" id="contactForm">
            @csrf
            <h2>Contáctanos</h2>
            <div class="user_info">
                <label for="names">Nombre <i class="bi bi-person-fill"></i> </label>
                <input type="text" id="names" name="names" required>
                <label for="phone">Celular <i class="bi bi-telephone-fill"></i> </label>
                <input type="text" id="phone" name="phone" required>
                <label for="email">Correo Electrónico <i class="bi bi-envelope-fill"></i> </label>
                <input type="email" id="email" name="email" required>
                <label for="mensaje">Mensaje <i class="bi bi-pencil-square"></i> </label>
                <textarea id="mensaje" name="mensaje" required></textarea>
                <input type="submit" value="Enviar" id="btnSend">                
            </div>
        </form>


        
		<!-- <script>
			window.addEventListener('DOMContentLoaded', (event) => {
				document.getElementById('contactForm').addEventListener('submit', function(event) {
					event.preventDefault(); // Evitar el envío del formulario por defecto
	
					// Recolectar los datos del formulario
					var names = document.getElementById('names').value;
					var phone = document.getElementById('phone').value;
					var email = document.getElementById('email').value;
					var mensaje = document.getElementById('mensaje').value;
					
					// Encabezados de las columnas
					var headers = ["Nombre(s)", "Celular", "Correo Electrónico", "Mensaje"];
	
					// Datos del formulario
					var data = [headers, [names, phone, email, mensaje]];
					
					// Crear un libro de Excel
					var wb = XLSX.utils.book_new();
					var ws = XLSX.utils.aoa_to_sheet(data);
					XLSX.utils.book_append_sheet(wb, ws, 'Formulario Datos');
					
					// Convertir el libro de Excel a un archivo binario
					var wbout = XLSX.write(wb, {bookType:'xlsx', type:'binary'});
					
					// Función para descargar el archivo
					function s2ab(s) {
						var buf = new ArrayBuffer(s.length);
						var view = new Uint8Array(buf);
						for (var i = 0; i != s.length; ++i) view[i] = s.charCodeAt(i) & 0xFF;
						return buf;
					}
					saveAs(new Blob([s2ab(wbout)],{type:"application/octet-stream"}), 'formulario.xlsx');
				});
			});
		</script> -->
		</section>
    
        <center>
            <div class="contenedor-boton">
            <a href="{{ route('welcome') }}" class="btn">Regresar al inicio</a>
            </div><br><br>
        </center>
        
	</body>
	</html>