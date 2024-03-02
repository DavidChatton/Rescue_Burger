<?php
session_start();

if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

require 'Model/connection.php';

$availableRoutes = [
'homepage',
'register',
'login',
'admin',
'disconnect',
'allproducts',
'contact',
'shoppingcart',
'add_categorie',
'edit_categorie',
'delete_categorie',
'add_product',
'edit_product',
'delete_product'
];

$route = 'homepage';

if (isset($_GET['page']) && in_array($_GET['page'], $availableRoutes)) {
    $route = $_GET['page'];
}

$verifLoggedRoutes = ['login', 'homepage', 'show_student', 'register', 'allproducts', 'add_categorie','edit_categorie','delete_categorie','add_product','delete_product', 'shoppingcart', 'edit_product'];

if (!isset($_SESSION['logged']) && !in_array($_GET['page'], $verifLoggedRoutes)) {
    header('location: ?page=homepage');
    exit();
}

require 'View/layout.php';



