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