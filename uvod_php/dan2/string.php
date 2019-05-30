<?php

// snake_case
$ime_ustanove = 'Algebra';

// camel case
$nazivTecaja = "Uvod u PHP";

// ne radi prema očekivanju
echo '$ime_ustanove - $nazivTecaja<br>';
// radi
echo "$ime_ustanove - $nazivTecaja<br>";

var_dump($nazivTecaja);