<?php

namespace app;

use PDO;

class Database
{
    public $pdo;

    public function __construct()
    {
        $this->pdo = new PDO('mysql:host=localhost;port=3306;dbname=products_crud', 'root', '');
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function getProducts()
    {
        $search = $_GET['search'] ?? '';

        if ($search) {
            $statement = $this->pdo->prepare('SELECT * FROM products WHERE  title LIKE :title ORDER BY id  ');
            $statement->bindValue(':title', "%$search%");
        }
    }
}
