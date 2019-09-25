<?php
	$potencia=3;
	$cantidad=100;
	
	$contador=1;
	$menor=true;
	while ($menor){
		$resultadoPotencia=pow($contador,$potencia);
		if ($resultadoPotencia<$cantidad){
			echo($contador . " " . $resultadoPotencia . "<br>");
		}else{
			$menor=false;
		}
		$contador++;
	}
?>