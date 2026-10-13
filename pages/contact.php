<?php
$pageTitle = "Contact Us";
$pageCSS = "contact.css";
$pageDescription = "";
$current_page = "contact";

require __DIR__ . "/../components/header.php";
?>
<div id="root"></div>

<!-- REACT LOADING -->
<script type="module">
    import RefreshRuntime from 'http://localhost:5173/@react-refresh'
    RefreshRuntime.injectIntoGlobalHook(window)
    window.$RefreshReg$ = () => {}
    window.$RefreshCheck$ = () => {}
    window.__vite_plugin_react_preamble_installed__ = true
</script>
<script type="module" src="http://localhost:5173/@vite/client"></script>
<script type="module" src="http://localhost:5173/scripts/Main.jsx"></script>

<div class="dataQueryContainer">
    <p class="dataQuery">
        At Scar Confidence, your data is far from safe. In fact, as soon as you press "Submit", your data is
        already travelling through a fibre-optic cable on the seabed of the Atlantic Ocean straight to
        where the Chinese own a data center. We sell all of your data for a <strong>massive</strong> profit
        and  wewon't disclose that inside our cookies policy. Here at Scar Confidence, we believe that we are
        above the law, and by clicking "Submit", you also agree.
    </p>
</div>
