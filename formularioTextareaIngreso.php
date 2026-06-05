<!doctype html>
<html lang="es">
	<head>
		<title>Text area en Formularios</title>
		<meta charset="utf-8">
		<link rel="shortcut icon" href="icono.png">
	</head>
	<body>
		<h1>Text area en PHP: Área amplia para texto</h1>		
		<form action="formularioTextareaDestino.php" method="POST">			
			 <textarea name="mensaje" rows="10" cols="50" placeholder="Ingresa el texto..." required autofocus></textarea>
		<br><br>
		<button type="submit">Enviar!</button>		
		</form>		
	</body>
</html>