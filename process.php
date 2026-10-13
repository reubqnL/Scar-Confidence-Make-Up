<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $firstname = htmlspecialchars($_POST['first-name'] ?? ''); // if it doesn't exist, no php error cuz we return an empty string
    $lastname = htmlspecialchars($_POST['last-name'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $phone = htmlspecialchars($_POST['tel'] ?? '');
    $message = htmlspecialchars($_POST['message'] ?? '');
}

?>