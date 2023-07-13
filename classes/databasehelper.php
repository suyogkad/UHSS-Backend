<?php

class DatabaseHelper {
    private $pdo;

    public function __construct(DatabaseConnection $database)
    {
        $this->pdo = $database->getConnection();
    }

    public function insertData($table, $data) {
        $columns = implode(', ', array_keys($data));
        $placeholders = ':' . implode(', :', array_keys($data));
        
        $stmt = $this->pdo->prepare("INSERT INTO $table ($columns) VALUES ($placeholders)");
        $stmt->execute($data);
    }
    
    public function updateData($table, $data, $field, $value) {
        $setString = '';
        foreach ($data as $key => $val) {
            $setString .= "$key = :$key, ";
        }
    
        // Remove trailing comma and space
        $setString = rtrim($setString, ', ');
    
        $stmt = $this->pdo->prepare("UPDATE $table SET $setString WHERE $field = :value");
        $data['value'] = $value;
        $stmt->execute($data);
    }
    

    public function deleteData($table, $field, $value) {
        $stmt = $this->pdo->prepare("DELETE FROM $table WHERE $field = :value");
        $stmt->execute(['value' => $value]);
    }
 
    public function getData($table, $condition) {
        $placeholders = [];
        foreach ($condition as $key => $value) {
            $placeholders[] = "$key = :$key";
        }
        $whereClause = implode(' AND ', $placeholders);

        $query = "SELECT * FROM $table WHERE $whereClause";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute($condition);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        return $result;
    }

    public function getAll($table) {
        $query = "SELECT * FROM $table";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        return $result;
    }
 
    
 
    
}


?>
