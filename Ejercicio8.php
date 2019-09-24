<?php
	$baseImpar=7;
	$numeroDeEstrellas=1;
	$numeroDeEspacios=$baseImpar-1;
	/*while ($numeroDeEstrellas<=$baseImpar){
		for ($j=0;$j<$numeroDeEspacios;$j++){
			echo("&nbsp;");
		}
		for ($i=0; $i<$numeroDeEstrellas; $i++){
			echo("*");
		}
		echo("<br>");
		$numeroDeEstrellas=$numeroDeEstrellas+2;
		$numeroDeEspacios=$numeroDeEspacios-2;
	}*/
	for ($numeroDeEstrellas=1;$numeroDeEstrellas<=$baseImpar;$numeroDeEstrellas+2){
		for ($j=0;$j<$numeroDeEspacios;$j++){
			echo("&nbsp;");
		}
		for ($i=0; $i<$numeroDeEstrellas; $i++){
			echo("*");
		}
		echo("<br>");
		$numeroDeEstrellas=$numeroDeEstrellas+2;
		$numeroDeEspacios=$numeroDeEspacios-2;
	}
?>