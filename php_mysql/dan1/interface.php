<?php

interface iTemplate {
    public function setTitle($title);
    public function setTemplate($template);
    public function getTemplate();
}

class Page implements iTemplate {

    private $title;
    private $template;

    public function setTitle($title){
        $this->title = $title;
    }

    public function setTemplate($template){
        $this->template = $template;
    }

    public function getTemplate(){
        return $this->template;
    }

    public function getTitle(){
        return $this->title;
    }

}

$page = new Page();
$page->setTitle('PHP interfaces');
$page->setTemplate('
<html>
    <head>
        <title>' . $page->getTitle() . '</title>
    </head>
    <body>
        <h1>Interfaces</h1>
    </body>
</html>');

echo $page->getTemplate();