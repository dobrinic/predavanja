<?php

include "static.php";

class Buyer extends User {

    public static $buyer_id;

    public static function addBuyer($ime, $prezime, $id){

        self::$buyer_id = $id;
        parent::addUser($ime, $prezime);
    }
}

Buyer::addBuyer("Ivan", "Gundulić", 2351489);

echo "Ime kupca " . Buyer::$ime ."<br>";
echo "Prezime kupca " . Buyer::$prezime ."<br>";
echo "ID kupca " . Buyer::$buyer_id ."<br>";