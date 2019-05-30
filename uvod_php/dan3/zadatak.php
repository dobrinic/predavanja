<?php
$a = 3;
$b = 5;

$pom = $a;
$a = $b;
$b = $pom;

echo 'vrijednost varijable a = '
 . $a . '<br>vrijednost varijable b = '
 . $b;
