<?php

class Datum{

    // pristup je moguć izvan klase
    public $dani = array('Ponedjeljak', 'Utorak', 'Srijeda', 'Četvrtak', 'Petak', 'Subota', 'Nedjelja');
    
    // pristup je moguć unutar klase i u nasljeđenim klasama
    protected $dani2 = array('Ponedjeljak', 'Utorak', 'Srijeda', 'Četvrtak', 'Petak', 'Subota', 'Nedjelja');

    // pristup je moguć samo unutar klase
    private $dani3 = array('Ponedjeljak', 'Utorak', 'Srijeda', 'Četvrtak', 'Petak', 'Subota', 'Nedjelja');
}

$datum = new Datum();

echo $datum->dani[0];
echo '<br>';
echo '<br>';
echo $datum->dani2[0]; // ne radi jer je protected
echo '<br>';
echo '<br>';
echo $datum->dani3[0]; // ne radi jer je private
