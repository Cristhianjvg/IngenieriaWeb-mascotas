
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Happy Pets</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
	<link rel="icon" href="../images/logo.png" sizes="32x32" />
    <link rel="icon" href="../images/logo.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="images/logo.png" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" />
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />

</head>
<body>
<div class="contenedor">
	<header class="cabeceraPrincipal">
		<section class="logotipo"><img src="../images/logotipoPet.png"></section>
		<nav class="menuPrincipal">
			<a href="../">Inicio</a>
			<a href="servicio.php">Servicio</a>
			<a href="#">Productos</a>
			<a href="adopcion.php">Adopcion</a>
			<a href="">Contactos</a>
			<a href="ListaPostulaciones.php">ListaPostulaciones</a>
		</nav>
	</header>
	<main>
		<h2>Formulario de Postulaciones</h2>
		<form method="post" action="procesarPostulantes.php">
			<div class="grupoInput">
				<label for="nombres">Nombres <span class="alerta">*</span></label>
				<input type="text" name="nombres" id="nombres" required placeholder="Escriba el nombre">
			</div>
			<div class="grupoInput">
				<label for="apellidos">Apellidos <span class="alerta">*</span></label>
				<input type="text" name="apellidos" id="apellidos" required placeholder="Escriba el apellido">
			</div>
			<div class="grupoInput">
				<label for="correos">Correos <span class="alerta">*</span></label>
				<input type="email" name="correo" id="correo" placeholder="Escriba el correo">
			</div>
			<div class="grupoInput">
				<label for="direccion">Direccion <span class="alerta">*</span></label>
				<input type="text" name="direccion" id="direccion" placeholder="Escriba la Direccion">
			</div>
			<div class="grupoInput">
				<label for="fechaNacimiento">Cedula <span class="alerta">*</span></label>
				<input type="text" name="cedula" id="cedula" placeholder="Escriba la Fecha de nacimiento">
			</div>
			
			
			<div class="grupoInput">
				<select name="nombreMascota" id="nombreMascota" class="mascotas" >
					<option value="none" selected disabled hidden>SELECCIONE UNA MASCOTA</option>
						<?php
						include("../dll/config.php");
						include("../dll/class_mysqli.php");
						$miconexion= new class_mysqli();
						$miconexion->conectar(DBHOST, DBUSER, DBPASS, DBNAME);
						$miconexion->consulta("select nombreMascota from mascotas");
						$miconexion->verSelectMascotas();
						?>
				</select>
			</div>
			<div class="centrado">
				<button type="submit">Postular Adopcion</button>
			</div>
		</form>
	</main>
	<section class="sponsor">
		<img src="../images/logotipoPet.png" class="logopet">
		<img src="../images/logo_blanco_utpl.png" class="logou">
	</section>
	<footer class="piePagina">
		<section class="derechos">
			<h6>Derechos Reservados UTPL 2022</h6>
		</section>
		<nav class="redesSociales">
			<a href=""><i class="fa-brands fa-facebook"></i></a>
			<a href=""><i class="fa-brands fa-instagram"></i></a>
			<a href=""><i class="fa-brands fa-tiktok"></i></a>
		</nav>
	</footer>
</div>
</body>
</html>