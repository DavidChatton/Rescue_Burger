<?php

if (!isset($_SESSION['user_id']) || !isset($_SESSION['admin'])) {
    header('Location: ?page=login');
    exit();
}


if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['token']) && $_POST['token'] === $_SESSION['token']) {

    
    $title = htmlspecialchars($_POST['title']);
    $content = htmlspecialchars($_POST['content']);
    $ip = $_SERVER['REMOTE_ADDR'];
    $user_id = $_SESSION['user_id'];
    
    $stmt = $bdd->prepare('INSERT INTO messages (title , content, ip_adress, user_id) VALUES (:title, :content, :ip_adress, :user_id)' );
    
    $stmt->execute([
        ':title' => $title,
        ':content' => $content,
        ':ip_adress' => $ip,
        ':user_id' => $user_id
    ]);
    
    header('location: ?page=homepage');
    exit();
    
}

require 'View/contact.php';
