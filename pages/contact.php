<?php
$pageTitle = "Contact Us";
$pageCSS = "contact.css";
$pageDescription = "Contact Scar Confidence for skin camouflage product information, professional guidance and clinical supply enquiries.";
$current_page = "contact";

// Vite dev server URL - uses the same host as this page so it works from any device
require_once __DIR__ . "/../components/header.php";
?>

    <main id="main-content" class="container">
        <div id="root" data-action="<?= escape(url('process.php')) ?>">
            <noscript>
                <p>Please enable JavaScript to use the contact form, or email <a href="mailto:hello@scarconfidencesheffield.co.uk">hello@scarconfidencesheffield.co.uk</a>.</p>
            </noscript>
        </div>

        <aside class="dataQuery" aria-labelledby="privacy-heading">
            <h2 id="privacy-heading">Your enquiry, handled with care</h2>
            <p>We use the information you provide to respond to your enquiry. We do not sell your data.</p>
            <p>Please do not include medical records or sensitive personal information. You can contact us directly if you need a more suitable way to get in touch.</p>
            <a href="#privacy">Read our privacy notice</a>
        </aside>
    </main>

<!-- REACT LOADING -->
<?= vite_assets('scripts/Main.jsx') ?>

<?php require_once __DIR__ . "/../components/footer.php"; ?>
