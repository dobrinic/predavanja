<?php

$a = 15;
$b = 10;
$c = 5;

if($b < $a && $c <= 10){
	echo 'Uvijet ispunjen';
}else{
	echo 'Uvijet nije ispunjen';
}

if($b < $a || $c <= 2){
	echo 'Uvijet ispunjen';
}else{
	echo 'Uvijet nije ispunjen';
}

if((false && false) | (true && true)){
	echo 'Uvijet ispunjen';
}else{
	echo 'Uvijet nije ispunjen';
}

// && - AND
// || - OR
// !  - NOT