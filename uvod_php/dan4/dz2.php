1. Napuniti polje s 10 elemenata
    Ispisati vrijednosti svakog elementa tako da su vrijednosti odvojene zarezom,
    zadnja vrijednost na kraju ne smije imati zarez

Mirko, Pero, Slavko, Ivan


2. Izbrisati prvi i zadnji element polja
    Ispisati vrijednosti svakog elementa tako da su vrijednosti odvojene zarezom,
    zadnja vrijednost na kraju ne smije imati zarez
3. Sortirati polje uzlazno
    Ispisati vrijednosti svakog elementa tako da su vrijednosti odvojene zarezom,
    zadnja vrijednost na kraju ne smije imati zarez
<?php

$a = array();
$a[] = 'Pero';
$a[] = 'Ana';
$a[] = 'Marko';
$a[] = 'Iva';
$a[] = 'Ivan';
$a[] = 'Kruno';
$a[] = 'Božica';
$a[] = 'Davor';
$a[] = 'Filip';
$a[] = 'Kristina';

echo '<p>';

$elements = count($a);
$x = 1;
foreach ($a as $value) {
	if($x < $elements) {
		$value .= ', ';
	}
	echo $value;
	$x++;
}
echo '</p>';

array_pop($a);
array_shift($a);

echo '<p>';

$elements = count($a);
$x = 1;
foreach ($a as $value) {
	if($x < $elements) {
		$value .= ', ';
	}
	echo $value;
	$x++;
}

echo '</p>';

sort($a);

echo '<p>';

$x = 1;
foreach ($a as $value) {
	if($x < $elements) {
		$value .= ', ';
	}
	echo $value;
	$x++;
}

echo '</p>';


// ili
echo '<h1>Ili na ovaj način<h1>';


$a = array();
$a[] = 'Pero';
$a[] = 'Ana';
$a[] = 'Marko';
$a[] = 'Iva';
$a[] = 'Ivan';
$a[] = 'Kruno';
$a[] = 'Božica';
$a[] = 'Davor';

echo "<h3>1. Napraviti ispis vrijednosti elemenata polja.</h3>";

foreach ($a as $key => $value) {
  echo '<p>'.$key.' - '.$value.'</p>';
}

// 2. Maknuti prvi i zadnji element polja.

array_shift($a);
array_pop($a);

echo "<h3>3. Ispis nakon makivanja prvog i zadnjeg elemenata polja.</h3>";

foreach ($a as $key => $value) {
  echo '<p>'.$key.' - '.$value.'</p>';
}

// 4. Sortirati polje uzlazno po vrijednosti.

sort($a);

echo "<h3>5. Ispis nakon sortiranja uzlazno po vrijednosti.</h3>";

foreach ($a as $key => $value) {
  echo '<p>'.$key.' - '.$value.'</p>';
}


$elements = count($a);
$x = 1;
foreach ($a as $value) {
	if($x < $elements) {
		$value .= ', ';
	}
	echo $value;
	$x++;
}

echo '<hr>';

$niz_imena = '';
foreach ($a as $key => $value) {
    
    if($key < count($a)-1){
        $niz_imena .= $value.', '; 
    }else{
        $niz_imena .= $value; 
    }   
}
echo $niz_imena;

echo '<hr>';

foreach ($a as $key => $value) {
    
    if($key < count($a)-1){
        echo $value.', '; 
    }else{
       echo $value; 
    }   
}