<!doctype html>
<html>
	<head>
		<title>Checkboxes en Formularios</title>
		<meta charset="utf-8">
		<link rel="shortcut icon" href="icono.png">
	</head>
	<body>
		<h1>Checkboxes en PHP: Cajas de chequeo</h1>		
		<fieldset>
			<legend>Selecciona los deportes que practicas:</legend>
			<form action="formularioCheckboxDestino.php" method="POST">						
				<input type="checkbox" id="deporte1" name="deportes[]" value="Natacion">
				<label for="deporte1">Natacion</label><br>
				
				<input type="checkbox" id="deporte2" name="deportes[]" value="Patinaje">
				<label for="deporte2">Patinaje</label><br>
				
				<input type="checkbox" id="deporte3" name="deportes[]" value="Futbol">
				<label for="deporte3">Futbol</label>			 
				<br>
				<button type="submit">Enviar!</button>		
			</form>		
		</fieldset>		
	</body>
</html>