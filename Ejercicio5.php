<?php
	$personas=array
	(
		array("edad"=>75,"altura"=>1.8,"acompañado"=>null,"permitido"=>true),
		array("edad"=>9,"altura"=>1.3,"acompañado"=>true,"permitido"=>true),
		array("edad"=>10,"altura"=>1.3,"acompañado"=>false,"permitido"=>true),
		array("edad"=>9,"altura"=>1.1,"acompañado"=>true,"permitido"=>true));

	for ($i=0; $i<count($personas); $i++){
		if ($personas[$i]["edad"]<6){
			$personas[$i]["permitido"]=false;
		}
		if ($personas[$i]["edad"]<10 && !$personas[$i]["acompañado"]){
			$personas[$i]["permitido"]=false;
		}
		if ($personas[$i]["altura"]<1.2){
			$personas[$i]["permitido"]=false;
		}
		foreach ($personas[$i] as $key => $value) {
			echo($key . "&nbsp;&nbsp;&nbsp;" . $value . "<br>");
		}
		echo("<br><br>");
	}

	echo("Las personas permitidas son las siguientes: <br>");

	for ($i=0; $i<count($personas); $i++){
		if ($personas[$i]["permitido"]){
			foreach ($personas[$i] as $key => $value) {
				echo($value . "<br>");
			}
			echo("<br><br>");
		}
	}
?>
