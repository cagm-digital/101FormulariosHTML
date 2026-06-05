<!doctype html>
<html lang="es">
	<head>
		<title>Formularios y PHP</title>
		<meta charset="UTF-8" />
		<link rel="shortcut icon" href="icono.png">
	</head>
	<body>
		<h1>Sumar dos números con formularios</h1>
		<form action="formularioDestinoNumber.php" method="POST">
			<label for="codigo">Código:</label>
			<input type="number" id="codigo" min="0" max="50000" step="1" name="valor1" placeholder="Ingresa número" required autofocus>
			<br><br>
			<label for="clave">Clave:</label>
			<input type="password" id="clave" name="valor2" placeholder="Ingresa la clave" required>
			<br><br>
			<button type="submit">Siguiente</button>	
			<button type="reset">Limpiar!</button>							
		</form>
	</body>
</html>