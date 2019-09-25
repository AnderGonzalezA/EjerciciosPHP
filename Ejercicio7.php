<?php
	$numeroPositivo=26;
	while($numeroPositivo!=1){
		if ($numeroPositivo%2==0){
			$numeroPositivo=$numeroPositivo/2;
		}else{
			$numeroPositivo=($numeroPositivo*3)+1;
		}
		echo($numeroPositivo . "<br>");
	}
?>