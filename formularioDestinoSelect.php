<!doctype html>
<html lang="es">
	<head>
		<title>Formularios y PHP</title>
		<meta charset="UTF-8">
		<link rel="shortcut icon" href="icono.png" />
	</head>
	<body>
		<h1>Datos del Usuario</h1>
		<h2>Datos ingresados</h2>		
		<?php
			$nombre = $_POST['inputNombre'];
			$apellido = $_POST['inputApellido'];
			$genero = $_POST['inputGenero'];
			
			echo "<h3>Nombre: ".$nombre."</h3>";
			echo "<h3>Apellido: ".$apellido."</h3>";
			echo "<h3>Genero: ".$genero."</h3>";
			
		?>
		<br>
		<br>
		<a href="formularioIngresoSelect.php">
			<button>Volver</button>
		</a>				
	</body>
</html>