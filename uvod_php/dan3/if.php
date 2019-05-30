<?php

$a = 10;
$b = '10';

// u slučaju bez vitičastih zagrada php
// izvršava samo prvi red poslije if upita
if($a != 10)
	echo 'Varijabla a ima vrijednost '.$a;

echo '<br>';

if($a == $b):
	echo 'Jednake su';
	echo '<br>';
else:
	echo 'Nisu jednake';
	echo '<br>';
endif;

echo '<br>';

if($a === $b){
	echo 'Identične su';
	echo '<br>';
}else{
	echo 'Nisu Identične';
	echo '<br>';
}
/**************************/
echo '<br>';

if($a != $b):
	echo 'Različite su';
else:
	echo 'Nisu Različite';
endif;

echo '<br>';

if($a !== $b){
	echo 'Nisu Identične';
}else{
	echo 'Identične  su';
}

echo '<br>';

$a = 5;


# komentar za jedan red
# <  manje od
# >  više od
# <=  manje od ili jednako
# >=  više od ili jednako

if ($a > $b){
	echo 'a je veće od b';
}else{
	echo 'b je veće od a';
}

echo '<br>';

if(!0){
	echo 'Istina';
}else{
	echo 'Laž';
}

echo '<br>';

$a = null;

if($a != null){
	echo 'Varijabla ima vrijednost';
}else{
	echo 'nema vrijednost';
}

echo '<br>';

if(isset($a)){
	echo 'Varijabla je postavljena';
}else{
	echo 'nije postavljena';
}














