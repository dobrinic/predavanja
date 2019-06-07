<?php

include 'Datum.php';

class Mjesec extends Datum {

    private $mjeseci = array('Siječanj', 'Veljača', 'Ožujak', 'Travanj', 'Svibanj', 'Lipanj');

    public function getMonthName($date){
        $mjesec = date('n', strtotime($date));
        $mjesec = $mjesec - 1;
        $ime_mjeseca = $this->mjeseci[$mjesec];
        $ime_dana = $this->getDayName($date);
        return "Tada je bio dan $ime_dana u mjesecu $ime_mjeseca";
    }
}

$mjesec = new Mjesec();
echo $mjesec->getMonthName('2019-06-07');