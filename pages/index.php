<?php
$pageTitle = "Home Page";
$pageCSS = "index.css";
$pageDescription = "";
$current_page = "index";

require __DIR__ . "/../components/header.php";
?>
<link rel="stylesheet" href="../style/animations/index.css">

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

            <div class="hero-details">
                <div class="tag">
                    <span class="established"><h4>Established:</h4>
                    <h4 class="date">2025</h4>
                    </span>
                </div>
            </div>
        </div>
    </section>

    <section class="secondSection">
        <hr style="">
        <div class="secondSection-content">
            <h2 class="secondSection-header">
                Tailored solutions for improving patient recovery experiences
            </h2>
                <p class="secondSection-text">
                    At Scar Confidence, we provide customized scar management solutions designed
                    specifically for hospitals and medical professionals. Our services prioritize
                    quality care and patient comfort, ensuring effective outcomes. By focusing on
                    personalized solutions, we help enhance recovery and foster trust between
                    caregivers and patients in their healing journeys.
                </p>
            <img src="../assets/secondSectionImage.png" alt="">
        </div>
        <hr style="">
    </section>

</main>

<?php require __DIR__ . "/../components/banner.php"; ?>