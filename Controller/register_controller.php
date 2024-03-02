<?php

if ($_SERVER['REQUEST_METHOD'] === 'POST'  && isset($_POST['token']) && $_POST['token'] === $_SESSION['token']) {

    $error = false;

    if (!empty($_POST)) {

        if (empty($_POST['firstname'])) {
            echo 'Veuillez renseigner votre prénom';
            $error = true;
        } elseif (empty($_POST['lastname'])) {
            echo 'Veuillez renseigner votre nom';
            $error = true;
        } elseif (empty($_POST['email'])) {
            echo 'Veuillez renseigner votre email';
            $error = true;
        } elseif (empty($_POST['password'])) {
            echo 'Veuillez renseigner votre mot de passe';
            $error = true;
        } elseif (filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) == false) {
            echo 'Veuillez rentrer une adresse mail valide';
            $error = true;
        } elseif (strlen($_POST['password']) < 14) {
            echo "Veuillez rentrer un mot de passe d'au minimum 14 caractères";
            $error = true;
        }

    } 
    if (!$error) {
    var_dump($_POST);

        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

        $stmt = $bdd->prepare('INSERT INTO users (firstname, lastname, password, email) VALUES (?, ?, ?, ?)');

        try {
            $stmt->execute([$firstname, $lastname, $password, $email]);
        } catch (PDOException $e) {
            echo 'Error: ' . $e->getMessage();
        }
    }
}

require 'View/register.php';


