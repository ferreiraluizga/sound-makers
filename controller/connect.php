<?php

class Connect {
    private $host = 'localhost';
    private $user = 'root';
    private $password = '';
    private $database = 'db_consultorio';
    private $connect;

    public function __construct() {
        $this->connect = new mysqli($this->host, $this->user, $this->password, $this->database);
        if ($this->connect->connect_error) {
            die("Connect failure: " . $this->connect->connect_error);
        }
    }

    public function getConnect() {
        return $this->connect;
    }
}

?>