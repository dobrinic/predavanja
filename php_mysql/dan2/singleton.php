<?php

class DB {

    private static $instance = null;
    private $connection;
    private $host = 'localhost'; // 127.0.0.1
    private $user = 'root';
    private $pass = '';
    private $db = 'tvrtka';

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

    public function query($columns, $table, $where=null){

        if ($where) {
            $query = "SELECT $columns FROM $table WHERE $where";
        }else{
            $query = "SELECT $columns FROM $table";
        }        

        $result = $this->connection->prepare($query);

        $result->execute();

        return $result->fetchAll(PDO::FETCH_OBJ);
    }

    public function delete($table, $where){
        // DELETE FROM $table $where;

        $query =

        $result = $this->connection->prepare($query);

        $result->execute();

        return $result->fetchAll(PDO::FETCH_OBJ);
    }

    public function insert($table, $cloumns){
        // INSERT INTO $table ($columns->keys) VALUES ($columns->vrijednosti)
        // insert('zaposlenici', [ 'ime' => 'Vijeko', 'prezime' => 'Vjekić' ]);
        // INSERT INTO zaposlenici ('ime', 'prezime') VALUES ('Vijeko', 'Vjekić');

        $query =

        $result = $this->connection->prepare($query);

        $result->execute();

        return $result->fetchAll(PDO::FETCH_OBJ);

    }

    public function get($columns, $table, $where = array()){
        // get('ime, prezime', 'zaposlenici', ['id', '=', '2']);

        $query =

        $result = $this->connection->prepare($query);

        $result->execute();

        return $result->fetchAll(PDO::FETCH_OBJ);
    }

    public function update($table, $fields, $id){
        // UPDATE $table SET $fields WHERE id=$id;
    }



}

DB::getInstance()->insert('zaposlenici', [ 'ime' => 'Vijeko', 'prezime' => 'Vjekić' ,.....]);




class Zaposlenik {

    private $db;

    function __construct($db){
        $this->db = $db;
    }

    public function pronadji_zaposlenika($id){
        $zaposlenik = $this->db->query("*" , "zaposlenici", "id=$id");
        return $zaposlenik;
    }
}

$database = DB::getInstance();

$zaposlenik = new Zaposlenik($database);

$rez = $zaposlenik->pronadji_zaposlenika(3);

foreach ($rez as $key => $value) {
    echo '<p>';
    echo ++$key . '. ' . $value->ime . ' ' . $value->prezime;
    echo '</p>';
}
