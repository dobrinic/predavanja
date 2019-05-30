<?php

$a = 10;

for ($i=1; $i <= $a; $i++) {

    for ($j=1; $j <= $a; $j++) { 
        echo $i*$j.' ';
        if ($i == 5)
        break;
    }
    echo '<br>';

    
}


$b = 10;

for ($i=1; $i <= $b; $i++) {

    if ($i == 5)
        continue;

    for ($j=1; $j <= $b; $j++) { 
        echo $i*$j.' ';
    }
    echo '<br>';

    
}
?>