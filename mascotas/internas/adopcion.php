
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Happy Pets</title>
	<link rel="stylesheet" type="text/css" href="../css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
	<link rel="icon" href="images/logo.png" sizes="32x32" />
    <link rel="icon" href="images/logo.png" sizes="192x192" />
    <link rel="apple-touch-icon" href="../images/logo.png" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" />
</head>
<body>
<div class="contenedor">
	<header class="cabeceraPrincipal">
		<section class="logotipo"><img src="../images/logotipoPet.png"></section>
		<nav class="menuPrincipal">
			<a href="../">Inicio</a>
			<a href="#">Servicios</a>
			<a href="#">Productos</a>
			<a href="#">Adopción</a>
			<a href="#">Contactos</a>
		</nav>
	</header>
	<main>
        <h3>Formulario de adopción</h3>
        <form method="post" action="procesar.php">
            <div class="grupoInput">
                <label for="nombres">Nombres
                    <span class="alert">*</span>
                </label>
                <input type="text" name="nombres" id="nombres" placeholder="Ingrese sus nombres" required>
            </div>
            <div class="grupoInput">
                <label for="apellidos">Apellidos
                <span class="alert">*</span>
                </label>
                <input type="text" name="apellidos" id="apellidos" placeholder="Ingrese sus apellidos" required>
            </div>
            <div class="grupoInput">
                <label for="correo">Correo<span class="alert">*</span></label>
                <input type="email" name="correo" id="correo" placeholder="Ingrese su correo" required>
            </div>
            <div class="grupoInput">
                <label for="telefono">Teléfono<span class="alert">*</span></label>
                <input type="number" name="telefono" id="telefono" placeholder="Ingrese su telefono">
            </div>
            <div class="grupoInput">
                <label for="direccion">Dirección</label>
                <input type="text" name="direccion" id="direccion" placeholder="Ingrese su direccion">
            </div>
            <div class="grupoInput">
                <label for="fecha">Fecha de nacimiento</label>
                <input type="date" name="fecha" id="fecha" placeholder="Ingrese su fecha de nacimiento">
            </div>
            <div class="centrado">
                <button class="boton" type="submit">Guardar</button>
            </div>
            
            
        </form>
    </main>
	<section class="sponsor">
		<img src="../images/logotipoPet.png">
		<img src="../images/utplLogo.png">
	</section>
	<footer class="piePagina">
		<section class="derechos">
			<h6>Derechos Reservados UTPL 2022</h6>
		</section>
		<nav class="redesSociales">
			<a href=""><i class="fa-brands fa-facebook"></i></a>
			<a href=""><i class="fa-brands fa-facebook"></i></a>
			<a href=""><i class="fa-brands fa-tiktok"></i></a>
		</nav>
	</footer>
</div>
</body>
</html>