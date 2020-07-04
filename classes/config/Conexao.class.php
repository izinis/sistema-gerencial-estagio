<?php

class Conexao {

    private $con;

    public function __construct() {
        $this->con = new PDO("mysql:host=localhost:3308; dbname=ers", "root", "");
    }

    public function getCon() {
        return $this->con;
    }

}
