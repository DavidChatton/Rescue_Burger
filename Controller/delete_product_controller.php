<?php

if (!isset($_SESSION['admin']) || !$_SESSION['admin']) {
    header('Location: ?page=homepage');
    exit();
}



$product_id = $_GET['product_id'];


if (!isset($_GET['product_id'])) {
    header('Location: ?page=homepage');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['token']) && $_POST['token'] === $_SESSION['token']) {

    $stmt = $bdd->prepare('DELETE FROM products WHERE id = :id');
    $stmt->execute([':id' => $product_id]);

    header('Location: ?page=homepage');
    exit();
}
        
require 'View/delete_product.php';