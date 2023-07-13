<?php
class DatabaseConnection {
    private $host = 'localhost'; 
    private $dbname = 'universal';
    private $username = 'root'; 
    private $password = ''; 

    public function getConnection() {
        $conn = null;
        try {
            $conn = new PDO("mysql:host=".$this->host.";dbname=".$this->dbname, $this->username, $this->password);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
        return $conn;
    }
}
?>