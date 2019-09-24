<?php
	$importeVentas=21000;
	switch ($importeVentas) {
		case ($importeVentas<10000);
		echo($importeVentas*5/100);
		break;
		case ($importeVentas>=10000 && $importeVentas<20000);
		echo($importeVentas*8.5/100);
		break;
		case ($importeVentas>=20000 && $importeVentas<40000);
		echo($importeVentas*10/100);
		break;
		case ($importeVentas>=40000);
		echo($importeVentas*13/100);
		break;
	}
?>