<?php
session_start();

require 'Model/connection.php';

$availableRoutes = [
'homepage',
'register',
'login',
'admin',
'disconnect',
'contact',

];

$route = 'homepage';

if (isset($_GET['page']) && in_array($_GET['page'], $availableRoutes)) {
    $route = $_GET['page'];
}

$verifLoggedRoutes = ['login', 'homepage', 'show_student', 'register' ];

if (!isset($_SESSION['logged']) && !in_array($_GET['page'], $verifLoggedRoutes)) {
    header('location: ?page=homepage');
    exit();
}





if (!isset($_SESSION['user_role'])) {
    $_SESSION['user_role'] = 'guest';
}





require 'View/layout.php';



