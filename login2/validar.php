<?php
session_start();
if (isset($_POST['usuario']) and isset($_POST['password'])){
	include (conexion.php);
	$nombredeusuario=mysql_real_escape_string($conexion,$_POST['usuario']);
	$password=mysql_real_escape_string($conexion,$_POST['password']);
	$comprobacion_del_nombre='SELECT * FROM registros WHERE nombre="'.$nombredeusuario.'"';
	$comprobacion=$conexion->query($comprobacion_del_nombre);
	if ($comprobacion->num_rows>0) {
		$consulta_a_la_base=mysql_query($conexion,'SELECT password FROM registros WHERE nombre="'.$nombredeusuario.'"');
		$recoger_dato=mysql_fetch_assoc($consulta_a_la_base);
		//comprobamos contraseña
		$comprobar_password=password_verify($password,$recoger_dato['password']);
		if ($comprobar_password){
			$_SESSION['nombre']=$nombredeusuario;
			header('location: .index.php');
		}
		else{
			print'los datos han sido incorrectos <br>'
			<a href="index.php">Volver</a>;
		}
		else{
			print'no se ha encontrado en el registro' <br>
			<a href="index.php">Volver</a>;
		}
	}
}else{
	header('location: ./');
}

?>