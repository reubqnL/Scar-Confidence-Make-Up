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

        /** SOLUTION TO REDIRECT NOT WORKING:
        * https://stackoverflow.com/questions/12887186/calling-serverscript-name-from-files-deeper-in-the-hierarchy
        * https://www.sitepoint.com/community/t/problem-with-syntax-in-php-str-replace/370971
        * https://gist.github.com/ericrasch/dee85f069b1e7a3c4a90
        * https://pimylifeup.com/php-str-replace/
        * https://forums.phpfreaks.com/topic/301922-understanding-and-using-str_replace/
        *  Automatically detects and cleans the web application's base path URL.
        *
        *  1. $_SERVER['SCRIPT_NAME'] gets the path to the current script (e.g., '/pages/index.php').
        *  2. dirname() strips the filename, leaving just the directory path (e.g., '/pages').
        *  3. str_replace() converts any windows backslashes (\) to standard web forward slashes (/).
        *  4. rtrim() strips any trailing slash to ensure a uniform format for routing and asset URLs.
        */

        $basePath = rtrim(str_replace('\\', '/', dirname($_SERVER['SCRIPT_NAME'] ?? '/')), '/');
        header("Location: " . $basePath . "/pages/thanks.php?name=" . urlencode($firstname));

        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }

    mysqli_close($conn);
}

?>