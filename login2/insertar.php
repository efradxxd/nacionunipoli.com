<?php
if(isset($_POST['usuario']) and isset($_POST['password'])){
	include 'conexion.php';
	$nombre_de_usuario=mysqli_real_escape_string($conexion,$_POST['usuario']);
	$password=password_hash($_POST['password'], PASSWORD_DEFAULT);
	$insertar=mysqli_query($conexion,'INSERT INTO registros(nombre,password) VALUES ("'.$nombre_de_usuario.'","'.$password.'")') or die ('No se pudo registrar<br>'.mysqli_error($conexion));
	mysql_close(conexion);
	header('location: index.php');
}
else{
	header('location: index.php');
}
?>
