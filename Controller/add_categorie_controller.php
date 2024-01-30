<?php

if (!isset($_SESSION['admin'])) {
    header('Location: ?page=login');
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['token']) && $_POST['token'] === $_SESSION['token']) {

    $name = htmlspecialchars($_POST['name']);
    $description = htmlspecialchars($_POST['description']);
    /* $categorie = $stmt->fetch();
    $image = $categorie['image']; */
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

    $stmt = $bdd->prepare('INSERT INTO categories (name, description, image) VALUES (:name, :description, :image)');

    $stmt->execute([
        ':name' => $name,
        ':description' => $description,
        ':image'=> $image
    ]);
    
    header('location: ?page=homepage');
    exit();
    
}

require 'View/add_categorie.php';
