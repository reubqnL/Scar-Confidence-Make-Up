<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $firstname = htmlspecialchars($_POST['first-name'] ?? ''); // if it doesn't exist, no php error cuz we return an empty string
    $lastname = htmlspecialchars($_POST['last-name'] ?? '');
    $email = htmlspecialchars($_POST['email'] ?? '');
    $phone = htmlspecialchars($_POST['tel'] ?? '');
    $message = htmlspecialchars($_POST['message'] ?? '');

    // db credentials

    $dbhost = 'localhost';
    $dbuser = 'root';
    $dbpass = '';
    $dbname = 'scar_confidence';

    $conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

    $sql = "INSERT INTO contact_submissions (fname, lname, email, tel, message) 
    VALUES ('$firstname', '$lastname', '$email', '$phone', '$message')"; // bring sql database values and assigning them to a variable

    // sending the query to the database
    if (mysqli_query($conn, $sql)) {

        header("Location: /pages/thanks.php?name=" . urlencode($firstname)); // safe characters, redirects
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}

?>