<?php

if (!isset($_SESSION['admin']) || !$_SESSION['admin']) {
    header('Location: ?page=homepage');
    exit();
}

if (!isset($_GET['categorie_id'])) {
    header('Location: ?page=homepage');
    exit();
}

$categorie_id = $_GET['categorie_id'];
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['token']) && $_POST['token'] === $_SESSION['token']) {

    $stmt = $bdd->prepare('DELETE FROM categories WHERE id = :id');
    $stmt->execute([':id' => $categorie_id]);

    header('Location: ?page=homepage');
    exit();

}
        
require 'View/delete_categorie.php';

