<?php

class User {

    public static $ime = 'Marko';
    public static $prezime = 'Marulić';

    public static function addUser($ime, $prezime){
        self::$ime = $ime;
        self::$prezime = $prezime;
    }
}

/* OVO NE RADI SA STATIC
$obj = new User();
$obj->addUser("Aleksandar", "Veliki");
echo $obj->ime;
*/

/*
User::addUser("Aleksandar", "Veliki");
echo User::$ime;
*/