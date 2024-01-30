<?php
// Affiche les produits ajouter au panier
$productsInCartDetails = [];  
if (!empty($_SESSION['cart'])) {
    $cartIds = implode(',', $_SESSION['cart']);
    
    $stmt = $bdd->prepare("SELECT * FROM products WHERE id IN ({$cartIds})");
    
    $stmt->execute();
    $datas = $stmt->fetchAll();

    foreach($datas as $data) {
            $productsInCartDetails[] = $data;
    }   
    
}
// fonction qui permet de calculer le prix


require 'View/shoppingcart.php';