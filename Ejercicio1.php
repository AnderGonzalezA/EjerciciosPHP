<?php
	$numeroPisos = rand(1,9);
	$numeroPuertas = rand(1,9);
	for ($i = 0;$i<$numeroPisos;$i++){
		for ($j = 0;$j<$numeroPuertas;$j++){
			$piso=$i+1;
			$puerta=$j+1;
			echo($piso . " " . $puerta . "<br>");
		}
	}
?>