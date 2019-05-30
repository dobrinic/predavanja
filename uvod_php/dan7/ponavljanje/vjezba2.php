<?php

$ucenik1 = array('Marko',
                'Markić',
                'marko@marko',
                'zagreb',
                'zagrebačka'
                );

$ucenik2 = array();
$ucenik2[] = 'Ivo';
$ucenik2[] = 'Ivić';
$ucenik2[] = 'ivo@ivo';
$ucenik2[] = 'Pula';
$ucenik2[] = 'Puljska';

pp($ucenik1);
pp($ucenik2);

for ($i=0; $i < count($ucenik1); $i++) { 
    echo $ucenik1[$i].'<br>';
}

function pp($array){
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}

?>