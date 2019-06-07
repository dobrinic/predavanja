<?php

class Datum{

    private $dani = array('Ponedjeljak', 'Utorak', 'Srijeda', 'Četvrtak', 'Petak', 'Subota', 'Nedjelja');

    protected function getDayName($date){
        $dan = date('N', strtotime($date));
        $dan--;
        $ime_dana = $this->dani[$dan];
        return $ime_dana;
    }
}
/*
$datum = new Datum();
echo $datum->getDayName('2019-06-07');
*/