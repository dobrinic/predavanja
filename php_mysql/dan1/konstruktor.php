<?php

class User {

    private $ime;
    private $prezime;

    // konstruktor
    public function __construct($ime, $prezime){
        $this->ime = $ime;
        $this->prezime = $prezime;
    }

    // geter
    public function getIme(){
        return $this->ime;
    }

    // geter
    public function getPrezime(){
        return $this->prezime;
    }
}

$korisnik = new User('Marko', 'Marulić');
echo $korisnik->getIme();
