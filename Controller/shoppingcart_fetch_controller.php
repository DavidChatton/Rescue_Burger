<?php
session_start();
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        
        if (isset($_POST['id'])) {

            $productId = $_POST['id'];

            $_SESSION['cart'][] = $productId;
            var_dump($_SESSION['cart']);

            $response = ['success' => true, 'message' => 'Produit ajouté au panier avec succès'];
            echo json_encode($response);
        } else {
            // Répondez avec un message d'erreur si l'ID du produit n'est pas présent dans les données
            $response = ['success' => false, 'message' => 'ID du produit manquant dans les données'];
            echo json_encode($response);
        }
    } else {
        // Répondez avec un message d'erreur si la requête n'est pas une requête POST
        $response = ['success' => false, 'message' => 'Seules les requêtes POST sont autorisées'];
        echo json_encode($response);
    }