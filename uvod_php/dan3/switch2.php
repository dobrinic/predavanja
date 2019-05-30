<?php

$vrijeme = time();

$datum = date('d.m.Y H:i:s', $vrijeme);

echo $datum.'<br>***********************';


$mjesec = date('n', $vrijeme);

echo '<br>';

switch($mjesec){
	case 1:
		echo 'Siječanj';
		break;
	case 2:
		echo 'Veljača';
		break;
	case 3:
		echo 'Ožujak';
		break;
	case 4:
		echo 'Travanj';
		break;
	case 5:
		echo 'Svibanj';
		break;
	case 6:
		echo 'Lipanj';
		break;
	default:
		echo 'Nepoznat mjesec';
}




