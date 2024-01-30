<?php

if (!isset($_SESSION['admin'])) {
    header('Location: ?page=login');
    exit();
}

$admin = $_SESSION['admin'];

$stmt = $bdd->prepare('SELECT * FROM categories WHERE id = :categorie_id');

$stmt->execute([ ':categorie_id' => $_GET['categorie_id'] ] );
$categorie = $stmt->fetch();
$stmt->closeCursor();

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['token']) && $_POST['token'] === $_SESSION['token']) {
/*     var_dump($_FILES);
    var_dump($_POST); die(); */
    
    $name = htmlspecialchars($_POST['name']);
    $description = htmlspecialchars($_POST['description']);

    $image = $categorie['image'];

    if ($_FILES['image']['error'] === 0) {
        $targetDir = 'assets/images/';

        $targetFile = $targetDir . basename($_FILES['image']['name']);

        if (move_uploaded_file($_FILES['image']['tmp_name'], $targetFile)) {
            $image = $targetFile;
        }
    }

    $updateStmt = $bdd->prepare('UPDATE categories SET name = :name, description = :description, image = :image WHERE id = :categorie_id');
    try {
        $updateStmt->execute([
            ':categorie_id' => $categorie['id'],
            ':name' => $name,
            ':description' => $description,
            ':image'=> $image
        ]);

        header('location: ?page=homepage');

    } catch (PDOException $e) {
        echo 'Error: ' . $e->getMessage();
    }
}
require 'View/edit_categorie.php';