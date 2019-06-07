<?php

class User {

    private $ime;
    
    private $prezime;

    // geter
    public function getIme(){
        return $this->ime;
    }

    // setter
    public function setIme($ime){
        $this->ime = $ime;
    }

    // geter
    public function getPrezime(){
        return $this->prezime;
    }

    // setter
    public function setPrezime($prezime){
        $this->prezime = $prezime;
    }
}

$korisnik = new User();
$korisnik->setIme('Ivan');
$korisnik->setPrezime('Meštrović');
echo $korisnik->getIme();
