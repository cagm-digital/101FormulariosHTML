<!doctype html>
<html lang="es">
	<head>
		<title>Botones Radio en Formularios</title>
		<meta charset="utf-8">
		<link rel="shortcut icon" href="icono.png">
	</head>
	<body>
		<h1>Botones tipo Radio en PHP</h1>		
		<form action="formularioRadioDestino.php" method="POST">			
			<p>A qué jornada perteneces?</p>
			
			<input type="radio" id="manana" name="jornada" value="manana" required>
			<label for="manana">Mañana</label><br>
			
			<input type="radio" id="tarde" name="jornada" value="tarde">
			<label for="tarde">Tarde</label><br>
			
			<input type="radio" id="noche" name="jornada" value="noche">
			<label for="noche">Noche</label><br>	
			
			<input type="radio" id="sabatina" name="jornada" value="sabatina">
			<label for="sabatina">Sabatina</label>			
			
			<br>
			<button type="submit">Enviar</button>
			<button type="reset">Limpiar</button>	
		</form>		
	</body>
</html>