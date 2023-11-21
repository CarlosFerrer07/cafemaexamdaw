<?php

class Connection {
    public $conn;

    public function connect(){
        $config = json_decode(file_get_contents(__DIR__ . "/config/dba.json"), true);

        try {
            $this->conn = new PDO(
                "mysql:host=" . $config["host"] . ";dbname=" . $config["dbname"] . ";port=" . $config["port"],
                $config["user"],
                $config["password"]
            );
            /* echo "It works !!!!"; */
        } catch (PDOException $exception) {
            echo "Cannot connect to database. Error: " . $exception->getMessage();
        }
    }
}


class Users extends Connection{

    public function __construct() {
        $this->connect();
    }

    public function getData() {
        $result = $this->conn->query("select * from usuarios");
        return $result->fetchAll(PDO::FETCH_ASSOC);
    }

    public function printData() {
        $dataUsers = $this->getData();

        foreach ($dataUsers as $user) {
            echo $user['nombre']." ".$user['edad']." ".$user['estilo']."<br>";
        }
    }
}

$users = new users();

/* var_dump($users->getData()); */

$users->printData();

