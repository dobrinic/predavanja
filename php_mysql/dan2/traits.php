<?php

trait Setter {

    public function setTitle(){
        echo "<h1>Traits</h1>";
    }
}

class Page {

    use Setter;
}

$page = new Page();

$page->setTitle();

var_dump($page);