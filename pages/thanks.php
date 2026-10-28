<?php
$pageTitle = "Thank You";
$pageCSS = "thanks.css";
$pageDescription = "Your enquiry has been received by Scar Confidence.";
$current_page = "thanks";

require __DIR__ . "/../components/header.php";
?>

<main id="main-content" class="thanksPage">
    <div class="thanksContainer">
        <h2><strong>Thank You</strong></h2>
        <hr>
        <p>
            We appreciate your query, and we will reply as soon as possible. Please be aware that we are
            currently very busy, so expect a delayed response. Thank you for your time.
        </p>
        <button id="toHome" type="button">Home</button>
    </div>
</main>
<?php require __DIR__ . "/../components/footer.php"; ?>