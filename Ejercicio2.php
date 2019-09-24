<?php
	$numero1 = 1;
	$numero2 = 2;
	$numero3 = 3;
	if ($numero1==$numero2 && $numero1==$numero3){
		echo("Los numeros son iguales");
	}
	else if ($numero1>$numero2 && $numero1>$numero3){
		echo($numero1);
	}else if ($numero2>$numero1 && $numero2>$numero3){
		echo($numero2);
	}
	else if($numero3>$numero1 && $numero3>$numero2){
		echo($numero3);
	}
	else if ($numero1>$numero2||$numero1>$numero3){
		echo($numero1);
	}else if ($numero2>$numero1||$numero2>$numero3){
		echo($numero2);
	}
	else{
		echo($numero3);
	}
?>