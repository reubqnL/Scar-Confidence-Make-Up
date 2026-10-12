<?php
$pageTitle = "Contact Us";
$pageCSS = "contact.css";
$pageDescription = "";
$current_page = "contact";

require __DIR__ . "/../components/header.php";
?>
<div id="root"></div>

<!-- connect to php page running vite server -->
<script type="module" src="http://localhost:5173/@vite/client"></script>
<script type="module" src="http://localhost:5173/scripts/contact.tsx"></script>
