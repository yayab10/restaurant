<?php
    // require_once '../model/DishModel.php';
    require_once('C:/xampp/htdocs/Pastamia/model/DishModel.php');

    class DishController {
     private $model;
     public function __construct() {
     $this->model = new DishModel();
     var_dump($this->model);
     }
     public function index() {
     $dishes = $this->model->getAllDishes();
    //  include '../view/dishes/index.php';
    include('C:/xampp/htdocs/Pastamia/view/dishes/index.php');

     }
     public function add() {
     if ($_SERVER['REQUEST_METHOD'] === 'POST') {
     $name = $_POST['name'];
     $description = $_POST['description'];
     $price = $_POST['price'];
     $category = $_POST['category'];
     $this->model->addDish($name, $description, $price, $category);
     header('Location: /index.php?action=index');
     }
    //  include ('..view/dishes/add.php');
    include('C:/xampp/htdocs/Pastamia/view/dishes/add.php');
     }
     // Include methods for edit and delete...
    }
    