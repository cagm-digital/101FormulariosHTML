<!doctype html>
<html lang="es">
	<head>
		<title>Formularios y PHP</title>
		<meta charset="UTF-8">
		<link rel="shortcut icon" href="icono.png" />
	</head>
	<body>
		<h1>Datos del Usuario</h1>
		<form action="formularioDestinoSelect.php" method="POST">			
			<p>Nombre (*) <input type="text" name="inputNombre" placeholder="Ingresa el nombre" required autofocus></p>
			<p>Apellido (*) <input type="text" name="inputApellido" placeholder="Ingresa el apellido" required></p>  
			<label>Genero (*) </label>						
			<select  name="inputGenero" required>
				<option selected disabled value="">Seleccione...</option>
				<option value="Femenino">Femenino</option>							
				<option value="Masculino">Masculino</option>
				<option value="Indeterminado">Indeterminado</option>
			</select>
			<br>
			<br>
			<hr>
			<button type="submit">Enviar</button>
			<button type="reset">Limpiar</button>	
		</form>
	</body>
</html>