<?php

/* Sver životinje trebale bi naslijediti ovu klasu */
abstract class AnimalAbstract {

    protected $species;

    public function getSpecies(){
        return $this->species;
    }
}

class Cat extends AnimalAbstract {

    protected $species = 'cat';
}

class Dog extends AnimalAbstract {

    protected $species = 'dog';
}

/* Ovo je tvornica koja stvara objekte životinja */
class AnimalFactory {

    public static function factory($animal){

        switch ($animal) {
            case 'cat':
                $obj = new Cat();
                break;
            case 'dog':
                $obj = new Dog();
                break;
            default:
                throw new Exception("Animal factory could not create animal of species $animal ", 400);
        }
        return $obj;
    }
}

try {
    $cat = AnimalFactory::factory('cat');
    echo "<p>" . $cat->getSpecies() . "</p>"; // cat

    $dog = AnimalFactory::factory('dog');
    echo "<p>" . $dog->getSpecies() . "</p>"; // dog

    $hippo = AnimalFactory::factory('hippopotamus');
    $platipus = AnimalFactory::factory('platipus'); // ova se linija neće izvršiti
} catch (Exception $e) {
    echo "<p>" . $e->getMessage() . "with error code: " . $e->getCode() . "</p>";
}

