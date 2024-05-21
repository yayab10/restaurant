<?php

    require_once 'Database.php';
    class DishModel {
    private $pdo;
    public function __construct() {
    $this->pdo = Database::getInstance()->getConnection();
    }
    public function getAllDishes() {
    $stmt = $this->pdo->query("SELECT * FROM dishes");
    return $stmt->fetchAll();
    }
    public function addDish($name, $description, $price, $category) {
    $sql = "INSERT INTO dishes (name, description, price, category_id) VALUES (?, ?, ?, ?)";
    $stmt = $this->pdo->prepare($sql);
    $stmt->execute([$name, $description, $price, $category]);
    return $this->pdo->lastInsertId();
    }
    // Include other CRUD methods here...
}