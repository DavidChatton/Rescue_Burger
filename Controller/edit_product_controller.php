<?php

if (!isset($_SESSION['admin'])) {
    header('Location: ?page=login');
    exit();
}

$stmt = $bdd->prepare('SELECT * FROM products WHERE id = :product_id');

$stmt->execute([ ':product_id' => $_GET['product_id'] ] );
$product = $stmt->fetch();

$stmt->closeCursor();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['token']) && $_POST['token'] === $_SESSION['token']) {

    $name = htmlspecialchars($_POST['name']);
    $description = htmlspecialchars($_POST['description']);
    $picture = $product['picture'];
    $price = htmlspecialchars($_POST['price']);

    if ($_FILES['picture']['error'] === 0) {
        $targetDir = 'assets/images/';

        $targetFile = $targetDir . basename($_FILES['picture']['name']);

        if (move_uploaded_file($_FILES['picture']['tmp_name'], $targetFile)) {
            $picture = $targetFile;
        }
    }
    $updateStmt = $bdd->prepare('UPDATE products SET name = :name, description = :description, picture = :picture , price = :price WHERE id = :product_id');
    try {
        $updateStmt->execute([
            ':product_id' => $product['id'],
            ':name' => $name,
            ':price' => $price,
            ':description' => $description,
            ':picture'=> $picture
        ]);

        header('location: ?page=homepage');

    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }
}
require 'View/edit_product.php';
