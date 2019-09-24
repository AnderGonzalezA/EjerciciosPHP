<?php
	/*$characters = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ"; 
	$randomWord = "";
	$wordLength = 10;
	for ($i = 0; $i < $wordLength; $i++) { 
		$index = rand(0, strlen($characters) - 1); 
		$randomWord = $randomWord . $characters[$index];
	}*/
	$randomWord = "kaixoxiak";
	$index = strlen($randomWord)-1;
	$index2 = 0;
	$encountered = false;
	while (!$encountered && $index>=0) {
		if ($randomWord[$index]!=$randomWord[$index2]) {
			$encountered=true;
		}
		$index--;
		$index2++;
	}
	if ($encountered) {
		echo("The word given isn't palindrome");
	}
	else {
		echo("The word given is palindrome");
	}
?>