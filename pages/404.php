<?php
$pageTitle = "404";
$pageCSS = "404.css";
$pageDescription = "Error 404";
$current_page = "index";

require __DIR__ . "/../components/header.php";
?>
<div class="errorPage">
<div class="errorContainer">
    <h2><strong>404</strong></h2>
<h3>Looks like this page got covered up.</h3>
    <hr>
<p>Don't worry, unlike a good concealer, this link really isn't hiding anything - it just doesn't exist.
    Let’s get you back to where you need to be.
</p>
<button id="toHome">Home</button>
</div>
</div>