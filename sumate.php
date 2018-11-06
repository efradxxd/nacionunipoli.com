<!DOCTYPE html>
<html>
<head>
	<title>NACION UNIPOLI</title>
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />
	<!--COMPORTAMIENTO RESPONSIVO-->
	<meta name="viewport" content="width=device-width, minimun-scale=1.0, maximun-scale=1.0">
	<!-- importamos jquery-->
	
	<script src="js/jquery.js"></script>
	<script src="js/script.js"></script>
	<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

	<!-- estilos e iconos -->
	<link rel="stylesheet" type="text/css" href="css/estilos.css">
	<link rel="stylesheet" type="text/css" href="css/iconos.css">
	<link rel="stylesheet" type="text/css" href="css/responsive.css">
</head>
<body>
	<header>
		<section id="logo">
			<h1>naci<strong>Ó</strong>n</h1>
			<span id="abrir_menu" class="icon-menu"> </span>
		</section>
		<section id="menu">
			<div><span id="cerrar_menu" class="icon-cross"></span> 
				
			</div>
			<ul>
				<a href="opinion.html"><span class="icon-blog"></span>opinión</a>
				<a href="internacional.html"><span class="icon-compass2"></span>internacional</a>
				<a href="independientes.html"><span class="icon-user-tie"></span>independientes</a>
				<a href="#"><span class="icon-user-plus"></span>súmate</a>
				<a href="trending.html"><span class="icon-fire"></span>trending</a>
			</ul>
		</section>
	</header>
	<br>
	<br>
	<br>	
	<section id="contenedor">
		<div id="encabezado">
			<h2>!QUE ESPERAS¡</h2>
			<h1>SÚMATE A NUESTRA COMUNIDAD Y OBTEN ACCESO A LAS NOTAS PREMIUN</h1>
		</div>
		<form action="validar.php" method="post" enctype="application/x-www-form-urlencoded">
			<label for="caja1"><p>Nombre de Usuario</p>
				<p><input type="text" id="caja1" name="usuario" placeholder="usuario" required></p>
			 </label>
	 	<label for="caja2"><p>Contraseña</p>
	 		<p><input type="password" id="caja2" name="password" placeholder="contraseña" required></p>
	 	</label>
	 	<input type="submit" value="Iniciar sesion" >
	</form>
	<p>o mas bien:</p>
	<button onclick="registrar()">Registrarse</button>
    <script type="text/javascript">
    	function registrar(){
    		window.location="registrar_user.php";
    	}

    </script>
    </body>
		
	</section>
</body>
</html>