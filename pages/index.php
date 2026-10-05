<?php
$pageTitle = "Home Page";
$pageCSS = "index.css";
$pageDescription = "";
$current_page = "index";

require __DIR__ . "/../components/header.php";
?>

<!-- LANDING PAGE -->
<main>
    <section class="hero">
        <div class="hero-content">
            <span><h2>Scar Confidence</h2>
            <hr style="
                border: none;
                height: 2px;
                background: linear-gradient(to right, black, transparent);
                width: calc(55% - 70px);
                margin-left: 30px;
            "></span>

            <span><h3>Ethical Care Solutions</h3>
            <hr style="
                border: none;
                height: 2px;
                background: linear-gradient(to right, black, transparent);
                width: calc(55% - 70px);
                margin-left: 30px;
            "></span>

            <span class="established"><h4>Established:</h4>
            <h4 class="2025">2025</h4>
            </span>

            <span class="tagline"><p><i>
                    Trusted by hospitals and the wider medical industry for over a year. We provide
                    authentic,<br> ethical solutions built on integrity and quality. Now expanding our
                    services to reach a global<br> audience.
                    </i></p></span>
        </div>
    </section>
</main>
