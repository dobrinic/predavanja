<?php

class DB {

    private static $instance = null;
    private $connection;
    private $host = 'localhost'; // 127.0.0.1
    private $user = 'root';
    private $pass = '';
    private $db = 'tvrtka';
    // private $dsn = "mysql:host=$this->host;dbname=$this->db;charset=UTF8";
   // echo $dsn; die();

    private function __construct(){
        $this->connection = new PDO("mysql:host=$this->host;dbname=$this->db;charset=UTF8", $this->user, $this->pass);
    }

    public static function getInstance(){
        if (!self::$instance) {
            self::$instance = new DB();
        }
        return self::$instance;
    }

    public function getConnection(){
        return $this->connection;
    }

    public function query($columns, $table){
        $query = "SELECT $columns FROM $table";

        $result = $this->connection->prepare($query);

        $result->execute();

        return $result->fetchAll(PDO::FETCH_OBJ);
        //return $result->fetchAll(PDO::FETCH_ASSOC);
    }
}

// $obj = new DB(); Ne radi jer je konstruktor privatan
$obj = DB::getInstance();
$results = $obj->query("*", "zaposlenici");

foreach ($results as $key => $value) {
    echo '<p>';
    echo ++$key . '. ' . $value->ime . ' ' . $value->prezime;
    //echo $value['ime'] . ' ' . $value['prezime'];
    echo '</p>';
}
// var_dump($results);


$results = $obj->query("SELECT * FROM zaposlenici WHERE id=2");