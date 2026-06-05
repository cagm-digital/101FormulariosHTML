<!doctype html>
<html lang="es">
	<head>
		<title>Formularios y PHP</title>
		<meta charset="UTF-8">
		<link rel="shortcut icon" href="icono.png">
	</head>
	<body>
		<h1>Sumar dos números con formularios</h1>
		<h2>Datos ingresados</h2>				
		<?php
			if ($_SERVER['REQUEST_METHOD'] === 'POST')
			{
				$a = $_POST['valor1'];
				$b = $_POST['valor2'];

				$a = htmlspecialchars($a);
				$b = htmlspecialchars($b);

				echo $a;
				echo "<br>";
				echo $b;				
			}
			else
			{
				echo "Acceso no permitido!";
			}	
		?>
		<br>
		<br>		
	    <button type="button" onclick="location.href='formularioIngresoNumber.php'">Volver</button>		
	</body>
</html>