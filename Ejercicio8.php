<?php
	$baseImpar=7;
	$numeroDeEspacios=($baseImpar-1)/2;
	for ($numeroDeEstrellas=1; $numeroDeEstrellas<=$baseImpar; $numeroDeEstrellas=$numeroDeEstrellas+2){
		for ($j=0; $j<$numeroDeEspacios; $j++){
			echo("&nbsp;");
		}
		for ($i=0; $i<$numeroDeEstrellas; $i++){
			echo("*");
		}
		echo("<br>");
		$numeroDeEspacios--;
	}
?>