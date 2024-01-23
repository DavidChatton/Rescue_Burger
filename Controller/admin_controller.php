<?php
$user['role'] = 'admin';
$_SESSION['user_role'] = $user['role'];

if (!isset($_SESSION['admin'])) {
    header('location: ?page=homepage');
    exit();
}

require '../src/controllers/show_promotions_controller.php';