<?php

class Books {

    /* Member variables -> atributi objekta */
    private $price;
    private $title;

    /* Member functions -> metode */
    public function setPrice($pri){
        $this->price = $pri;
    }

    public function getPrice(){
        echo $this->price . "<br>";
    }

    public function setTitle($title){
        $this->title = $title;
    }

    public function getTitle(){
        echo $this->title . "<br>";
    }
}

/* Creating Objects in PHP */
$matematika = new Books();
$fizika = new Books();
$povijest = new Books();

/* Calling member functions */
$fizika->setTitle("Fizika za srednju školu");
$matematika->setTitle("Algebra II");
$povijest->setTitle("Povijest Svijeta");

$fizika->setPrice(100);
$matematika->setPrice(90);
$povijest->setPrice(120);

$fizika->getTitle();
$fizika->getPrice();
$matematika->getTitle();
$matematika->getPrice();
$povijest->getTitle();
$povijest->getPrice();

//echo "Udžbenik $fizika->getTitle() košta {$fizika->getPrice()} kuna.";

/*
var_dump($matematika);
var_dump($fizika);
var_dump($povijest);
*/