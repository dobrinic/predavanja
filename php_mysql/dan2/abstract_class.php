<?php

abstract class Page {

    abstract protected function getHtml();

    public function printOut(){
        echo $this->getHtml();
    }
}


class Home extends Page {

    public function getHtml(){
        return "<h1>Abstract Class</h1>";
    }
}

class AboutUs extends Page {

    public function getHtml(){
        return "<h1>AboutUs Class</h1>";
    }
}

$obj = new Home();

$obj->printOut();