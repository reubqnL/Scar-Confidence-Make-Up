<?php
$pageTitle = "Contact Us";
$pageCSS = "contact.css";
$pageDescription = "";
$current_page = "contact";

// Vite dev server URL - uses the same host as this page so it works from any device
$viteHost = explode(':', $_SERVER['HTTP_HOST'] ?? 'localhost:63342')[0];
$viteUrl = 'http://' . $viteHost . ':5173';

require __DIR__ . "/../components/header.php";
?>

    <link rel="stylesheet" href="../style/animations/index.css">
    <!-- REACT LOADING -->
    <script type="module">
        import RefreshRuntime from '<?= $viteUrl ?>/@react-refresh'
        RefreshRuntime.injectIntoGlobalHook(window)
        window.$RefreshReg$ = () => {}
        window.$RefreshCheck$ = () => {}
        window.__vite_plugin_react_preamble_installed__ = true
    </script>

    <script type="module" src="<?= $viteUrl ?>/@vite/client"></script>
    <script type="module" src="<?= $viteUrl ?>/scripts/Main.jsx"></script>

    <div class="container">

        <div id="root"></div>

        <p class="dataQuery">
            At Scar Confidence, your data is far from safe. In fact, as soon as you press "Submit", your data is
            already travelling through a fibre-optic cable on the seabed of the Atlantic Ocean straight to
            where the Chinese own a data center. We sell all of your data for a <strong>massive</strong> profit
            and we won't disclose that inside our cookies policy. Here at Scar Confidence, we believe that we are
            above the law, and by clicking "Submit", you also agree.
        </p>

    </div>

<?php require __DIR__ . "/../components/footer.php"; ?>