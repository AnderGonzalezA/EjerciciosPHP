<?php
	$compras=array
	(
		array("total_compra"=>15,"tipo_compra"=>"mascotas"),
		array("total_compra"=>25,"tipo_compra"=>"ropa"),
		array("total_compra"=>75,"tipo_compra"=>"ropa"),
		array("total_compra"=>88,"tipo_compra"=>"mascotas"));

	for ($i=0; $i<count($compras); $i++){
		if ($compras[$i]["total_compra"]<19){
			if ($compras[$i]["tipo_compra"]=="mascotas"){
				echo("No se puede realizar el envío");
			}else{
				echo("Los gastos de envío son 9 euros");
			}
		}else if($compras[$i]["total_compra"]<40){
			echo("Los gastos de envío son 9 euros");
		}else if($compras[$i]["total_compra"]>80){
			echo("Los gastos de envío son gratis");
		}
		if ($compras[$i]["tipo_compra"]=="mascotas"){
			$compras[$i]["total_compra"]=$compras[$i]["total_compra"]*1.1;
		}else{
			$compras[$i]["total_compra"]=$compras[$i]["total_compra"]*1.21;
		}
		echo("<br>" . $compras[$i]["total_compra"] . "<br><br>");
	}
?>