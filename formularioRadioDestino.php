<!doctype html>
<html lang="es">
	<head>
		<title>Botones Radio en Formularios</title>
		<meta charset="utf-8">
		<link rel="shortcut icon" href="icono.png">
	</head>
	<body>
		<h1>Botones tipo Radio en PHP</h1>	
		<h2>Datos ingresados</h2>		
		<form action="formularioRadioIngreso.php" method="POST">		
		<?php 
			$jornada_seleccionada = $_POST['jornada'];		
						
			echo "Eres de la jornada: ".$jornada_seleccionada;	
		?>
		<br><br>
		<button type="submit">Volver</button>
		</form>		
	</body>
</html>
