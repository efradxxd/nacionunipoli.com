<?php

session_start();

if (isset($_POST['usuario']) and isset($_POST['password'])){

	include ('conexion.php');
	
	$nombredeusuario=mysqli_real_escape_string($conexion,$_POST['usuario']);

	$password=mysqli_real_escape_string($conexion,$_POST['password']);

	$comprobacion_del_nombre='SELECT * FROM registros WHERE nombre="'.$nombredeusuario.'"';

	$comprobacion=$conexion->query($comprobacion_del_nombre);

	if ($comprobacion->num_rows>0) {
		$consulta_a_la_base=mysqli_query($conexion,'SELECT password FROM registros WHERE nombre="'.$nombredeusuario.'"');
		$recoger_dato=mysqli_fetch_assoc($consulta_a_la_base);
		//comprobamos contraseña
		$comprobar_password=password_verify($password,$recoger_dato['password']);

		if ($comprobar_password){
			$_SESSION['nombre']=$nombredeusuario;
			header('location: nota_premiun.php');
		}
		else{
			echo 'los datos han sido incorrectos <br>
			<a href="./">Volver</a>';
		}
	}
	else{
		echo 'no se ha encontrado en el registro <br>
		<a href="./">Volver</a>';
	}
}
else{
	header('location: ./');
}

?>