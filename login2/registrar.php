<!DOCTYPE html>
<html>
    <head>
        <title></title>
    </head>
    <body>
       <form action="insertar.php" method="post" enctype="application/x-www-form-urlencoded">
       	<label for="caja1"><p>Nombre de usuario</p> 
       		<p><input type="text" id="caja1" name="usuario" placeholder="nombre" required autofocus></p>
   		</label>
   		<label for="caja2"><p>Password</p>
   			<p><input type="password" id="caja2" name="password" required placeholder="password"></p>
   		</label>
   		<input type="submit" value="Registrarse">
       </form>
    </body>
</html>