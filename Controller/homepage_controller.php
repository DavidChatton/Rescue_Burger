<?php

$stmt = $bdd->prepare('SELECT * FROM categories');
$stmt->execute();
$categories = $stmt->fetchAll();


require 'View/homepage.php';

?>