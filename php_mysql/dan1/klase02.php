<?php

class Datum{
    public $dan = 'Petak';
    public $format = 'US';

    public function format(){

    }
}

// izrada objekata iz klase naziva se INSTANCIRANJE
$instanca = new Datum();

echo $instanca->dan;
echo '<br>';
echo '<br>';
//var_dump($instanca);

$instanca->dan = 'Srijeda';
echo $instanca->dan;
echo '<br>';
echo '<br>';

$instanca2 = new Datum();
echo $instanca2->dan;
echo '<br>';
echo '<br>';
$instanca2->dan = 'Ponedjeljak';
echo $instanca2->dan;
echo '<br>';
echo '<br>';

echo $instanca->dan;

echo '<br>';
echo '<br>';

// ovo samo postavlja referencu na objekt $instanca
$instanca3 = $instanca;
echo $instanca3->dan;

echo '<br>';
echo '<br>';

// a ovo actually klonira objekt
$instanca4 = clone $instanca2;