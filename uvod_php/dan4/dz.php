<?php
 
/*
 
1. Napraviti kod da kada se pokrene ispiše u kojem smo kvartalu godine na temelju trenutnog vremena.
 
2. Napraviti kod da kada se pokrene ispiše koji je dan na temelju trenutnog vremena.
 
*/

# Rjesenje 1

$mjesec = date('n');

switch($mjesec) {
	case 1:
	case 2:
	case 3:
		echo '<p>1. kvartal</p>';
	break;
	case 4:
	case 5:
	case 6:
		echo '<p>2. kvartal</p>';
	break;
	case 7:
	case 8:
	case 9:
		echo '<p>3. kvartal</p>';
	break;
	case 10:
	case 11:
	case 12:
		echo '<p>4. kvartal</p>';
	break;
	default:
		echo '<p>Mjesec ne postoji</p>';
	break;
}

# Rjesenje 2

$dan = date('N');

switch($dan) {
	case 1:
		echo '<p>Danas je ponedjeljak</p>';
	break;
	case 2:
		echo '<p>Danas je utorak</p>';
	break;
	case 3:
		echo '<p>Danas je srijeda</p>';
	break;
	case 4:
		echo '<p>Danas je četvrtak</p>';
	break;
	case 5:
		echo '<p>Danas je petak</p>';
	break;
	case 6:
		echo '<p>Danas je subota</p>';
	break;
	case 7:
		echo '<p>Danas je nedelja</p>';
	break;
	
}
