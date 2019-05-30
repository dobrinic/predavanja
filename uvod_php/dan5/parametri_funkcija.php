<?php

function zbroji($x, $y){
    return $x + $y;
}

echo zbroji(5,6);


function hr_dan()
{
	$i = date("N");

	switch($i)
	{
		case '1':
			$dan = 'ponedjeljak';
		break;
		
		case '2':
			$dan = 'utorak';
		break;

		case '3':
			$dan = 'srijeda';
		break;
		
		case '4':
			$dan = 'cetvrtak';
		break;

		case '5':
			$dan = 'petak';
		break;
		
		case '6':
			$dan = 'subota';
		break;

		case '7':
			$dan = 'nedjelja';
		break;		
	}
	
	return $dan;
}

$nova_var = hr_dan();

echo $nova_var;

