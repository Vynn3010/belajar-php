<?php
include 'config.php';

try {
    $pdo = new PDO($dsn, $user, $pass);
    $pdo->setAttribute(
        PDO::ATTR_ERRMODE, 
        PDO::ERRMODE_EXCEPTION
    );
    echo "GOKILLL <br>";

    $query = "SELECT * FROM products";
    $stmt = $pdo->query($query);
    $products = $stmt->fetchAll();
    
    foreach ($products as $product) {
        echo $product['name'] ;
        echo $product['Price'] . "<br>";
    }

} catch (PDOException $e) {
    echo "Connected failed: " . $e->getMessage();
}