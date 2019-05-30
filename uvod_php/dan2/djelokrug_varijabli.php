<?php

$a = 10;
$b = 15;

function ispis(){
	//global $b;
	$b = 20;
}

ispis();

//print_r($GLOBALS);



echo $b;