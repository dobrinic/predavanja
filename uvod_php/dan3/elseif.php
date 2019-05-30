<?php

$naziv = 'Algebra';

if(strlen($naziv) > 10)
{
	echo 'Naziv ima više od 10 znakova';	
}elseif(strlen($naziv) >= 5 && strlen($naziv) <= 10)
{
	echo 'Naziv je u zadanom nizu';
}else{
	echo 'Naziv je pre kratak';
}

echo '<br><br><br>';

$c = '';
$d = 'dfgdf';

if(empty($c)){
	if(empty($d)){
		echo 'Varijabla C je prazna! <br>';
		echo 'Varijabla D je prazna! <br>';
	}else{
		echo 'Varijabla C je prazna! <br>';
		echo 'Varijabla D je pun! <br>';
	}
}else{
	if(empty($d)){
		echo 'Varijabla C je pun! <br>';
		echo 'Varijabla D je prazan! <br>';
	}else{
		echo 'Varijabla C je pun! <br>';
		echo 'Varijabla D je pun! <br>';
	}
}

echo '<br><br><br>';


if(empty($c) && empty($d)){
	echo 'Varijabla C je prazna! <br>';
	echo 'Varijabla D je prazna! <br>';
}elseif(empty($c) && !empty($d)){
	echo 'Varijabla C je prazna! <br>';
	echo 'Varijabla D je pun! <br>';
}elseif(!empty($c) && empty($d)){
	echo 'Varijabla C je puna! <br>';
	echo 'Varijabla D je prazna! <br>';
}else{
	echo 'Varijabla C je pun! <br>';
	echo 'Varijabla D je pun! <br>';
}




