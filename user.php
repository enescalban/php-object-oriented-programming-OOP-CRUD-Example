<?php
require_once 'db.php';

class User {
    private $pdo;
    
    public function __construct($pdo) {
        $this->pdo = $pdo;
    }
    
    // Create
    public function create($name, $email) {
        $stmt = $this->pdo->prepare("INSERT INTO users (name, email) VALUES (?, ?)");
        $stmt->execute([$name, $email]);
    }

    // Read

    public function read() {
        $stmt = $this->pdo->prepare("SELECT * FROM users ORDER BY user_id DESC");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
        
    }

    //update
    public function update($user_id, $name, $email) {
        $stmt = $this->pdo->prepare("UPDATE users SET name = :name, email = :email WHERE user_id = :user_id");
        $stmt->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt->bindParam(':email', $email, PDO::PARAM_STR);
        $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->rowCount(); // güncellenen satır sayısını döndürür
    }

    // Read By Id
    public function readById($user_id) {
        $stmt = $this->pdo->prepare("SELECT * FROM users WHERE user_id = :user_id");
        $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC); // tek bir satır döndürür
    }

    // Delete
    public function delete($user_id) {
        $stmt = $this->pdo->prepare("DELETE FROM users WHERE user_id = :user_id");
        $stmt->bindParam(':user_id', $user_id, PDO::PARAM_INT);
        return $stmt->execute();
    }
    
    
    

}


