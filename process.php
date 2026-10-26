<?php

require_once __DIR__ . '/components/bootstrap.php';

// FILE HAS BEEN CHANGED TO ADD PREPARED STATEMENTS AND DATA VALIDATION TO PREVENT SQL INJECTION
// https://www.w3schools.com/php/php_mysql_prepared_statements.asp
// https://stackoverflow.com/questions/60174/how-can-i-prevent-sql-injection-in-php
/* INFORMATION WAS TAKEN FROM THE FOLLOWING:
* https://medium.com/@ajay.monga73/parameterized-queries-php-guide-how-to-prevent-sql-injection-with-parameterized-queries-9899e77f9609
* https://www.php.net/manual/en/security.database.sql-injection.php
* Google Gemini helped debug code errors
*/

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    http_response_code(405);
    header('Allow: POST');
    exit('Method not allowed.');
}

// get the submitted form data
$values = [];
foreach (['first-name', 'last-name', 'email', 'tel', 'message'] as $field) {
    $value = $_POST[$field] ?? '';
    if (!is_string($value)) {
        http_response_code(400);
        exit('Please complete all fields with valid information.');
    }
    $values[$field] = trim($value);
}
$firstname = $values['first-name'];
$lastname  = $values['last-name'];
$email     = $values['email'];
$phone     = $values['tel'];
$message   = $values['message'];

// basic server side validation
if (
    $firstname === '' ||
    strlen($firstname) > 100 ||
    strlen($lastname) > 100 ||
    strlen($email) > 100 ||
    strlen($phone) > 100 ||
    strlen($message) > 5000 ||
    !filter_var($email, FILTER_VALIDATE_EMAIL) ||
    $message === ''
) {
    http_response_code(400); // https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/400
    exit('Please complete all fields with valid information.');
}

// connect to the database
$conn = database();

if (!$conn) {
    http_response_code(500); // https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/500
    exit('Sorry, something went wrong. Please try again later.');
}

// sql query
$sql = "INSERT INTO contact_submissions
        (fname, lname, email, tel, message)
        VALUES (?, ?, ?, ?, ?)";

$stmt = mysqli_prepare($conn, $sql);

if (!$stmt) {
    error_log('Statement preparation failed: ' . mysqli_error($conn));
    mysqli_close($conn);
    http_response_code(500); // https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/500
    exit('Sorry, something went wrong. Please try again later.');
}

// attach the form values to the placeholders
mysqli_stmt_bind_param(
    $stmt,
    'sssss', // strings
    $firstname,
    $lastname,
    $email,
    $phone,
    $message
);

// execute the query
if (mysqli_stmt_execute($stmt)) {

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

    mysqli_stmt_close($stmt);
    mysqli_close($conn);

    header('Location: ' . url('pages/thanks.php'), true, 303);
    exit();

} else {
    error_log('Insert failed: ' . mysqli_stmt_error($stmt));
    mysqli_stmt_close($stmt);
    mysqli_close($conn);

    http_response_code(500); // https://developer.mozilla.org/en-US/docs/Web/HTTP/Reference/Status/500
    exit('Sorry, your submission could not be saved. Please try again later.');
}
