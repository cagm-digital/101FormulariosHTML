<!doctype html>
<html>
	<head>
		<title>Checkboxes en Formularios</title>
		<meta charset="utf-8">
		<link rel="shortcut icon" href="icono.png">
	</head>
	<body>
		<h1>Checkboxes en PHP: Cajas de chequeo</h1>	
		<h2>Datos ingresados</h2>				
		<?php 
		if ($_SERVER['REQUEST_METHOD'] === 'POST') 
		{
			if (!empty($_POST['deportes']))
			{
				echo "<strong>Deportes seleccionados:</strong>";
				foreach ($_POST['deportes'] as $opciones) 
				{
					echo "<br>";
					echo htmlspecialchars($opciones);													
				}
			}
			else
			{
				echo "No hay deportes seleccionados!";			
			}			
		}
		?>
		<br><br>
		<form action="formularioCheckboxIngreso.php">
			<button type="submit">Volver</button>
		</form>			
	</body>
</html>