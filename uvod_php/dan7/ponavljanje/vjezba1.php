<?php

$ucenik1 = array('ime' => 'Marko',
                'prezime' => 'Markić',
                'email' => 'marko@marko',
                'adresa' => array(
                    'grad' => 'zagreb',
                    'ulica' => 'zagrebačka'
                ));

$ucenik2 = array();
$ucenik2['ime'] = 'Ivo';
$ucenik2['prezime'] = 'Ivić';
$ucenik2['email'] = 'ivo@ivo';
$ucenik2['adresa']['grad'] = 'Pula';
$ucenik2['adresa']['ulica'] = 'Puljska';

pp($ucenik1);
pp($ucenik2);

$a = 1;
foreach ($ucenik1 as $key => $value) {
    if (is_array($value)) {
       foreach ($value as $k => $v) {
        echo $v.'<br>';
       }
    } else {
        echo $value.'<br>';
    }
}

function pp($array){
    echo '<pre>';
    print_r($array);
    echo '</pre>';
}

?>