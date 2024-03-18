<?php

class Dbh
{
    private $host = "localhost";
    private $dbname = "objectorientedphp";
    private $dbusername = "root";
    private $password = "";


    protected function connect()
    {
        try {

            $conn = new PDO("mysql:dbname=$this->dbname;host=$this->host", $this->dbusername, $this->password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
            return $conn;
        } catch (PDOException $e) {

            exit("Connection failed" . $e->getMessage());
        }
    }
}
