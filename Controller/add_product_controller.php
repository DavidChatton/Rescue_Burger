<?php

if (!isset($_SESSION['admin'])) {
    header('Location: ?page=login');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['token']) && $_POST['token'] === $_SESSION['token']) {

    $name = htmlspecialchars($_POST['name']);
    $description = htmlspecialchars($_POST['description']);
    $price = htmlspecialchars($_POST['price']);
    $categorie_id = htmlspecialchars($_POST['categorie_id']);
    $image = null;

    if ($_FILES['image']['error'] === 0) {
        $targetDir = 'assets/images/';

        $targetFile = $targetDir . basename($_FILES['image']['name']);

        if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFile)) {
            $image = $targetFile;
        } else {
            echo "Erreur lors du téléchargement du fichier.";
        }
    }

    $stmt = $bdd->prepare('INSERT INTO products (name, description, price, picture, categorie_id)
    VALUES (:name, :description, :price, :picture, :categorie_id)');

    $stmt->execute([
        ':name' => $name,
        ':description' => $description,
        ':price'=> $price,
        ':picture'=> $image,
        ':categorie_id'=> $categorie_id
    ]);
    header("Location: ?page=allproducts&categorie_id={$categorie_id}");
    exit();
}

require 'View/add_product.php';
