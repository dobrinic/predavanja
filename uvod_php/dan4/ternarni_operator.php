<?php

$a = 10;

if($a == 10):
	echo '10';
else:
	echo 'Nije 10';
endif;

echo '<br>';


echo ($a == 10) ? '10' : 'Nije 10';

if($a == 10):
	$b = 5;
else:
	$b = 3;
endif;

echo '<br>';

$b = ($a == 10) ? 5 : 3;

echo $b;