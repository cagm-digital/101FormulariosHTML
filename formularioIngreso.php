<!doctype html>
<html lang="es">
	<head>
		<title>Formularios y PHP</title>
		<meta charset="UTF-8" />
		<link rel="shortcut icon" href="icono.png" />
	</head>
	<body>
		<h1>Sumar dos números con formularios</h1>
		<form action="formularioDestino.php" method="POST">
			<p>Número: <input type="text" name="valor1" placeholder="Ingresa número" required autofocus></p>
			<p>Número: <input type="text" name="valor2" placeholder="Ingresa número" required></p>  
			<button type="submit">Sumar</button>
			<button type="reset">Limpiar</button>			
		</form>
	</body>
</html>