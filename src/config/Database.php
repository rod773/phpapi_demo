<?php
class Database
{

    private $host;
    private $user;
    private $password;
    private $database;

    public function getConnection()
    {
        $this->host = $_ENV['DB_HOST'];
        $this->user = $_ENV['DB_USER'];
        $this->password = $_ENV['DB_PASS'];
        $this->database = $_ENV['DB_NAME'];



        $conn = new mysqli($this->host, $this->user, $this->password, $this->database);
        if ($conn->connect_error) {
            die("Error failed to connect to MySQL: " . $conn->connect_error);
        } else {
            return $conn;
        }
    }
}
