<?php


$i = 1;
$b = 0;

while($i < 5)
{
    echo $i.'-> a <br>';
    $i++;
}


do{
    echo $b.'-> b <br>';
    $b++;
}while($b <= 10);



$c = 1;
$zbroj = 0;

while($c <= 100){
    $zbroj += $c;
    $c++;
}

echo $zbroj;