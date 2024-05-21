<?php
function connectToDatabase() {
    try {
        $database = new PDO('mysql:host=localhost;dbname=pastamia;charset=utf8', 'root', '');
        return $database;
    } catch(Exception $e) {
        die('Erreur : '.$e->getMessage());
    }
}

// Utilisation de la fonction pour se connecter à la base de données
$database = connectToDatabase();



class Database {
    private static $instance = null;
    private $pdo;
    private function __construct() {
    $host = 'localhost';
    $db = 'pastamia';
    $user = 'root';
    $pass = '';
    $charset = 'utf8mb4';
    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
    $options = [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    ];
    $this->pdo = new PDO($dsn, $user, $pass, $options);
    }
    public static function getInstance() {
    if (self::$instance === null) {
    self::$instance = new Database();
    }
    return self::$instance;
    }
    public function getConnection() {
    return $this->pdo;
    }
}   
