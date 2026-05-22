<!doctype html>
<html lang="es">
	<head>
		<title>Formularios y PHP</title>
		<meta charset="UTF-8">
		<link rel="shortcut icon" href="icono.png" />
	</head>
	<body>
		<h1>Sumar dos números con formularios</h1>
		<h2>Datos ingresados</h2>		
		<?php
			$a = $_POST['valor1'];
			$b = $_POST['valor2'];
			echo $a;
			echo "<br>";
			echo $b;
			echo "<br>";
			$resultado = $a + $b;
			echo "Operación: ".$a." + ".$b." = ".$resultado;
		?>
		<br><br>
		
		<a href="formularioIngreso.php">
			<button>Volver</button>
		</a>

		<br><br>
		 <form action="formularioIngreso.php" method="POST">
			<button type="submit">Volver</button>
		</form>
	</body>
</html>