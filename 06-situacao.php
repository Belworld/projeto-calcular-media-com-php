<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8"/>
	<title>Variavel de Variavel</title>
</head>
<body>
<div>	
	<?php
		
		$nota1 = $_GET["a"];
		$nota2 = $_GET["b"];
		$media = ($nota1+$nota2)/2;

		$op = $media >= 7 ? "Parabens" : "vai estudar mais";

		echo "A sua media é $media então $op";

		
		/*echo "A sua media é $media então ". $op = $media >= 7 ? "Parabens" : "vai estudar mais";*/

		
		
	?>
</div>
</body>	
</html>
