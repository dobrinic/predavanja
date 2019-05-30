<?php

function autor($ime){

    $autor_array = explode(',' ,$ime);
    $ime = $autor_array[1];
    $prezime = $autor_array[0];

    $prezime = mb_strtolower($prezime);//peric
    $prezime = ucfirst($prezime);//Peric
    //$prezime = ucfirst(strtolower($prezime));

    $ime_slovo = strtoupper(substr($ime,0,1));

    return $ime_slovo . '. ' . $prezime;
}

echo autor('pEriĆ,PEro');// očekivani rezultat -> P. Peric