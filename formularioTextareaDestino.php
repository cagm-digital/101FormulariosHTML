<!doctype html>
<html lang="es">
	<head>
		<title>Text area en Formularios</title>
		<meta charset="utf-8">
		<link rel="shortcut icon" href="icono.png">
	</head>
	<body>
		<h1>Text area en PHP: Área amplia para texto</h1>		
		<h2>Datos ingresados</h2>				
		<?php 
		if ($_SERVER['REQUEST_METHOD'] === 'POST')
		{
			$parrafo = $_POST['mensaje'];		
						
			echo "Texto digitado (sin protección de verificación): ".$parrafo;
			echo "<br>";
			echo "Texto digitado (con protección de verificación): ".htmlspecialchars($parrafo);	
			echo "<br>";
			echo "Texto digitado (con protección de verificación y formato de escritura): ";
			echo "<br>";
			echo nl2br(htmlspecialchars($parrafo));			
		}
		else
		{
			echo "Acceso no permitido!";
		}		
		?>
		<br><br>		
		<a href="formularioTextareaIngreso.php">
			<button type="button">Volver</button>
		</a>
	</body>
</html>