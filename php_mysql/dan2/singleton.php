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

        if (count($where) === 3) {
            
            $field = $where[0];
            $operator = $where[1];
            $value = $where[2];

            $query = "DELETE FROM $table WHERE $field $operator $value";
        }

        $result = $this->connection->prepare($query);

        $result->execute();

        return $result->fetchAll(PDO::FETCH_OBJ);
    }

    public function insert($table, $columns){
        // INSERT INTO $table ($columns->keys) VALUES ($columns->vrijednosti)
        // insert('zaposlenici', [ 'ime' => 'Vijeko', 'prezime' => 'Vjekić' ]);
        // INSERT INTO zaposlenici ('ime', 'prezime') VALUES ('Vijeko', 'Vjekić');

        $keys = implode(",", array_keys($columns));
        $field_num = count($columns);
        $values = '';
        $counter = 1;

        foreach ($columns as $key => $value) {

            if (is_string($value)) {
                $value = "'$value'";
            }

            $values .= $value;
            if ($counter < $field_num) {
                $values .= ',';
            }
            $counter++;
        }

        $query = "INSERT INTO $table ($keys) VALUES ($values)";

        $result = $this->connection->prepare($query);

        $result->execute();

        return $result->fetchAll(PDO::FETCH_OBJ);

    }

    public function get($columns, $table, $where = array()){
        // get('ime, prezime', 'zaposlenici', ['id', '=', '2']);

        if (count($where) === 3) {
            
            $field = $where[0];
            $operator = $where[1];
            $value = $where[2];

            $query = "SELECT $columns FROM $table WHERE $field $operator $value";
        } else {
            $query = "SELECT $columns FROM $table";
        }

        $result = $this->connection->prepare($query);

        $result->execute();

        return $result->fetchAll(PDO::FETCH_OBJ);
    }

    public function update($table, $fields, $id){
        // UPDATE $table SET $fields WHERE id=$id;

        $field_num = count($fields);
        $values = '';
        $counter = 1;

        foreach ($fields as $key => $value) {

            if (is_string($value)) {
                $value = "'$value'";
            }

            $values .= "$key = $value";
            if ($counter < $field_num) {
                $values .= ',';
            }
            $counter++;
        }

        $query = "UPDATE $table SET $values WHERE id=$id";

        $result = $this->connection->prepare($query);

        $result->execute();

        return $result->fetchAll(PDO::FETCH_OBJ);
    }
}

//DB::getInstance()->insert('zaposlenici', [ 'ime' => 'Vijeko', 'prezime' => 'Vjekić' , 'godine' => 40, 'poslovnica_id' => 2]);

//DB::getInstance()->update('zaposlenici', [ 'ime' => 'Marko', 'prezime' => 'Markić'], 7);

class Zaposlenik {

    private $db;
    private $ime;
    private $prezime = 'Dobrinic';
    private $godine = 34;

    function __construct(){
        $this->db = DB::getInstance();
    }

    public function pronadji_zaposlenika($id){
        $zaposlenik = $this->db->get("*" , "zaposlenici", ['id', '=', $id]);
        return $zaposlenik;
    }

    public function pronadji_zaposlenike(){
        $zaposlenik = $this->db->query("*" , "zaposlenici");
        return $zaposlenik;
    }

    public function obrisi_zaposlenika($id){
        $zaposlenik = $this->db->delete('zaposlenici', ['id', '=', $id]);
        return $zaposlenik;
    }

    public function azuriraj_zaposlenika($id){
        $zaposlenik = $this->db->update('zaposlenici', $fields, $id);
        return $zaposlenik;
    }

    public function umetni_zaposlenika($columns){
        $zaposlenik = $this->db->insert('zaposlenici', $columns);
        return $zaposlenik;
    }

}

$zaposlenici = new Zaposlenik();

$zaposlenik = $zaposlenici->pronadji_zaposlenike();

//$zaposlenik = $zaposlenici->azuriraj_zaposlenika(6, [ 'ime' => 'Marko', 'prezime' => 'Markić']);

//$zaposlenik = $zaposlenici->umetni_zaposlenika([ 'ime' => 'Vijeko', 'prezime' => 'Vjekić' , 'godine' => 40, 'poslovnica_id' => 2]);

//$zaposlenik = $zaposlenici->obrisi_zaposlenika(3);

foreach ($zaposlenik as $key => $value) {
    echo '<p>';
    echo $value->id . '. ' . $value->ime . ' ' . $value->prezime;
    echo '</p>';
}
