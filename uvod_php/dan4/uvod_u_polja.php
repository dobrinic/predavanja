<?php

$a = array();

$a[] = 'Prvi element';
$a[] = 'Drugi element';
$a[] = 'Treći element';
$a[] = 'Četvrti element';
$a[] = 'Peti element';

echo '<pre>';
print_r($a);
echo '</pre>';

echo 'Vrijednost elementa sa ključem 2 je: '. $a[2] . '<br>';

echo 'Polje $a sastoji se od: ' . count($a) . ' elemenata.<br>';

echo '<br><br>';

for($i = 0; $i < count($a); $i++){
    echo $i. ' => ' . $a[$i] . '<br>';
}


$b = array();

$b[0] = 'Prvi element';
$b[10] = 'Drugi element';
$b[11] = 'Treći element';
$b[] = 'Četvrti element';
$b[] = 'Peti element';

echo '<br><br>';

foreach($b as $kljuc => $vrijednost){
    echo $kljuc .' -> '. $vrijednost;
    echo '<br>';
}

echo '<br><br>';

$c = array('osoba1' => 'Mirko', 'osoba2' => 'Slavko', 'osoba3' => 'Pero', 'osoba4' => 'Marko');

foreach ($c as $key => $value) {
    echo $key .' -> '.$value;
    echo '<br>';
}

echo '<pre>';
print_r($c);
echo '</pre>';

// isto kao redak 43
$d = ['osoba1' => 'Mirko', 'osoba2' => 'Slavko', 'osoba3' => 'Pero', 'osoba4' => 'Marko'];