<?php

class Covjek
{
    private $godine;
    protected $visina;
    public $spol;

    public function pijenje(){

    }

    protected function trcanje(){

    }
}

class Kupac extends Covjek{

    private $sifra_kupca;
    private $podaci_za_placanje;

    // ova klasa nasljeđuje klasu Covjek
}


/**************************** */


class Automobil{

    protected $boja;
    protected $br_kotaca;
    protected $snaga;
    protected $brzina;
    protected $cijena;

    public function prevozi(){

    }
}

class SUV extends Automobil{

    private $nosivost;
}

class FamilyCar extends Automobil{

}