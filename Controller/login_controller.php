<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['token']) && $_POST['token'] === $_SESSION['token']) {


    echo '<pre>';
    print_r($_POST['name']);
    echo '</pre>';

    $email =  filter_var($_POST['email']);
    $password = $_POST['password'];

    $stmt = $bdd->prepare('SELECT * FROM users WHERE email = ?');
    $stmt->execute([$email]);
    
    $user = $stmt->fetch();

    if ($user && password_verify($password, $user['password'])) {

        $_SESSION['user_id'] = $user['id'];
        $_SESSION['logged'] = true;
        $_SESSION['admin'] = $user['is_admin'];
        
        header('Location: ?page=homepage');
        exit();

    } else {
        echo 'Invalid email or password';
    }
    
}

require 'View/login.php';