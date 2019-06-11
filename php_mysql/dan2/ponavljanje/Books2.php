<?php

class Books {

    private $price;
    private $title;

    public function __construct($var1, $var2){
        $this->title = $var1;
        $this->price = $var2;
    }

    public function getPrice(){
        echo $this->price . "<br>";
    }

    public function getTitle(){
        echo $this->title . "<br>";
    }
}

$matematika = new Books("Fizika za srednju školu", 100);
$fizika = new Books("Algebra II", 90);
$povijest = new Books("Povijest Svijeta", 120);

$fizika->getTitle();
$fizika->getPrice();
$matematika->getTitle();
$matematika->getPrice();
$povijest->getTitle();
$povijest->getPrice();

//echo "Udžbenik {$matematika->getTitle()} košta {$matematika->getPrice()} kuna.";