<?php

$stmt = $bdd->prepare("SELECT p.id, p.name, p.description, p.picture, p.price FROM products AS p LEFT JOIN categories AS c ON p.categorie_id = c.id WHERE c.id = :categorie_id;");


$stmt->execute([
    ':categorie_id' => $_GET['categorie_id']
]);

$products = $stmt->fetchAll();
var_dump($products);
require 'View/allproducts.php';

?>