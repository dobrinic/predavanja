<?php

$zbroj = 0;

for($i = 1; $i <= 10; $i++){

    echo 'i = '.$i.'<br>';

    $zbroj = $zbroj + $i;
}

echo 'SUMA = '. $zbroj;

echo '<hr>';

for($i = 10; $i >= 1; $i--){

    echo 'i = '.$i.'<br>';
}